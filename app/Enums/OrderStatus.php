<?php

declare(strict_types=1);

namespace App\Enums;

enum OrderStatus: string
{
    case Pending = 'pending';
    case Shipped = 'shipped';
    case Delivered = 'delivered';

    public function description(): string
    {
        match ($this) {
            self::Pending => 'Đang chờ xử lý',
            self::Shipped => 'Đã giao hàng',
            self::Delivered => 'Đã nhận hàng',
        };
    }
}
