<?php


namespace App\Types;


class Options
{
    private bool $streaming;
    private int $streaming_duration;
    private bool $offline;
    private bool $hq;
    private bool $ads_display;
    private bool $ads_audio;
    private bool $too_many_devices;
    private bool $can_subscribe;
    private int $radio_skips;
    private bool $lossless;
    private bool $preview;
    private bool $radio;
    private string $type;

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
     * @return Options
     */
    public function setType(string $type): Options
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return bool
     */
    public function isStreaming(): bool
    {
        return $this->streaming;
    }

    /**
     * @param bool $streaming
     *
     * @return Options
     */
    public function setStreaming(bool $streaming): Options
    {
        $this->streaming = $streaming;
        return $this;
    }

    /**
     * @return int
     */
    public function getStreamingDuration(): int
    {
        return $this->streaming_duration;
    }

    /**
     * @param int $streaming_duration
     *
     * @return Options
     */
    public function setStreamingDuration(int $streaming_duration): Options
    {
        $this->streaming_duration = $streaming_duration;
        return $this;
    }

    /**
     * @return bool
     */
    public function isOffline(): bool
    {
        return $this->offline;
    }

    /**
     * @param bool $offline
     *
     * @return Options
     */
    public function setOffline(bool $offline): Options
    {
        $this->offline = $offline;
        return $this;
    }

    /**
     * @return bool
     */
    public function isHq(): bool
    {
        return $this->hq;
    }

    /**
     * @param bool $hq
     *
     * @return Options
     */
    public function setHq(bool $hq): Options
    {
        $this->hq = $hq;
        return $this;
    }

    /**
     * @return bool
     */
    public function isLossless(): bool
    {
        return $this->lossless;
    }

    /**
     * @param bool $lossless
     *
     * @return Options
     */
    public function setLossless(bool $lossless): Options
    {
        $this->lossless = $lossless;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAdsDisplay(): bool
    {
        return $this->ads_display;
    }

    /**
     * @param bool $ads_display
     *
     * @return Options
     */
    public function setAdsDisplay(bool $ads_display): Options
    {
        $this->ads_display = $ads_display;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAdsAudio(): bool
    {
        return $this->ads_audio;
    }

    /**
     * @param bool $ads_audio
     *
     * @return Options
     */
    public function setAdsAudio(bool $ads_audio): Options
    {
        $this->ads_audio = $ads_audio;
        return $this;
    }

    /**
     * @return bool
     */
    public function isTooManyDevices(): bool
    {
        return $this->too_many_devices;
    }

    /**
     * @param bool $too_many_devices
     *
     * @return Options
     */
    public function setTooManyDevices(bool $too_many_devices): Options
    {
        $this->too_many_devices = $too_many_devices;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCanSubscribe(): bool
    {
        return $this->can_subscribe;
    }

    /**
     * @param bool $can_subscribe
     *
     * @return Options
     */
    public function setCanSubscribe(bool $can_subscribe): Options
    {
        $this->can_subscribe = $can_subscribe;
        return $this;
    }

    /**
     * @return int
     */
    public function getRadioSkips(): int
    {
        return $this->radio_skips;
    }

    /**
     * @param int $radio_skips
     *
     * @return Options
     */
    public function setRadioSkips(int $radio_skips): Options
    {
        $this->radio_skips = $radio_skips;
        return $this;
    }


    /**
     * @return bool
     */
    public function isPreview(): bool
    {
        return $this->preview;
    }

    /**
     * @param bool $preview
     *
     * @return Options
     */
    public function setPreview(bool $preview): Options
    {
        $this->preview = $preview;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRadio(): bool
    {
        return $this->radio;
    }

    /**
     * @param bool $radio
     *
     * @return Options
     */
    public function setRadio(bool $radio): Options
    {
        $this->radio = $radio;
        return $this;
    }
}