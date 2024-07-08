<?php

declare(strict_types=1);

namespace App\Enums;

enum Status: string
{
    case InStock = 'inStock';
    case OutOfStock = 'outOfStock';

    public function description(): string
    {
        match ($this) {
            self::InStock => 'Còn hàng',
            self::OutOfStock => 'Hết hàng',
        };
    }
}
