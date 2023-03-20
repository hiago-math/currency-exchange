<?php

declare(strict_types=1);

namespace Integration\currencyQuotes\src\Requests;

use App\Domain\Helper\CurrencyHelper;
use Integration\currencyQuotes\src\Config;
use Integration\currencyQuotes\src\Request;

abstract class BaseRequest
{
    use Config;

    private $request;
    protected $route;
    protected $method;
    protected $uri;
    private $baseUrl;

    public function __construct()
    {
        $this->request = new Request();
    }

    private function setConnection(): string
    {
        return env('CURRENCY_API');
    }

    protected function request(array $payload = []): Request
    {
        $uri = data_get($this->config, 'requests.' . $this->route . '.uri');
        $method = data_get($this->config, 'requests.' . $this->route . '.method');
        $currency = data_get($payload, 'current_purchased');

        if (!empty($payload)) {
            $uri = $this->createUriExchangeByCurrencyDefaultAndPurchased($uri, $currency);
        }

        $url = $this->setConnection();

        return $this->request->$method($url . $uri);
    }

    private function createUriExchangeByCurrencyDefaultAndPurchased(string $uri, string $currency): string
    {
        $default = data_get($this->config, 'currency.default_currency');
        return $uri . "{$currency}-{$default}";
    }

}
