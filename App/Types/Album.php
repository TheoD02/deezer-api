<?php


namespace App\Types;


use App\Hydrator;
use App\Types\SubTypes\Contributor;

class Album
{
    private int $id;
    private string $title;
    private string $upc;
    private string $link;
    private string $share;
    private string $cover;
    private string $cover_small;
    private string $cover_medium;
    private string $cover_big;
    private string $cover_xl;
    private string $md5_image;
    private int $genre_id;
    private array $genres;
    private string $label;
    private int $nb_trakcs;
    private int $duration;
    private int $fans;
    private int $rating;
    private ?\DateTime $release_date;
    private string $record_type;
    private bool $available;
    private $alternative; // TODO : genre
    private string $tracklist;
    private bool $explicit_lyrics;
    private int $explicit_content_lyrics; // TODO : create object to handle number easily
    private int $explicit_content_cover; // TODO : same as before
    private array $contributors;
    private Artist $artist;
    /** @var Track[] list of tracks */
    private array $tracks;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Album
     */
    public function setId(int $id): Album
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return Album
     */
    public function setTitle(string $title): Album
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpc(): string
    {
        return $this->upc;
    }

    /**
     * @param string $upc
     *
     * @return Album
     */
    public function setUpc(string $upc): Album
    {
        $this->upc = $upc;
        return $this;
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * @param string $link
     *
     * @return Album
     */
    public function setLink(string $link): Album
    {
        $this->link = $link;
        return $this;
    }

    /**
     * @return string
     */
    public function getShare(): string
    {
        return $this->share;
    }

    /**
     * @param string $share
     *
     * @return Album
     */
    public function setShare(string $share): Album
    {
        $this->share = $share;
        return $this;
    }

    /**
     * @return string
     */
    public function getCover(): string
    {
        return $this->cover;
    }

    /**
     * @param string $cover
     *
     * @return Album
     */
    public function setCover(string $cover): Album
    {
        $this->cover = $cover;
        return $this;
    }

    /**
     * @return string
     */
    public function getCoverSmall(): string
    {
        return $this->cover_small;
    }

    /**
     * @param string $cover_small
     *
     * @return Album
     */
    public function setCoverSmall(string $cover_small): Album
    {
        $this->cover_small = $cover_small;
        return $this;
    }

    /**
     * @return string
     */
    public function getCoverMedium(): string
    {
        return $this->cover_medium;
    }

    /**
     * @param string $cover_medium
     *
     * @return Album
     */
    public function setCoverMedium(string $cover_medium): Album
    {
        $this->cover_medium = $cover_medium;
        return $this;
    }

    /**
     * @return string
     */
    public function getCoverBig(): string
    {
        return $this->cover_big;
    }

    /**
     * @param string $cover_big
     *
     * @return Album
     */
    public function setCoverBig(string $cover_big): Album
    {
        $this->cover_big = $cover_big;
        return $this;
    }

    /**
     * @return string
     */
    public function getCoverXl(): string
    {
        return $this->cover_xl;
    }

    /**
     * @param string $cover_xl
     *
     * @return Album
     */
    public function setCoverXl(string $cover_xl): Album
    {
        $this->cover_xl = $cover_xl;
        return $this;
    }

    /**
     * @return string
     */
    public function getMd5Image(): string
    {
        return $this->md5_image;
    }

    /**
     * @param string $md5_image
     *
     * @return Album
     */
    public function setMd5Image(string $md5_image): Album
    {
        $this->md5_image = $md5_image;
        return $this;
    }

    /**
     * @return int
     */
    public function getGenreId(): int
    {
        return $this->genre_id;
    }

    /**
     * @param int $genre_id
     *
     * @return Album
     */
    public function setGenreId(int $genre_id): Album
    {
        $this->genre_id = $genre_id;
        return $this;
    }

    /**
     * @return array
     */
    public function getGenres(): array
    {
        return $this->genres;
    }

    /**
     * @param array $genres
     *
     * @return Album
     */
    public function setGenres(array $genres): Album
    {
        $this->genres = Hydrator::hydrateArray($genres, Genre::class);
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     *
     * @return Album
     */
    public function setLabel(string $label): Album
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbTrakcs(): int
    {
        return $this->nb_trakcs;
    }

    /**
     * @param int $nb_trakcs
     *
     * @return Album
     */
    public function setNbTrakcs(int $nb_trakcs): Album
    {
        $this->nb_trakcs = $nb_trakcs;
        return $this;
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     *
     * @return Album
     */
    public function setDuration(int $duration): Album
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return int
     */
    public function getFans(): int
    {
        return $this->fans;
    }

    /**
     * @param int $fans
     *
     * @return Album
     */
    public function setFans(int $fans): Album
    {
        $this->fans = $fans;
        return $this;
    }

    /**
     * @return int
     */
    public function getRating(): int
    {
        return $this->rating;
    }

    /**
     * @param int $rating
     *
     * @return Album
     */
    public function setRating(int $rating): Album
    {
        $this->rating = $rating;
        return $this;
    }

    /**
     * @return ?\DateTime
     */
    public function getReleaseDate(): ?\DateTime
    {
        return $this->release_date;
    }

    /**
     * @param string $release_date
     *
     * @return Album
     * @throws \Exception
     */
    public function setReleaseDate(string $release_date): Album
    {
        $this->release_date = new \DateTime($release_date);
        return $this;
    }

    /**
     * @return string
     */
    public function getRecordType(): string
    {
        return $this->record_type;
    }

    /**
     * @param string $record_type
     *
     * @return Album
     */
    public function setRecordType(string $record_type): Album
    {
        $this->record_type = $record_type;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAvailable(): bool
    {
        return $this->available;
    }

    /**
     * @param bool $available
     *
     * @return Album
     */
    public function setAvailable(bool $available): Album
    {
        $this->available = $available;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlternative()
    {
        return $this->alternative;
    }

    /**
     * @param mixed $alternative
     *
     * @return Album
     */
    public function setAlternative($alternative)
    {
        $this->alternative = $alternative;
        return $this;
    }

    /**
     * @return string
     */
    public function getTracklist(): string
    {
        return $this->tracklist;
    }

    /**
     * @param string $tracklist
     *
     * @return Album
     */
    public function setTracklist(string $tracklist): Album
    {
        $this->tracklist = $tracklist;
        return $this;
    }

    /**
     * @return bool
     */
    public function isExplicitLyrics(): bool
    {
        return $this->explicit_lyrics;
    }

    /**
     * @param bool $explicit_lyrics
     *
     * @return Album
     */
    public function setExplicitLyrics(bool $explicit_lyrics): Album
    {
        $this->explicit_lyrics = $explicit_lyrics;
        return $this;
    }

    /**
     * @return int
     */
    public function getExplicitContentLyrics(): int
    {
        return $this->explicit_content_lyrics;
    }

    /**
     * @param int $explicit_content_lyrics
     *
     * @return Album
     */
    public function setExplicitContentLyrics(int $explicit_content_lyrics): Album
    {
        $this->explicit_content_lyrics = $explicit_content_lyrics;
        return $this;
    }

    /**
     * @return int
     */
    public function getExplicitContentCover(): int
    {
        return $this->explicit_content_cover;
    }

    /**
     * @param int $explicit_content_cover
     *
     * @return Album
     */
    public function setExplicitContentCover(int $explicit_content_cover): Album
    {
        $this->explicit_content_cover = $explicit_content_cover;
        return $this;
    }

    /**
     * @return array
     */
    public function getContributors(): array
    {
        return $this->contributors;
    }

    /**
     * @param array $contributors
     *
     * @return Album
     */
    public function setContributors(array $contributors): Album
    {
        $this->contributors = Hydrator::hydrateArray($contributors, Contributor::class);
        return $this;
    }

    /**
     * @return Artist
     */
    public function getArtist(): Artist
    {
        return $this->artist;
    }

    /**
     * @param array $artist
     *
     * @return Album
     */
    public function setArtist(array $artist): Album
    {
        $this->artist = Hydrator::hydrate($artist, Artist::class);
        return $this;
    }

    /**
     * @return Track[]
     */
    public function getTracks(): array
    {
        return $this->tracks;
    }

    /**
     * @param Track[] $tracks
     *
     * @return Album
     */
    public function setTracks(array $tracks): Album
    {
        $this->tracks = Hydrator::hydrateArray($tracks, Track::class);
        return $this;
    }
}