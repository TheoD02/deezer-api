<?php


namespace App\Types\SubTypes;


class AdsDisplayValue
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
     * @return AdsDisplayValue
     */
    public function setStart(int $start): AdsDisplayValue
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
     * @return AdsDisplayValue
     */
    public function setInterval(int $interval): AdsDisplayValue
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
     * @return AdsDisplayValue
     */
    public function setUnit(string $unit): AdsDisplayValue
    {
        $this->unit = $unit;
        return $this;
    }
}