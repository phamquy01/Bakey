<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\ShoppingCart;

class CartController extends Controller
{
    public function __invoke()
    {
        return view('cart');
    }
}
