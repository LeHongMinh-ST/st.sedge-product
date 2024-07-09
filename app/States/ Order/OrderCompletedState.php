<?php

declare(strict_types=1);

namespace App\States\Order;

class OrderCompletedState implements OrderState
{
    public function toShipping(OrderContext $context): void
    {
    }

    public function toCompleted(OrderContext $context): void
    {
    }

    public function toRefunded(OrderContext $context): void
    {
        $context->setState(new OrderRefundedState());
    }

    public function toCanceled(OrderContext $context): void
    {
    }

    public function availableTransitions(): array
    {
        return ['refunded'];
    }
}
