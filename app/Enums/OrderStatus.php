<?php

declare(strict_types=1);

namespace App\Enums;

enum OrderStatus: string
{
    case Pending = 'pending';
    case Shipped = 'shipped';
    case Delivered = 'delivered';
    case Completed = 'completed';
    case Refunded = 'refunded';
    case Canceled = 'canceled';

    public function description(): string
    {
        match ($this) {
            self::Pending => 'Đang chờ xử lý',
            self::Shipped => 'Đã giao hàng',
            self::Delivered => 'Đã nhận hàng',
            self::Completed => 'Đã hoàn thành',
            self::Refunded => 'Đã hoàn tiền',
            self::Canceled => 'Đã hủy',
        };
    }
}
