<?php

declare(strict_types=1);

namespace App\Livewire\Client;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart as CartModel;
use Livewire\Component;

class Cart extends Component
{
    protected $listeners = [
        'refreshCart' => '$refresh',
    ];

    public function render()
    {
        $cart = CartModel::instance()->content()->each(function ($item): void {
            $item->slug = Product::find($item->id)->slug;
        });
        $cartQuantity = CartModel::instance()->content()->count();
        $subtotal = CartModel::instance()->subtotal(0, '', '');
        return view('livewire.client.cart', [
            'cart' => $cart,
            'cartQuantity' => $cartQuantity,
            'subtotal' => $subtotal
        ]);
    }

    public function handelIncreasement($rowId): void
    {
        $this->dispatch('increase', $rowId);
    }

    public function handelDecreasement($rowId): void
    {
        $this->dispatch('decrease', $rowId);
    }

    public function handelRemoveItem($rowId): void
    {
        $this->dispatch('removeItem', $rowId);
    }

    public function removeCart(): void
    {
        CartModel::instance()->destroy();
        $this->dispatch('refreshCart');
    }

    public function handleChangeInput($rowId, $event): void
    {
        $this->dispatch('changeInput', $rowId, $event);
    }
}
