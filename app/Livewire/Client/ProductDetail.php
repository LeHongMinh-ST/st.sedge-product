<?php

declare(strict_types=1);

namespace App\Livewire\Client;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart as CartModel;
use Livewire\Component;

class ProductDetail extends Component
{
    public $product;

    protected $listeners = ['refreshCart' => '$refresh'];

    public function render()
    {
        return view('livewire.client.product-detail');
    }

    public function handleAddToCart($id): void
    {
        $this->dispatch('addToCart', $id);
    }

    public function buy($id)
    {
        $product = Product::find($id);
        CartModel::instance()
            ->add($product->id, $product->name, 1, $product->price, ['thumbnail' => $product->thumbnail]);
        $this->dispatch('refreshCart');

        return redirect()->route('todo.cart');
    }

}
