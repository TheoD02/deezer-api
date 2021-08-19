<?php


namespace App\Types;


class Genre
{
    private int $id;
    private string $name;
    private string $picture;
    private string $picture_small;
    private string $picture_medium;
    private string $picture_big;
    private string $picture_xl;
    private string $type;

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
     * @return Genre
     */
    public function setId(int $id): Genre
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Genre
     */
    public function setName(string $name): Genre
    {
        $this->name = $name;
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
     * @return Genre
     */
    public function setPicture(string $picture): Genre
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
     * @return Genre
     */
    public function setPictureSmall(string $picture_small): Genre
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
     * @return Genre
     */
    public function setPictureMedium(string $picture_medium): Genre
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
     * @return Genre
     */
    public function setPictureBig(string $picture_big): Genre
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
     * @return Genre
     */
    public function setPictureXl(string $picture_xl): Genre
    {
        $this->picture_xl = $picture_xl;
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
     * @return Genre
     */
    public function setType(string $type): Genre
    {
        $this->type = $type;
        return $this;
    }
}