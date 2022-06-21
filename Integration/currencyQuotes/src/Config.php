<?php

declare(strict_types=1);

namespace Integration\currencyQuotes\src;

use App\Domain\Repositories\Tables\CurrencyRepository;

trait Config
{
    protected $config = [
        'requests' => [
            'last_occurrence' => [
                'method' => 'get',
                'uri' => 'last/'
            ],
            'daily_occurrence' => [
                'method' => 'get',
                'uri' => 'daily/'
            ]
        ],
    ];
}
