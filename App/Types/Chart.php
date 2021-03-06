<?php


namespace App\Types;


use App\Hydrator;

class Chart
{
    /** @var Track[] */
    private array $tracks;
    /** @var Album[] */
    private array $albums;
    /** @var Artist[] */
    private array $artists;
    /** @var Playlist[] */
    private array $playlists;
    /** @var Podcast[] */
    private array $podcasts;

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
     * @return Chart
     */
    public function setTracks(array $tracks): Chart
    {
        $this->tracks = Hydrator::hydrateArray($tracks, Track::class);
        return $this;
    }

    /**
     * @return Album[]
     */
    public function getAlbums(): array
    {
        return $this->albums;
    }

    /**
     * @param Album[] $albums
     *
     * @return Chart
     */
    public function setAlbums(array $albums): Chart
    {
        $this->albums = Hydrator::hydrateArray($albums, Album::class);
        return $this;
    }

    /**
     * @return Artist[]
     */
    public function getArtists(): array
    {
        return $this->artists;
    }

    /**
     * @param Artist[] $artists
     *
     * @return Chart
     */
    public function setArtists(array $artists): Chart
    {
        $this->artists = Hydrator::hydrateArray($artists, Artist::class);
        return $this;
    }

    /**
     * @return Playlist[]
     */
    public function getPlaylists(): array
    {
        return $this->playlists;
    }

    /**
     * @param Playlist[] $playlists
     *
     * @return Chart
     */
    public function setPlaylists(array $playlists): Chart
    {
        $this->playlists = Hydrator::hydrateArray($playlists, Playlist::class);
        return $this;
    }

    /**
     * @return Podcast[]
     */
    public function getPodcasts(): array
    {
        return $this->podcasts;
    }

    /**
     * @param Podcast[] $podcasts
     *
     * @return Chart
     */
    public function setPodcasts(array $podcasts): Chart
    {
        $this->podcasts = Hydrator::hydrateArray($podcasts, Podcast::class);
        return $this;
    }
}