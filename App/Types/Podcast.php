<?php


namespace App\Types;


class Podcast
{
    private int $id;
    private string $title;
    private string $description;
    private bool $available;
    private int $rating;
    private int $fans;
    private string $link;
    private string $share;
    private string $picture;
    private string $picture_small;
    private string $picture_medium;
    private string $picture_big;
    private string $picture_xl;

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
     * @return Podcast
     */
    public function setId(int $id): Podcast
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
     * @return Podcast
     */
    public function setTitle(string $title): Podcast
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
     * @return Podcast
     */
    public function setDescription(string $description): Podcast
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
     * @return Podcast
     */
    public function setAvailable(bool $available): Podcast
    {
        $this->available = $available;
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
     * @return Podcast
     */
    public function setRating(int $rating): Podcast
    {
        $this->rating = $rating;
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
     * @return Podcast
     */
    public function setFans(int $fans): Podcast
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
     * @return Podcast
     */
    public function setLink(string $link): Podcast
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
     * @return Podcast
     */
    public function setShare(string $share): Podcast
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
     * @return Podcast
     */
    public function setPicture(string $picture): Podcast
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
     * @return Podcast
     */
    public function setPictureSmall(string $picture_small): Podcast
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
     * @return Podcast
     */
    public function setPictureMedium(string $picture_medium): Podcast
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
     * @return Podcast
     */
    public function setPictureBig(string $picture_big): Podcast
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
     * @return Podcast
     */
    public function setPictureXl(string $picture_xl): Podcast
    {
        $this->picture_xl = $picture_xl;
        return $this;
    }
}