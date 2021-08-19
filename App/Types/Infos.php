<?php


namespace App\Types;


use App\Hydrator;
use App\Types\SubTypes\Ads;
use App\Types\SubTypes\Host;
use App\Types\SubTypes\Offer;

class Infos
{
    private ?string $country_iso;
    private ?string $country;
    private bool $open;
    private array $offers;
    private ?string $pop;
    private ?string $upload_token;
    private int $upload_token_lifetime;
    private ?string $user_token;
    private Host $hosts;
    private Ads $ads;
    private bool $has_podcasts;

    /**
     * @return bool
     */
    public function isHasPodcasts(): bool
    {
        return $this->has_podcasts;
    }

    /**
     * @param bool $has_podcasts
     *
     * @return Infos
     */
    public function setHasPodcasts(bool $has_podcasts): Infos
    {
        $this->has_podcasts = $has_podcasts;
        return $this;
    }

    /**
     * @return Ads
     */
    public function getAds(): Ads
    {
        return $this->ads;
    }

    /**
     * @param array $ads
     *
     * @return Infos
     */
    public function setAds(array $ads): Infos
    {
        $this->ads = Hydrator::hydrate($ads, Ads::class);
        return $this;
    }


    /**
     * @return Host
     */
    public function getHosts(): Host
    {
        return $this->hosts;
    }

    /**
     * @param array $hosts
     *
     * @return Infos
     */
    public function setHosts(array $hosts): Infos
    {
        $this->hosts = Hydrator::hydrate($hosts, Host::class);
        return $this;
    }


    /**
     * @return ?string
     */
    public function getUserToken(): ?string
    {
        return $this->user_token;
    }

    /**
     * @param ?string $user_token
     *
     * @return Infos
     */
    public function setUserToken(?string $user_token): Infos
    {
        $this->user_token = $user_token;
        return $this;
    }


    /**
     * @return int
     */
    public function getUploadTokenLifetime(): int
    {
        return $this->upload_token_lifetime;
    }

    /**
     * @param int $upload_token_lifetime
     *
     * @return Infos
     */
    public function setUploadTokenLifetime(int $upload_token_lifetime): Infos
    {
        $this->upload_token_lifetime = $upload_token_lifetime;
        return $this;
    }


    /**
     * @return ?string
     */
    public function getUploadToken(): ?string
    {
        return $this->upload_token;
    }

    /**
     * @param ?string $upload_token
     *
     * @return Infos
     */
    public function setUploadToken(?string $upload_token): Infos
    {
        $this->upload_token = $upload_token;
        return $this;
    }


    /**
     * @return ?string
     */
    public function getPop(): ?string
    {
        return $this->pop;
    }

    /**
     * @param ?string $pop
     *
     * @return Infos
     */
    public function setPop(?string $pop): Infos
    {
        $this->pop = $pop;
        return $this;
    }


    /**
     * @return ?string
     */
    public function getCountryIso(): ?string
    {
        return $this->country_iso;
    }

    /**
     * @param ?string $country_iso
     *
     * @return Infos
     */
    public function setCountryIso(?string $country_iso): Infos
    {
        $this->country_iso = $country_iso;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param ?string $country
     *
     * @return Infos
     */
    public function setCountry(?string $country): Infos
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
        $this->offers = Hydrator::hydrateArray($offers, Offer::class);
        return $this;
    }
}