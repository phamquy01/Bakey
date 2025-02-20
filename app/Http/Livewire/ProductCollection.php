<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Product;
use App\Models\ShoppingCart;

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
        // Add product  to table shopping_carts
        if($productId){
            $product = Product::find($productId);
            if($product){
                $cart = ShoppingCart::where('product_id', $productId)->first();
                if($cart){
                    $cart->quantity += 1;
                    $cart->save();
                }else{
                    ShoppingCart::create([
                        'product_id' => $productId,
                        'quantity' => 1,
                        'user_id' => 1
                    ]);
                }
                $this->emit('cartUpdated');
            }
        }
        dd(ShoppingCart::all());
        
    }
    public function render()
    {
        return view('livewire.product-collection');
    }
}
