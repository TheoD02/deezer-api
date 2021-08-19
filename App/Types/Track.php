<?php


namespace App\Types;


use App\Hydrator;
use App\Types\SubTypes\Contributor;
use App\Types\SubTypes\ExplicitContentLyrics;
use DateTime;

class Track
{
    private int $id;
    private bool $readable;
    private string $title;
    private string $title_short;
    private string $title_version;
    private bool $unseen;
    private string $isrc;
    private string $link;
    private string $share;
    private int $duration;
    private int $position;
    private int $track_position;
    private int $disk_number;
    private int $rank;
    private string $release_date;
    private bool $explicit_lyrics;
    private ?string $explicit_content_lyrics;
    private ?string $explicit_content_cover;
    private string $preview;
    private float $bpm;
    private float $gain;
    private array $available_countries;
    private Track $alternative;
    private array $contributors;
    private string $md5_image;
    private Artist $artist;
    private Album $album;
    private string $type;
    private DateTime $time_add;

    /**
     * @return DateTime
     */
    public function getTimeAdd(): DateTime
    {
        return $this->time_add;
    }

    /**
     * @param int $time_add
     *
     * @return Track
     */
    public function setTimeAdd(int $time_add): Track
    {
        $this->time_add = (new DateTime())->setTimestamp($time_add);
        return $this;
    }


    /**
     * @return int
     */
    public function getTrackPosition(): int
    {
        return $this->track_position;
    }

    /**
     * @param int $track_position
     *
     * @return Track
     */
    public function setTrackPosition(int $track_position): Track
    {
        $this->track_position = $track_position;
        return $this;
    }

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
     * @return Track
     */
    public function setId(int $id): Track
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return bool
     */
    public function isReadable(): bool
    {
        return $this->readable;
    }

    /**
     * @param bool $readable
     *
     * @return Track
     */
    public function setReadable(bool $readable): Track
    {
        $this->readable = $readable;
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
     * @return Track
     */
    public function setTitle(string $title): Track
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitleShort(): string
    {
        return $this->title_short;
    }

    /**
     * @param string $title_short
     *
     * @return Track
     */
    public function setTitleShort(string $title_short): Track
    {
        $this->title_short = $title_short;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitleVersion(): string
    {
        return $this->title_version;
    }

    /**
     * @param string $title_version
     *
     * @return Track
     */
    public function setTitleVersion(string $title_version): Track
    {
        $this->title_version = $title_version;
        return $this;
    }

    /**
     * @return bool
     */
    public function isUnseen(): bool
    {
        return $this->unseen;
    }

    /**
     * @param bool $unseen
     *
     * @return Track
     */
    public function setUnseen(bool $unseen): Track
    {
        $this->unseen = $unseen;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsrc(): string
    {
        return $this->isrc;
    }

    /**
     * @param string $isrc
     *
     * @return Track
     */
    public function setIsrc(string $isrc): Track
    {
        $this->isrc = $isrc;
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
     * @return Track
     */
    public function setLink(string $link): Track
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
     * @return Track
     */
    public function setShare(string $share): Track
    {
        $this->share = $share;
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
     * @return Track
     */
    public function setDuration(int $duration): Track
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @param int $position
     *
     * @return Track
     */
    public function setPosition(int $position): Track
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @return int
     */
    public function getDiskNumber(): int
    {
        return $this->disk_number;
    }

    /**
     * @param int $disk_number
     *
     * @return Track
     */
    public function setDiskNumber(int $disk_number): Track
    {
        $this->disk_number = $disk_number;
        return $this;
    }

    /**
     * @return int
     */
    public function getRank(): int
    {
        return $this->rank;
    }

    /**
     * @param int $rank
     *
     * @return Track
     */
    public function setRank(int $rank): Track
    {
        $this->rank = $rank;
        return $this;
    }

    /**
     * @return string
     */
    public function getReleaseDate(): string
    {
        return $this->release_date;
    }

    /**
     * @param string $release_date
     *
     * @return Track
     */
    public function setReleaseDate(string $release_date): Track
    {
        $this->release_date = $release_date;
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
     * @return Track
     */
    public function setExplicitLyrics(bool $explicit_lyrics): Track
    {
        $this->explicit_lyrics = $explicit_lyrics;
        return $this;
    }

    /**
     * @return string
     */
    public function getExplicitContentLyrics(): string
    {
        return $this->explicit_content_lyrics;
    }

    /**
     * @param int $explicit_content_lyrics
     *
     * @return Track
     */
    public function setExplicitContentLyrics(int $explicit_content_lyrics): Track
    {
        $this->explicit_content_lyrics = (new ExplicitContentLyrics())->getExplicitInfo($explicit_content_lyrics);
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
     * @return Track
     */
    public function setExplicitContentCover(int $explicit_content_cover): Track
    {
        $this->explicit_content_cover = (new ExplicitContentLyrics())->getExplicitInfo($explicit_content_cover);
        return $this;
    }

    /**
     * @return string
     */
    public function getPreview(): string
    {
        return $this->preview;
    }

    /**
     * @param string $preview
     *
     * @return Track
     */
    public function setPreview(string $preview): Track
    {
        $this->preview = $preview;
        return $this;
    }

    /**
     * @return float
     */
    public function getBpm(): float
    {
        return $this->bpm;
    }

    /**
     * @param float $bpm
     *
     * @return Track
     */
    public function setBpm(float $bpm): Track
    {
        $this->bpm = $bpm;
        return $this;
    }

    /**
     * @return float
     */
    public function getGain(): float
    {
        return $this->gain;
    }

    /**
     * @param float $gain
     *
     * @return Track
     */
    public function setGain(float $gain): Track
    {
        $this->gain = $gain;
        return $this;
    }

    /**
     * @return array
     */
    public function getAvailableCountries(): array
    {
        return $this->available_countries;
    }

    /**
     * @param array $available_countries
     *
     * @return Track
     */
    public function setAvailableCountries(array $available_countries): Track
    {
        $this->available_countries = $available_countries;
        return $this;
    }

    /**
     * @return Track
     */
    public function getAlternative(): Track
    {
        return $this->alternative;
    }

    /**
     * @param Track $alternative
     *
     * @return Track
     */
    public function setAlternative(Track $alternative): Track
    {
        $this->alternative = $alternative;
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
     * @return Track
     */
    public function setContributors(array $contributors): Track
    {
        $this->contributors = Hydrator::hydrateArray($contributors, Contributor::class);
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
     * @return Track
     */
    public function setMd5Image(string $md5_image): Track
    {
        $this->md5_image = $md5_image;
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
     * @return Track
     */
    public function setArtist(array $artist): Track
    {
        $this->artist = Hydrator::hydrate($artist, Artist::class);;
        return $this;
    }

    /**
     * @return Album
     */
    public function getAlbum(): Album
    {
        return $this->album;
    }

    /**
     * @param array $album
     *
     * @return Track
     */
    public function setAlbum(array $album): Track
    {
        $this->album = Hydrator::hydrate($album, Album::class);
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return Track
     */
    public function setType(string $type): Track
    {
        $this->type = $type;
        return $this;
    }
}