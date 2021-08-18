<?php


namespace App\Types;


class Playlist
{
    private int $id;
    private string $title;
    private string $description;
    private int $duration;
    private bool $public;
    private bool $is_loved_track;
    private bool $is_collaborative;
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
    private User $user;
    /** @var Track[] */
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
    public function isIsCollaborative(): bool
    {
        return $this->is_collaborative;
    }

    /**
     * @param bool $is_collaborative
     *
     * @return Playlist
     */
    public function setIsCollaborative(bool $is_collaborative): Playlist
    {
        $this->is_collaborative = $is_collaborative;
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
     * @param User $user
     *
     * @return Playlist
     */
    public function setUser(User $user): Playlist
    {
        $this->user = $user;
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
        $this->tracks = $tracks;
        return $this;
    }
}