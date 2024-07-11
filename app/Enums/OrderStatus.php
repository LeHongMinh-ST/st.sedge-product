<?php

declare(strict_types=1);

namespace App\Enums;

enum OrderStatus: string
{
    case Pending = 'pending';
    case Approved = 'approved';
    case Shipping = 'shipping';
    case Completed = 'completed';
    case Refunded = 'refunded';
    case Canceled = 'canceled';

    public function description(): string
    {
        return match ($this) {
            self::Pending => 'Đang chờ xử lý',
            self::Approved => 'Đã xác nhận',
            self::Shipping => 'Đang giao hàng',
            self::Completed => 'Đã hoàn thành',
            self::Refunded => 'Đã hoàn tiền',
            self::Canceled => 'Đã hủy',
        };
    }
}
