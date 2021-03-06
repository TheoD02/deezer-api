<?php


namespace App\Types;


use App\Hydrator;
use App\Types\SubTypes\Contributor;
use App\Types\SubTypes\ExplicitContentLyrics;
use DateTime;

class Album
{
    private ?int $id;
    private ?string $title;
    private ?string $upc;
    private ?string $link;
    private ?string $share;
    private ?string $cover;
    private ?string $cover_small;
    private ?string $cover_medium;
    private ?string $cover_big;
    private ?string $cover_xl;
    private ?string $md5_image;
    private ?int $genre_id;
    private ?array $genres;
    private ?string $label;
    private ?int $nb_tracks;
    private ?int $duration;
    private ?int $fans;
    private ?int $rating;
    private ?DateTime $release_date;
    private ?string $record_type;
    private ?bool $available;
    private ?Genre $alternative;
    private ?string $tracklist;
    private bool $explicit_lyrics;
    private ?string $explicit_content_lyrics;
    private ?string $explicit_content_cover;
    private ?array $contributors;
    private ?Artist $artist;
    /** @var Track[] list of tracks */
    private ?array $tracks;
    private ?string $type;
    private ?int $position;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     *
     * @return Album
     */
    public function setId(?int $id): Album
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     *
     * @return Album
     */
    public function setTitle(?string $title): Album
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUpc(): ?string
    {
        return $this->upc;
    }

