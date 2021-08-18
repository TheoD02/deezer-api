<?php


namespace App\Types;


class Infos
{
    private string $country_iso;
    private string $country;
    private bool $open;
    private array $offers;

    /**
     * @return string
     */
    public function getCountryIso(): string
    {
        return $this->country_iso;
    }

    /**
     * @param string $country_iso
     *
     * @return Infos
     */
    public function setCountryIso(string $country_iso): Infos
    {
        $this->country_iso = $country_iso;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return Infos
     */
    public function setCountry(string $country): Infos
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return bool
     */
    public function isOpen(): bool
    {
        return $this->open;
    }

    /**
     * @param bool $open
     *
     * @return Infos
     */
    public function setOpen(bool $open): Infos
    {
        $this->open = $open;
        return $this;
    }

    /**
     * @return array
     */
    public function getOffers(): array
    {
        return $this->offers;
    }

    /**
     * @param array $offers
     *
     * @return Infos
     */
    public function setOffers(array $offers): Infos
    {
        $this->offers = $offers;
        return $this;
    }
}