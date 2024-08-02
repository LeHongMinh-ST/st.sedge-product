<?php

declare(strict_types=1);

namespace App\Livewire\Client\Component;

use Gloudemans\Shoppingcart\Facades\Cart as CartModel;
use Livewire\Component;

class CartCount extends Component
{
    public function render()
    {
        $cartQuantity = CartModel::instance()->content()->count();
        return view('livewire.client.component.cart-count', [
            'cartQuantity' => $cartQuantity
        ]);
    }
}
