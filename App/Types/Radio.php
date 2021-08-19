<?php


namespace App\Types;


class Radio
{
    private int $id;
    private string $title;
    private string $description;
    private string $share;
    private string $picture;
    private string $picture_small;
    private string $picture_medium;
    private string $picture_big;
    private string $picture_xl;
    private string $tracklist;
    private string $md5_image;
    private string $type;

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
     * @return Radio
     */
    public function setType(string $type): Radio
    {
        $this->type = $type;
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
     * @return Radio
     */
    public function setId(int $id): Radio
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
     * @return Radio
     */
    public function setTitle(string $title): Radio
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
     * @return Radio
     */
    public function setDescription(string $description): Radio
    {
        $this->description = $description;
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
     * @return Radio
     */
    public function setShare(string $share): Radio
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
     * @return Radio
     */
    public function setPicture(string $picture): Radio
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
     * @return Radio
     */
    public function setPictureSmall(string $picture_small): Radio
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
     * @return Radio
     */
    public function setPictureMedium(string $picture_medium): Radio
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
     * @return Radio
     */
    public function setPictureBig(string $picture_big): Radio
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
     * @return Radio
     */
    public function setPictureXl(string $picture_xl): Radio
    {
        $this->picture_xl = $picture_xl;
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
     * @return Radio
     */
    public function setTracklist(string $tracklist): Radio
    {
        $this->tracklist = $tracklist;
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
     * @return Radio
     */
    public function setMd5Image(string $md5_image): Radio
    {
        $this->md5_image = $md5_image;
        return $this;
    }
}