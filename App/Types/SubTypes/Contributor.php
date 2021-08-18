<?php

namespace App\Types\SubTypes;
use App\Types\Artist;

class Contributor extends Artist
{
    private string $type;
    private string $role;

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
     * @return Contributor
     */
    public function setType(string $type): Contributor
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @param string $role
     *
     * @return Contributor
     */
    public function setRole(string $role): Contributor
    {
        $this->role = $role;
        return $this;
    }
}