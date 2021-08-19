<?php


namespace App\Types\SubTypes;


class AdsAudioValue
{
    private int $start;
    private int $interval;
    private string $unit;

    /**
     * @return int
     */
    public function getStart(): int
    {
        return $this->start;
    }

    /**
     * @param int $start
     *
     * @return AdsAudioValue
     */
    public function setStart(int $start): AdsAudioValue
    {
        $this->start = $start;
        return $this;
    }

    /**
     * @return int
     */
    public function getInterval(): int
    {
        return $this->interval;
    }

    /**
     * @param int $interval
     *
     * @return AdsAudioValue
     */
    public function setInterval(int $interval): AdsAudioValue
    {
        $this->interval = $interval;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnit(): string
    {
        return $this->unit;
    }

    /**
     * @param string $unit
     *
     * @return AdsAudioValue
     */
    public function setUnit(string $unit): AdsAudioValue
    {
        $this->unit = $unit;
        return $this;
    }
}