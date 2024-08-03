<?php

declare(strict_types=1);

namespace App\Livewire\Client\Component;

use Livewire\Component;

class ProductDetailImage extends Component
{
    public $product;

    public function render()
    {
        return view('livewire.client.component.product-detail-image');
    }
}
