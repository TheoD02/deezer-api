<?php


namespace App\Types\SubTypes;


class Offer
{
    private int $id;
    private string $name;
    private string $amount;
    private string $currency;
    private string $displayed_amount;
    private string $tc;
    private string $tc_html;
    private string $tc_txt;
    private string $try_and_buy;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Offer
     */
    public function setId(int $id): Offer
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Offer
     */
    public function setName(string $name): Offer
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     *
     * @return Offer
     */
    public function setAmount(string $amount): Offer
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     *
     * @return Offer
     */
    public function setCurrency(string $currency): Offer
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayedAmount(): string
    {
        return $this->displayed_amount;
    }

    /**
     * @param string $displayed_amount
     *
     * @return Offer
     */
    public function setDisplayedAmount(string $displayed_amount): Offer
    {
        $this->displayed_amount = $displayed_amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getTc(): string
    {
        return $this->tc;
    }

    /**
     * @param string $tc
     *
     * @return Offer
     */
    public function setTc(string $tc): Offer
    {
        $this->tc = $tc;
        return $this;
    }

    /**
     * @return string
     */
    public function getTcHtml(): string
    {
        return $this->tc_html;
    }

    /**
     * @param string $tc_html
     *
     * @return Offer
     */
    public function setTcHtml(string $tc_html): Offer
    {
        $this->tc_html = $tc_html;
        return $this;
    }

    /**
     * @return string
     */
    public function getTcTxt(): string
    {
        return $this->tc_txt;
    }

    /**
     * @param string $tc_txt
     *
     * @return Offer
     */
    public function setTcTxt(string $tc_txt): Offer
    {
        $this->tc_txt = $tc_txt;
        return $this;
    }

    /**
     * @return string
     */
    public function getTryAndBuy(): string
    {
        return $this->try_and_buy;
    }

    /**
     * @param string $try_and_buy
     *
     * @return Offer
     */
    public function setTryAndBuy(string $try_and_buy): Offer
    {
        $this->try_and_buy = $try_and_buy;
        return $this;
    }
}