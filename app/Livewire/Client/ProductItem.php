<?php

declare(strict_types=1);

namespace App\Livewire\Client;

use Livewire\Component;

class ProductItem extends Component
{
    public $product;

    public function render()
    {
        return view('livewire.client.product-item');
    }

    public function handleAddToCart($id): void
    {
        $this->dispatch('addToCart', $id);
    }
}
