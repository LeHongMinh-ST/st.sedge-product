<?php

declare(strict_types=1);

namespace App\States\Order;

use App\Enums\OrderStatus;

class OrderPendingState implements OrderState
{
    public function toShipping(OrderContext $context): void
    {
        $context->setState(new OrderShippingState());
    }

    public function toCompleted(OrderContext $context): void
    {
        //not acticon
    }

    public function toRefunded(OrderContext $context): void
    {
        $context->setState(new OrderRefundedState());
    }

    public function toCanceled(OrderContext $context): void
    {
        $context->setState(new OrderCanceledState());
    }

    public function availableTransitions(): array
    {
        return [OrderStatus::Shipped, OrderStatus::Refunded, OrderStatus::Canceled];
    }
}
