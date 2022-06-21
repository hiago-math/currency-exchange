<?php


namespace Integration\currencyQuotes\src\Requests;

class AllCurrency extends BaseRequest
{
    protected $route = 'all_cuurency';

    /**
     * @param mixed[] $payload
     * @return mixed[]
     */
    public function handle(): array
    {
        $response = $this->request()->execute();

        return $response->getData();

    }
}
