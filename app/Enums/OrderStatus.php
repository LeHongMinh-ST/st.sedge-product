<?php

declare(strict_types=1);

namespace App\Enums;

use App\States\Order\OrderApprovedState;
use App\States\Order\OrderCanceledState;
use App\States\Order\OrderCompletedState;
use App\States\Order\OrderPendingState;
use App\States\Order\OrderRefundedState;
use App\States\Order\OrderShippingState;

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

    public function getClassOrderState(): string
    {
        return match ($this) {
            self::Pending => OrderPendingState::class,
            self::Approved => OrderApprovedState::class,
            self::Shipping => OrderShippingState::class,
            self::Completed => OrderCompletedState::class,
            self::Refunded => OrderRefundedState::class,
            self::Canceled => OrderCanceledState::class,
        };
    }
}
