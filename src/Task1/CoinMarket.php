<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

class CoinMarket
{

    private $currencies = array(); 
    private $price;

    public function addCurrency(Currency $currency): void
    {
        $this->currencies[] = $currency;
    }

    public function maxPrice(): float
    {
        foreach ($this->currencies as $value) {
            $this->price = 
                $value->getDailyPrice() > $this->price
                    ? $value->getDailyPrice() 
                    : $this->price;
        }
        return $this->price;
    }

    public function getCurrencies(): array
    {
        return $this->currencies;
    }
}