    /**
     * @param string|null $upc
     *
     * @return Album
     */
    public function setUpc(?string $upc): Album
    {
        $this->upc = $upc;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLink(): ?string
    {
        return $this->link;
    }

    /**
     * @param string|null $link
     *
     * @return Album
     */
    public function setLink(?string $link): Album
    {
        $this->link = $link;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getShare(): ?string
    {
        return $this->share;
    }

    /**
     * @param string|null $share
     *
     * @return Album
     */
    public function setShare(?string $share): Album
    {
        $this->share = $share;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCover(): ?string
    {
        return $this->cover;
    }

    /**
     * @param string|null $cover
     *
     * @return Album
     */
    public function setCover(?string $cover): Album
    {
        $this->cover = $cover;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCoverSmall(): ?string
    {
        return $this->cover_small;
    }

    /**
     * @param string|null $cover_small
     *
     * @return Album
     */
    public function setCoverSmall(?string $cover_small): Album
    {
        $this->cover_small = $cover_small;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCoverMedium(): ?string
    {
        return $this->cover_medium;
    }

    /**
     * @param string|null $cover_medium
     *
     * @return Album
     */
    public function setCoverMedium(?string $cover_medium): Album
    {
        $this->cover_medium = $cover_medium;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCoverBig(): ?string
    {
        return $this->cover_big;
    }

    /**
     * @param string|null $cover_big
     *
     * @return Album
     */
    public function setCoverBig(?string $cover_big): Album
    {
        $this->cover_big = $cover_big;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCoverXl(): ?string
    {
        return $this->cover_xl;
    }

    /**
     * @param string|null $cover_xl
     *
     * @return Album
     */
    public function setCoverXl(?string $cover_xl): Album
    {
        $this->cover_xl = $cover_xl;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMd5Image(): ?string
    {
        return $this->md5_image;
    }

    /**
     * @param string|null $md5_image
     *
     * @return Album
     */
    public function setMd5Image(?string $md5_image): Album
    {
        $this->md5_image = $md5_image;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getGenreId(): ?int
    {
        return $this->genre_id;
    }

    /**
     * @param int|null $genre_id
     *
     * @return Album
     */
    public function setGenreId(?int $genre_id): Album
    {
        $this->genre_id = $genre_id;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getGenres(): ?array
    {
        return $this->genres;
    }

    /**
     * @param array|null $genres
     *
     * @return Album
     */
    public function setGenres(?array $genres): Album
    {
        $this->genres = Hydrator::hydrateArray($genres, Genre::class);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * @param string|null $label
     *
     * @return Album
     */
    public function setLabel(?string $label): Album
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNbTracks(): ?int
    {
        return $this->nb_tracks;
    }

    /**
     * @param int|null $nb_tracks
     *
     * @return Album
     */
    public function setNbTracks(?int $nb_tracks): Album
    {
        $this->nb_tracks = $nb_tracks;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }

    /**
     * @param int|null $duration
     *
     * @return Album
     */
    public function setDuration(?int $duration): Album
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getFans(): ?int
    {
        return $this->fans;
    }

    /**
     * @param int|null $fans
     *
     * @return Album
     */
    public function setFans(?int $fans): Album
    {
        $this->fans = $fans;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRating(): ?int
    {
        return $this->rating;
    }

    /**
     * @param int|null $rating
     *
     * @return Album
     */
    public function setRating(?int $rating): Album
    {
        $this->rating = $rating;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getReleaseDate(): ?DateTime
    {
        return $this->release_date;
    }

    /**
     * @param string|null $release_date
     *
     * @return Album
     */
    public function setReleaseDate(string $release_date): Album
    {
        $this->release_date = new DateTime($release_date);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRecordType(): ?string
    {
        return $this->record_type;
    }

    /**
     * @param string|null $record_type
     *
     * @return Album
     */
    public function setRecordType(?string $record_type): Album
    {
        $this->record_type = $record_type;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getAvailable(): ?bool
    {
        return $this->available;
    }

    /**
     * @param bool|null $available
     *
     * @return Album
     */
    public function setAvailable(?bool $available): Album
    {
        $this->available = $available;
        return $this;
    }

    /**
     * @return Genre|null
     */
    public function getAlternative(): ?Genre
    {
        return $this->alternative;
    }

    /**
     * @param Genre|null $alternative
     *
     * @return Album
     */
    public function setAlternative(?Genre $alternative): Album
    {
        $this->alternative = $alternative;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTracklist(): ?string
    {
        return $this->tracklist;
    }

    /**
     * @param string|null $tracklist
     *
     * @return Album
     */
    public function setTracklist(?string $tracklist): Album
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
     * @return int|null
     */
    public function getExplicitContentLyrics(): ?int
    {
        return $this->explicit_content_lyrics;
    }

    /**
     * @param int|null $explicit_content_lyrics
     *
     * @return Album
     */
    public function setExplicitContentLyrics(?int $explicit_content_lyrics): Album
    {
        $this->explicit_content_lyrics = (new ExplicitContentLyrics())->getExplicitInfo($explicit_content_lyrics);
        return $this;
    }

    /**
     * @return int|null
     */
    public function getExplicitContentCover(): ?int
    {
        return $this->explicit_content_cover;
    }

    /**
     * @param int|null $explicit_content_cover
     *
     * @return Album
     */
    public function setExplicitContentCover(?int $explicit_content_cover): Album
    {
        $this->explicit_content_cover = (new ExplicitContentLyrics())->getExplicitInfo($explicit_content_cover);
        return $this;
    }

    /**
     * @return array|null
     */
    public function getContributors(): ?array
    {
        return $this->contributors;
    }

    /**
     * @param array|null $contributors
     *
     * @return Album
     */
    public function setContributors(?array $contributors): Album
    {
        $this->contributors = Hydrator::hydrateArray($contributors, Contributor::class);
        return $this;
    }

    /**
     * @return Artist|null
     */
    public function getArtist(): ?Artist
    {
        return $this->artist;
    }

    /**
     * @param array|null $artist
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
    public function getTracks(): ?array
    {
        return $this->tracks;
    }

    /**
     * @param Track[] $tracks
     *
     * @return Album
     */
    public function setTracks(?array $tracks): Album
    {
        $this->tracks = Hydrator::hydrateArray($tracks, Track::class);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     *
     * @return Album
     */
    public function setType(?string $type): Album
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }

    /**
     * @param int|null $position
     *
     * @return Album
     */
    public function setPosition(?int $position): Album
    {
        $this->position = $position;
        return $this;
    }
}