<?php

namespace App\Helper;

use App\Hydrator;
use App\Types\Album;
use App\Types\Artist;
use App\Types\Chart;
use App\Types\Editorial;
use App\Types\Episode;
use App\Types\Genre;
use App\Types\Infos;
use App\Types\Options;
use App\Types\Playlist;
use App\Types\Podcast;
use App\Types\Radio;
use App\Types\Search;
use App\Types\Track;
use App\Types\User;

class DeezerApi
{
    /**
     * Deezer API permissions
     *
     * @see https://developers.deezer.com/api/permissions
     */
    /** @var string Access users basic information */
    const BASIC_ACCESS = 'basic_access';
    /** @var string Get the user's email */
    const EMAIL = 'email';
    /** @var string Access user data any time */
    const OFFLINE_ACCESS = 'offline_access';
    /** @var string Manage users' library (Application may access user data at any time) */
    const MANAGE_LIBRARY = 'manage_library';
    /** @var string Manage users' friends (Add/rename a playlist. Add/order songs in the playlist.) */
    const MANAGE_COMMUNITY = 'manage_community';
    /** @var string Delete library items (Add/remove a following/follower.) */
    const DELETE_LIBRARY = 'delete_library';
    /** @var string Allow the application to access the user's listening history (Allow the application to delete items in the user's library) */
    const LISTENING_HISTORY = 'listening_history';
    /** @var string TO GET ALL ACCESS POSSIBLE */
    const ALL_ACCESS = [self::BASIC_ACCESS, self::EMAIL, self::OFFLINE_ACCESS, self::MANAGE_LIBRARY, self::MANAGE_COMMUNITY, self::DELETE_LIBRARY, self::LISTENING_HISTORY];

    private const API_BASE_URL = 'https://api.deezer.com/';

    private string $apiToken;
    private array $perms = [];
    private string $appAuthentificationUrl = "https://connect.deezer.com/oauth/auth.php?app_id=YOUR_APP_ID&redirect_uri=YOUR_REDIRECT_URI&perms=PERMS";
    private bool $isLogged = false;


    private const MAX_REQUEST_PER_SECOND = 49;
    private static ?\DateTime $last_reset_datetime = null;
    private static ?\DateTime $current_date_time = null;
    static int $nb_requested = 0;

    private static function handleRequestTime()
    {
        self::$nb_requested++;
        self::$current_date_time = new \DateTime();
        if (self::$last_reset_datetime === null)
        {
            self::$last_reset_datetime = new \DateTime();
        }

        $diffWithLastReset = self::$current_date_time->diff(self::$last_reset_datetime);
        /*
         $isOverSec         = $diffWithLastReset->s >= 4;

        if ($isOverSec && self::$nb_requested >= self::MAX_REQUEST_PER_SECOND)
        {
            echo 'await 1' . PHP_EOL;
            usleep(1500 * 1000);
            self::$last_reset_datetime = new \DateTime();
            self::$nb_requested        = 0;
        }
        */
        if (self::$nb_requested >= self::MAX_REQUEST_PER_SECOND && $diffWithLastReset->s <= 5)
        {
            $awaitTime = 5 - $diffWithLastReset->s;
            $awaitTime = $awaitTime <= 0 ? 1 : $awaitTime;
            sleep($awaitTime);
            self::$last_reset_datetime = new \DateTime();
            self::$nb_requested        = 0;
        }
    }

    public function __construct()
    {

    }

    /**
     * Check if API Token is here
     *
     * @return bool
     * @throws \Exception
     */
    private function needApiToken()
    {
        if (!$this->isLogged) throw new \Exception('To access this function you need to have a API token');
        return $this->isLogged;
    }

    /**
     * Define permissions for API
     * Please use CONSTANT of this class in array
     *
     * @param array $permissions
     *
     * @throws \Exception
     */
    public function setPermissions(array $permissions)
    {
        $permissionsNotExist = [];
        foreach ($permissions as $perm)
        {
            if (in_array($perm, [self::BASIC_ACCESS, self::DELETE_LIBRARY, self::EMAIL, self::LISTENING_HISTORY, self::MANAGE_COMMUNITY, self::MANAGE_LIBRARY, self::OFFLINE_ACCESS], true))
            {
                $this->perms[] = $perm;
            }
            else
            {
                $permissionsNotExist[] = $perm;
            }
        }
        if ($permissionsNotExist)
        {
            throw new \Exception('You pass a permission doesn\'t exist in deezer API (' . implode(', ', $permissionsNotExist) . ')');
        }
    }

