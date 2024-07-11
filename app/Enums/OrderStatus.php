<?php

declare(strict_types=1);

namespace App\Enums;

enum OrderStatus: string
{
    case Pending = 'pending';
    case Shipped = 'shipped';
    case Completed = 'completed';
    case Refunded = 'refunded';
    case Canceled = 'canceled';

    public function description(): string
    {
        return match ($this) {
            self::Pending => 'Đang chờ xử lý',
            self::Shipped => 'Đã giao hàng',
            self::Completed => 'Đã hoàn thành',
            self::Refunded => 'Đã hoàn tiền',
            self::Canceled => 'Đã hủy',
        };
    }
}
