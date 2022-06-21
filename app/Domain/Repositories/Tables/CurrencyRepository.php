<?php

declare(strict_types=1);

namespace App\Domain\Repositories\Tables;

use App\Models\Currency;

class CurrencyRepository extends BaseRepository
{
    protected $model = Currency::class;
}
