<?php

declare(strict_types=1);

namespace App\Livewire\Client\Component;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart as CartModel;
use Livewire\Component;

class CartItem extends Component
{
    protected $listeners = [
        'addToCart' => 'addToCart',
        'refreshCart' => '$refresh',
        'increase' => 'increasement',
        'decrease' => 'decreasement',
        'removeItem' => 'removeItem',
        'changeInput' => 'changeInput'
    ];

    public function render()
    {
        $cart = CartModel::instance()->content();
        $subtotal = CartModel::instance()->subtotal(0, '', '');
        return view(
            'livewire.client.component.cart-item',
            [
                'cart' => $cart,
                'subtotal' => $subtotal
            ]
        );
    }

    public function addToCart($id): void
    {
        $product = Product::find($id);
        CartModel::instance()
            ->add($product->id, $product->name, 1, $product->price, ['thumbnail' => $product->thumbnail]);
        $this->dispatch('refreshCart');
    }

    public function increasement($rowId): void
    {
        $item = CartModel::instance()->get($rowId);
        CartModel::instance()->update($rowId, $item->qty + 1);
        $this->dispatch('refreshCart');
    }

    public function decreasement($rowId): void
    {
        $item = CartModel::instance()->get($rowId);
        if ($item->qty > 1) {
            CartModel::instance()->update($rowId, $item->qty - 1);
        } else {
            CartModel::instance()->update($rowId, 1);
        }
        $this->dispatch('refreshCart');
    }

    public function removeItem($rowId): void
    {
        CartModel::instance()->remove($rowId);
        $this->dispatch('refreshCart');
    }

    public function changeInput($rowId, $value): void
    {
        $item = CartModel::instance()->get($rowId);
        if ($value > 0) {
            CartModel::instance()->update($rowId, $value);
        } else {
            CartModel::instance()->update($rowId, 1);
        }
        $this->dispatch('refreshCart');
    }
}
