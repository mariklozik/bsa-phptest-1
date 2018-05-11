<?php

namespace Cryptocurrency\Task1;

class Dogecoin implements Currency
{
    private $currencyName         = 'Dogecoin';
    private $currencyLogoBaseUrl  = 'https://s2.coinmarketcap.com/static/img/coins/32x32/'
    private $currencyLogoFilename = '74.png';
    private $dailyPrice;

    public function __construct(float $dailyPrice)
    {
        $this->dailyPrice = $dailyPrice;
    }

    public function getName(): string
    {
        return $this->currencyName;
    }

    public function getDailyPrice(): float
    {
        return $this->dailyPrice;
    }

    public function getLogoUrl(): string
    {
        return $this->currencyLogoBaseUrl . $this->currencyLogoFilename;
    }
}