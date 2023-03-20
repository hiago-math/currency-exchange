<?php

declare(strict_types=1);

namespace App\Domain\Helper;

use App\Domain\Repositories\Tables\CurrencyRepository;

abstract class CurrencyHelper
{

    public static function getDefaultCurrency(): string
    {
        return (new CurrencyRepository())->where('default', 1)->first()->name_currency;
    }
}
