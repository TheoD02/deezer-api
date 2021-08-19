<?php


namespace App\Types\SubTypes;


class Creator
{
    private int $id;
    private string $name;
    private string $tracklist;
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
     * @return Creator
     */
    public function setId(int $id): Creator
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
     * @return Creator
     */
    public function setName(string $name): Creator
    {
        $this->name = $name;
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
     * @return Creator
     */
    public function setTracklist(string $tracklist): Creator
    {
        $this->tracklist = $tracklist;
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
     * @return Creator
     */
    public function setType(string $type): Creator
    {
        $this->type = $type;
        return $this;
    }

}