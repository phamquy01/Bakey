<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryProduct\CategoryRepositoryInterface;

class HomeController extends Controller
{
    public function __invoke()
    {
        $categories = app("proxy")->getCategory(withProduct: true);
        $newProducts = app("proxy")->getProducts(8);
        $hotProducts = app("proxy")->getProducts(isHot: true);
        // $shoppingCart = app("proxy")->getAllTableShoppingCart();
        return view('home-page', compact('categories', 'newProducts', 'hotProducts'));
    }
}
