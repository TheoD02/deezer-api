<?php


namespace App\Types\SubTypes;


use App\Hydrator;

class AdsBigNativeAdsHome
{
    private AdsBigNativeAdsHomeStatut $iphone;
    private AdsBigNativeAdsHomeStatut $android;
    private AdsBigNativeAdsHomeStatut $ipad;
    private AdsBigNativeAdsHomeStatut $android_tablet;

    /**
     * @return AdsBigNativeAdsHomeStatut
     */
    public function getAndroidTablet(): AdsBigNativeAdsHomeStatut
    {
        return $this->android_tablet;
    }

    /**
     * @param array $android_tablet
     *
     * @return AdsBigNativeAdsHome
     * @throws \Exception
     */
    public function setAndroidTablet(array $android_tablet): AdsBigNativeAdsHome
    {
        $this->android_tablet = Hydrator::hydrate($android_tablet, AdsBigNativeAdsHomeStatut::class);
        return $this;
    }

    /**
     * @return AdsBigNativeAdsHomeStatut
     */
    public function getAndroid(): AdsBigNativeAdsHomeStatut
    {
        return $this->android;
    }

    /**
     * @param array $android
     *
     * @return AdsBigNativeAdsHome
     * @throws \Exception
     */
    public function setAndroid(array $android): AdsBigNativeAdsHome
    {
        $this->android = Hydrator::hydrate($android, AdsBigNativeAdsHomeStatut::class);
        return $this;
    }

    /**
     * @return AdsBigNativeAdsHomeStatut
     */
    public function getIpad(): AdsBigNativeAdsHomeStatut
    {
        return $this->ipad;
    }

    /**
     * @param array $ipad
     *
     * @return AdsBigNativeAdsHome
     * @throws \Exception
     */
    public function setIpad(array $ipad): AdsBigNativeAdsHome
    {
        $this->ipad = Hydrator::hydrate($ipad, AdsBigNativeAdsHomeStatut::class);
        return $this;
    }

    /**
     * @return AdsBigNativeAdsHomeStatut
     */
    public function getIphone(): AdsBigNativeAdsHomeStatut
    {
        return $this->iphone;
    }

    /**
     * @param array $iphone
     *
     * @return AdsBigNativeAdsHome
     * @throws \Exception
     */
    public function setIphone(array $iphone): AdsBigNativeAdsHome
    {
        $this->iphone = Hydrator::hydrate($iphone, AdsBigNativeAdsHomeStatut::class);
        return $this;
    }


}