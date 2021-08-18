<?php


namespace App\Types;


class Search
{
    private int $id;
    private bool $readable;
    private string $title;
    private string $title_short;
    private string $title_version;
    private string $link;
    private int $duration;
    private int $rank;
    private bool $explicit_lyrics;
    private string $preview;
    private Artist $artist;
    private Album $album;

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
     * @return Search
     */
    public function setId(int $id): Search
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
     * @return Search
     */
    public function setReadable(bool $readable): Search
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
     * @return Search
     */
    public function setTitle(string $title): Search
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
     * @return Search
     */
    public function setTitleShort(string $title_short): Search
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
     * @return Search
     */
    public function setTitleVersion(string $title_version): Search
    {
        $this->title_version = $title_version;
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
     * @return Search
     */
    public function setLink(string $link): Search
    {
        $this->link = $link;
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
     * @return Search
     */
    public function setDuration(int $duration): Search
    {
        $this->duration = $duration;
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
     * @return Search
     */
    public function setRank(int $rank): Search
    {
        $this->rank = $rank;
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
     * @return Search
     */
    public function setExplicitLyrics(bool $explicit_lyrics): Search
    {
        $this->explicit_lyrics = $explicit_lyrics;
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
     * @return Search
     */
    public function setPreview(string $preview): Search
    {
        $this->preview = $preview;
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
     * @param Artist $artist
     *
     * @return Search
     */
    public function setArtist(Artist $artist): Search
    {
        $this->artist = $artist;
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
     * @param Album $album
     *
     * @return Search
     */
    public function setAlbum(Album $album): Search
    {
        $this->album = $album;
        return $this;
    }
}