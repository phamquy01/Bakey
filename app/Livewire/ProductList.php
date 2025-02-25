<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductList extends Component
{
    public $products = [];

    public function addToCart($productId)
    {
        $product = Product::find($productId);
        if ($product) {
            $order = app('order')->order();
            app('order')->addItem($product, 1);
            $this->dispatch('addToCartSuccess');
            $this->dispatch('orderUpdated');
        }
    }
    public function render()
    {
        return view('livewire.product-list');
    }
}
