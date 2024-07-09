<?php

declare(strict_types=1);

namespace App\States\Order;

interface OrderState
{
    public function toShipping(OrderContext $context);
    public function toCompleted(OrderContext $context);
    public function toRefunded(OrderContext $context);
    public function toCanceled(OrderContext $context);
    public function availableTransitions(): array;
}
