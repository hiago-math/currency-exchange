<?php

declare(strict_types=1);

namespace Integration\currencyQuotes\src;

use Integration\currencyQuotes\src\Requests\AllCurrency;
use Integration\currencyQuotes\src\Requests\LastOccurrence;

class Rest
{
    /**
     * @param mixed[] $payload
     * @return mixed[]
     */
    public static function lastOccurrence(array $payload): array
    {
        return (new LastOccurrence())->handle($payload);
    }

    /**
     * @param mixed[] $payload
     * @return mixed[]
     */
    public static function allCurrency(): array
    {
        return (new AllCurrency())->handle();
    }
}
