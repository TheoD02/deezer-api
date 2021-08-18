<?php


namespace App\Types\SubTypes;


use App\Hydrator;

class AdsAudio
{
    private AdsAudioValue $default;

    /**
     * @return AdsAudioValue
     */
    public function getDefault(): AdsAudioValue
    {
        return $this->default;
    }

    /**
     * @param array $default
     *
     * @return AdsAudio
     * @throws \Exception
     */
    public function setDefault(array $default): AdsAudio
    {
        $this->default = Hydrator::hydrate($default, AdsAudioValue::class);
        return $this;
    }

}