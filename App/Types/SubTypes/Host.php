<?php


namespace App\Types\SubTypes;


class Host
{
    private string $stream;
    private string $images;

    /**
     * @return string
     */
    public function getStream(): string
    {
        return $this->stream;
    }

    /**
     * @param string $stream
     *
     * @return Host
     */
    public function setStream(string $stream): Host
    {
        $this->stream = $stream;
        return $this;
    }

    /**
     * @return string
     */
    public function getImages(): string
    {
        return $this->images;
    }

    /**
     * @param string $images
     *
     * @return Host
     */
    public function setImages(string $images): Host
    {
        $this->images = $images;
        return $this;
    }


}