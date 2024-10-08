<?php

declare(strict_types=1);

namespace App\Livewire\Client;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart as CartModel;
use Livewire\Component;

class Checkout extends Component
{
    public function render()
    {
        $cart = CartModel::instance()->content()->each(function ($item): void {
            $item->slug = Product::find($item->id)->slug;
        });
        $cartQuantity = CartModel::instance()->content()->count();
        $subtotal = CartModel::instance()->subtotal(0, '', '');
        return view('livewire.client.checkout', [
            'cart' => $cart,
            'cartQuantity' => $cartQuantity,
            'subtotal' => $subtotal
        ]);
    }
}
