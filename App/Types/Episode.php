<?php


namespace App\Types;


class Episode
{
    private int $id;
    private string $title;
    private string $description;
    private bool $available;
    private string $release_date;
    private int $duration;
    private string $share;
    private string $picture;
    private string $picture_small;
    private string $picture_medium;
    private string $picture_big;
    private string $picture_xl;
    private Podcast $podcast;

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
     * @return Episode
     */
    public function setId(int $id): Episode
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
     * @return Episode
     */
    public function setTitle(string $title): Episode
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
     * @return Episode
     */
    public function setDescription(string $description): Episode
    {
        $this->description = $description;
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
     * @return Episode
     */
    public function setAvailable(bool $available): Episode
    {
        $this->available = $available;
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
     * @return Episode
     */
    public function setReleaseDate(string $release_date): Episode
    {
        $this->release_date = $release_date;
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
     * @return Episode
     */
    public function setDuration(int $duration): Episode
    {
        $this->duration = $duration;
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
     * @return Episode
     */
    public function setShare(string $share): Episode
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
     * @return Episode
     */
    public function setPicture(string $picture): Episode
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
     * @return Episode
     */
    public function setPictureSmall(string $picture_small): Episode
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
     * @return Episode
     */
    public function setPictureMedium(string $picture_medium): Episode
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
     * @return Episode
     */
    public function setPictureBig(string $picture_big): Episode
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
     * @return Episode
     */
    public function setPictureXl(string $picture_xl): Episode
    {
        $this->picture_xl = $picture_xl;
        return $this;
    }

    /**
     * @return Podcast
     */
    public function getPodcast(): Podcast
    {
        return $this->podcast;
    }

    /**
     * @param Podcast $podcast
     *
     * @return Episode
     */
    public function setPodcast(Podcast $podcast): Episode
    {
        $this->podcast = $podcast;
        return $this;
    }
}