    /**
     * Verify necessary elements to build authentification URL
     * if one element are missing error is thrown
     * else return auth url
     *
     * @return string authentification url
     * @throws \Exception
     */
    public function generateAuthentificationUrl(): string
    {
        if (!preg_match('/\d+/', $_ENV['APP_ID']))
        {
            throw new \Exception('Please set a valid APP ID in "APP_ID" env variable.');
        }
        if (!filter_var($_ENV['REDIRECT_URI'], FILTER_VALIDATE_URL))
        {
            throw new \Exception('Please set a valid uri in "REDIRECT_URI" env variable.');
        }
        if (!is_array($this->perms) || empty($this->perms))
        {
            throw new \Exception('Please set permissions with setPermissions() and constant DeezerApi::BASIC_ACCESS.');
        }
        $this->appAuthentificationUrl = str_replace('YOUR_APP_ID', $_ENV['APP_ID'], $this->appAuthentificationUrl);
        $this->appAuthentificationUrl = str_replace('YOUR_REDIRECT_URI', $_ENV['REDIRECT_URI'], $this->appAuthentificationUrl);
        $this->appAuthentificationUrl = str_replace('PERMS', implode(',', $this->perms), $this->appAuthentificationUrl);
        return $this->appAuthentificationUrl;
    }

    /**
     * @throws \JsonException
     * @throws \Exception
     */
    private static function callApi($endpoint)
    {
        self::handleRequestTime();
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, self::API_BASE_URL . $endpoint);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response    = curl_exec($ch);
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $body        = substr($response, $header_size);

        $resCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($resCode === 200)
        {
            $body = json_decode($body, true, 512, JSON_THROW_ON_ERROR);
            if (isset($body['error']))
            {
                throw new \Exception($body['error']['type'] . '  -  ' . $body['error']['message']);
            }
            return $body;
        }

        throw new \Exception('An error is occurred on request error code : ' . $resCode);
    }

    /**
     * @throws \JsonException
     */
    public function getAlbumById($id): Album
    {
        return Hydrator::hydrate(self::callApi("/album/$id"), Album::class);
    }

    /**
     * @throws \JsonException
     */
    public function getArtistById($id): Artist
    {
        return Hydrator::hydrate(self::callApi("/artist/$id"), Artist::class);
    }

    /**
     * @throws \JsonException
     */
    public function getChart(): Chart
    {
        return Hydrator::hydrate(self::callApi("/chart"), Chart::class);
    }

    /**
     * @throws \JsonException
     */
    public function getEditorialById($id): Editorial
    {
        return Hydrator::hydrate(self::callApi("/editorial/$id"), Editorial::class);
    }

    /**
     * @return Editorial[]
     * @throws \JsonException
     */
    public function getAllEditorial(): array
    {
        return Hydrator::hydrateArray(self::callApi('/editorial'), Editorial::class);
    }

    /**
     * @throws \JsonException
     */
    public function getEpisodeById($id): Episode
    {
        return Hydrator::hydrate(self::callApi("/episode/$id"), Episode::class);
    }

    /**
     * @throws \JsonException
     */
    public function getGenreById($id): Genre
    {
        return Hydrator::hydrate(self::callApi("/genre/$id"), Genre::class);
    }

    /**
     * @throws \JsonException
     */
    public function getAllGenres(): array
    {
        return Hydrator::hydrateArray(self::callApi("/genre"), Genre::class);
    }

    /**
     * @throws \JsonException
     */
    public function getInfos(): Infos
    {
        return Hydrator::hydrate(self::callApi("/infos"), Infos::class);
    }

    /**
     * @throws \JsonException
     */
    public function getOptions(): Options
    {
        return Hydrator::hydrate(self::callApi("/options"), Options::class);
    }

    /**
     * @throws \JsonException
     */
    public function getPlaylistById($id): Playlist
    {
        return Hydrator::hydrate(self::callApi("/playlist/$id"), Playlist::class);
    }

    /**
     * @throws \JsonException
     */
    public function getPodcast(): array
    {
        return Hydrator::hydrateArray(self::callApi("/podcast"), Podcast::class);
    }

    /**
     * @throws \JsonException
     */
    public function getRadioById($id): Radio
    {
        return Hydrator::hydrate(self::callApi("/radio/$id"), Radio::class);
    }

    /**
     * @throws \JsonException
     */
    public function getAllRadios(): array
    {
        return Hydrator::hydrateArray(self::callApi("/radio"), Radio::class);
    }

    /**
     * @throws \JsonException
     */
    public function search($query): array
    {
        return Hydrator::hydrateArray(self::callApi("/search/$query"), Search::class);
    }

    /**
     * @throws \JsonException
     */
    public function getTrackById($id): Track
    {
        return Hydrator::hydrate(self::callApi("/track/$id"), Track::class);
    }

    /**
     * @throws \JsonException
     */
    public function getUser(): User
    {
        $this->needApiToken();
        return Hydrator::hydrate(self::callApi("/user/me"), User::class);
    }
}