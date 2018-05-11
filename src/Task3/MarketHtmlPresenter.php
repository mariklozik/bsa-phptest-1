<?php declare(strict_types=1);

namespace Cryptocurrency\Task3;

use Cryptocurrency\Task1\CoinMarket;

class MarketHtmlPresenter
{
    public function present(CoinMarket $market): string
    {
        $currList = "";
        foreach($market->getCurrencies() as $currency){
            $currList .= 
            	"<p>" .
                    "<img src=\"{$currency->getLogoUrl()}\"> {$currency->getName()} -- {$currency->getDailyPrice()}" .
                "</p>";
        }
        return $currList;
    }
}