<?php


namespace App\Types\SubTypes;


use App\Hydrator;

class AdsDisplay
{
    private AdsDisplayValue $interstitial;

    /**
     * @return AdsDisplayValue
     */
    public function getInterstitial(): AdsDisplayValue
    {
        return $this->interstitial;
    }

    /**
     * @param array $interstitial
     *
     * @return AdsDisplay
     */
    public function setInterstitial(array $interstitial): AdsDisplay
    {
        $this->interstitial = Hydrator::hydrate($interstitial, AdsDisplayValue::class);
        return $this;
    }

}