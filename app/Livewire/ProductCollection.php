<?php

namespace App\Livewire;


use Livewire\Component;
use App\Models\Product;

class ProductCollection extends Component
{
    public $title = '';
    public $products = [];
    public function mount()
    {
        //
    }
    public function addToCart($productId)
    {
        $product = Product::find($productId);
        if ($product) {
            $order = app('order')->order();
            app('order')->addItem($product, 1);
            $this->dispatch('orderUpdated');
        }
    }
    public function render()
    {
        return view('livewire.product-collection');
    }
}
