<?php

declare(strict_types=1);

namespace App\States\Order;

class OrderContext
{
    private OrderState $state;

    public function __construct()
    {
        $this->state = new OrderPendingState();
    }

    public function __toString(): string
    {
        return (string) $this->state;
    }

    public function setState(OrderState $state): void
    {
        $this->state = $state;
    }

    public function toShipped(): void
    {
        $this->state->toShipping($this);
    }

    public function toCompleted(): void
    {
        $this->state->toCompleted($this);
    }

    public function toRefunded(): void
    {
        $this->state->toRefunded($this);
    }

    public function toCanceled(): void
    {
        $this->state->toCanceled($this);
    }

    public function availableTransitions(): array
    {
        return $this->state->availableTransitions();
    }
}
