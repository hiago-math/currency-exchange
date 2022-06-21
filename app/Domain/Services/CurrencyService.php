<?php


namespace App\Domain\Services;


use Integration\currencyQuotes\src\Rest;

class CurrencyService
{
    /**
     * @return mixed
     */
    public function getCurrency(): array
    {
        $codes = [];
        $currency = collect(Rest::allCurrency());

        $currency->each(function ($value, $key) use (&$codes) {
            $codes[] = [
                'code_to' => $key,
                'code_from' => data_get($value, 'codein')
            ];
        });

        return $codes;
    }
}
