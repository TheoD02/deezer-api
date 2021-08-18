<?php

namespace App\Types;

class Artist
{
    private int $id;
    private string $name;
    private string $link;
    private string $share;
    private string $picture;
    private string $picture_small;
    private string $picture_big;
    private string $picture_xl;
    private int $nb_album;
    private int $nb_fan;
    private bool $radio;
    private string $tracklist;

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
     * @return Artist
     */
    public function setId(int $id): Artist
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
     * @return Artist
     */
    public function setName(string $name): Artist
    {
        $this->name = $name;
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
     * @return Artist
     */
    public function setLink(string $link): Artist
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
     * @return Artist
     */
    public function setShare(string $share): Artist
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
     * @return Artist
     */
    public function setPicture(string $picture): Artist
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
     * @return Artist
     */
    public function setPictureSmall(string $picture_small): Artist
    {
        $this->picture_small = $picture_small;
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
     * @return Artist
     */
    public function setPictureBig(string $picture_big): Artist
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
     * @return Artist
     */
    public function setPictureXl(string $picture_xl): Artist
    {
        $this->picture_xl = $picture_xl;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbAlbum(): int
    {
        return $this->nb_album;
    }

    /**
     * @param int $nb_album
     *
     * @return Artist
     */
    public function setNbAlbum(int $nb_album): Artist
    {
        $this->nb_album = $nb_album;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbFan(): int
    {
        return $this->nb_fan;
    }

    /**
     * @param int $nb_fan
     *
     * @return Artist
     */
    public function setNbFan(int $nb_fan): Artist
    {
        $this->nb_fan = $nb_fan;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRadio(): bool
    {
        return $this->radio;
    }

    /**
     * @param bool $radio
     *
     * @return Artist
     */
    public function setRadio(bool $radio): Artist
    {
        $this->radio = $radio;
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
     * @return Artist
     */
    public function setTracklist(string $tracklist): Artist
    {
        $this->tracklist = $tracklist;
        return $this;
    }
}