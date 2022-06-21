<?php

declare(strict_types=1);

namespace Integration\currencyQuotes\src;

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
            ],
            'all_cuurency' => [
                'method' => 'get',
                'uri' => 'all/'
            ]
        ],
        'currency' => [
            'default_currency' => 'BRL'
        ]
    ];
}
