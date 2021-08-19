<?php


namespace App\Types\SubTypes;


use App\Hydrator;

class Ads
{
    private AdsAudio $audio;
    private AdsDisplay $display;
    private AdsBigNativeAdsHome $big_native_ads_home;

    /**
     * @return AdsAudio
     */
    public function getAudio(): AdsAudio
    {
        return $this->audio;
    }

    /**
     * @param array $audio
     *
     * @return Ads
     */
    public function setAudio(array $audio): Ads
    {
        $this->audio = Hydrator::hydrate($audio, AdsAudio::class);
        return $this;
    }

    /**
     * @return AdsDisplay
     */
    public function getDisplay(): AdsDisplay
    {
        return $this->display;
    }

    /**
     * @param array $display
     *
     * @return Ads
     */
    public function setDisplay(array $display): Ads
    {
        $this->display = Hydrator::hydrate($display, AdsDisplay::class);
        return $this;
    }

    /**
     * @return AdsBigNativeAdsHome
     */
    public function getBigNativeAdsHome(): AdsBigNativeAdsHome
    {
        return $this->big_native_ads_home;
    }

    /**
     * @param array $big_native_ads_home
     *
     * @return Ads
     */
    public function setBigNativeAdsHome(array $big_native_ads_home): Ads
    {
        $this->big_native_ads_home = Hydrator::hydrate($big_native_ads_home, AdsBigNativeAdsHome::class);
        return $this;
    }
}