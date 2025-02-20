<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function __invoke()
    {
        $products = app("proxy")->getProducts();
        return view('products', compact('products'));
    }
}
