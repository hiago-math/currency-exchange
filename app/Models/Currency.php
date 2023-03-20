<?php

declare(strict_types=1);

namespace App\Models;

class Currency extends BaseModel
{
    protected $table = 'currency';

    protected $fillable = [
        'name_currency',
        'default'
    ];
}
