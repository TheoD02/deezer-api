<?php


namespace App\Types\SubTypes;


class AdsBigNativeAdsHomeStatut
{
    private bool $enabled;

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     *
     * @return AdsBigNativeAdsHomeStatut
     */
    public function setEnabled(bool $enabled): AdsBigNativeAdsHomeStatut
    {
        $this->enabled = $enabled;
        return $this;
    }

}