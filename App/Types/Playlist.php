<?php


namespace App\Types;


use App\Hydrator;
use App\Types\SubTypes\Creator;
use DateTime;

class Playlist
{
    private int $id;
    private string $title;
    private string $description;
    private int $duration;
    private bool $public;
    private bool $is_loved_track;
    private bool $collaborative;
    private int $rating;
    private int $nb_tracks;
    private int $unseen_track_count;
    private int $fans;
    private string $link;
    private string $share;
    private string $picture;
    private string $picture_small;
    private string $picture_medium;
    private string $picture_big;
    private string $picture_xl;
    private string $checksum;
    private string $tracklist;
    private User $user;
    /** @var Track[] */
    private array $tracks;
    private DateTime $creation_date;
    private string $md5_image;
    private string $picture_type;
    private string $type;
    private Creator $creator;

    /**
     * @return Creator
     */
    public function getCreator(): Creator
    {
        return $this->creator;
    }

    /**
     * @param array $creator
     *
     * @return Playlist
     */
    public function setCreator(array $creator): Playlist
    {
        $this->creator = Hydrator::hydrate($creator, Creator::class);
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
     * @return Playlist
     */
    public function setType(string $type): Playlist
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getPictureType(): string
    {
        return $this->picture_type;
    }

    /**
     * @param string $picture_type
     *
     * @return Playlist
     */
    public function setPictureType(string $picture_type): Playlist
    {
        $this->picture_type = $picture_type;
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
     * @return Playlist
     */
    public function setMd5Image(string $md5_image): Playlist
    {
        $this->md5_image = $md5_image;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreationDate(): DateTime
    {
        return $this->creation_date;
    }

    /**
     * @param string $creation_date
     *
     * @return Playlist
     * @throws \Exception
     */
    public function setCreationDate(string $creation_date): Playlist
    {
        $this->creation_date = new DateTime($creation_date);
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
     * @return Playlist
     */
    public function setTracklist(string $tracklist): Playlist
    {
        $this->tracklist = $tracklist;
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
     * @return Playlist
     */
    public function setId(int $id): Playlist
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
     * @return Playlist
     */
    public function setTitle(string $title): Playlist
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return Playlist
     */
    public function setDescription(string $description): Playlist
    {
        $this->description = $description;
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
     * @return Playlist
     */
    public function setDuration(int $duration): Playlist
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPublic(): bool
    {
        return $this->public;
    }

    /**
     * @param bool $public
     *
     * @return Playlist
     */
    public function setPublic(bool $public): Playlist
    {
        $this->public = $public;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIsLovedTrack(): bool
    {
        return $this->is_loved_track;
    }

    /**
     * @param bool $is_loved_track
     *
     * @return Playlist
     */
    public function setIsLovedTrack(bool $is_loved_track): Playlist
    {
        $this->is_loved_track = $is_loved_track;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCollaborative(): bool
    {
        return $this->collaborative;
    }

    /**
     * @param bool $collaborative
     *
     * @return Playlist
     */
    public function setCollaborative(bool $collaborative): Playlist
    {
        $this->collaborative = $collaborative;
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
     * @return Playlist
     */
    public function setRating(int $rating): Playlist
    {
        $this->rating = $rating;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbTracks(): int
    {
        return $this->nb_tracks;
    }

    /**
     * @param int $nb_tracks
     *
     * @return Playlist
     */
    public function setNbTracks(int $nb_tracks): Playlist
    {
        $this->nb_tracks = $nb_tracks;
        return $this;
    }

    /**
     * @return int
     */
    public function getUnseenTrackCount(): int
    {
        return $this->unseen_track_count;
    }

    /**
     * @param int $unseen_track_count
     *
     * @return Playlist
     */
    public function setUnseenTrackCount(int $unseen_track_count): Playlist
    {
        $this->unseen_track_count = $unseen_track_count;
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
     * @return Playlist
     */
    public function setFans(int $fans): Playlist
    {
        $this->fans = $fans;
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
     * @return Playlist
     */
    public function setLink(string $link): Playlist
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
     * @return Playlist
     */
    public function setShare(string $share): Playlist
    {
        $this->share = $share;
        return $this;
    }

    /**
     * @return string
     */
    public function getPicture(): string
    {
        return $this->picture;
    }

    /**
     * @param string $picture
     *
     * @return Playlist
     */
    public function setPicture(string $picture): Playlist
    {
        $this->picture = $picture;
        return $this;
    }

    /**
     * @return string
     */
    public function getPictureSmall(): string
    {
        return $this->picture_small;
    }

    /**
     * @param string $picture_small
     *
     * @return Playlist
     */
    public function setPictureSmall(string $picture_small): Playlist
    {
        $this->picture_small = $picture_small;
        return $this;
    }

    /**
     * @return string
     */
    public function getPictureMedium(): string
    {
        return $this->picture_medium;
    }

    /**
     * @param string $picture_medium
     *
     * @return Playlist
     */
    public function setPictureMedium(string $picture_medium): Playlist
    {
        $this->picture_medium = $picture_medium;
        return $this;
    }

    /**
     * @return string
     */
    public function getPictureBig(): string
    {
        return $this->picture_big;
    }

    /**
     * @param string $picture_big
     *
     * @return Playlist
     */
    public function setPictureBig(string $picture_big): Playlist
    {
        $this->picture_big = $picture_big;
        return $this;
    }

    /**
     * @return string
     */
    public function getPictureXl(): string
    {
        return $this->picture_xl;
    }

    /**
     * @param string $picture_xl
     *
     * @return Playlist
     */
    public function setPictureXl(string $picture_xl): Playlist
    {
        $this->picture_xl = $picture_xl;
        return $this;
    }

    /**
     * @return string
     */
    public function getChecksum(): string
    {
        return $this->checksum;
    }

    /**
     * @param string $checksum
     *
     * @return Playlist
     */
    public function setChecksum(string $checksum): Playlist
    {
        $this->checksum = $checksum;
        return $this;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param array $user
     *
     * @return Playlist
     */
    public function setUser(array $user): Playlist
    {
        $this->user = Hydrator::hydrate($user, User::class);
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
     * @return Playlist
     */
    public function setTracks(array $tracks): Playlist
    {
        $this->tracks = Hydrator::hydrateArray($tracks, Track::class);
        return $this;
    }
}