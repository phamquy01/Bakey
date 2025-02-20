<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\ShoppingCart;

class CartController extends Controller
{
    public function __invoke()
    {
        $userId = auth()->id();
        $cartItems = ShoppingCart::all();

        // Lấy danh sách product_id trong giỏ hàng
        $productIds = $cartItems->pluck('product_id');

        // Lấy thông tin chi tiết của sản phẩm
        $products = Product::whereIn('id', $productIds)->get();

        // Gán số lượng từ giỏ hàng vào sản phẩm tương ứng
        $cartProducts = $products->map(function ($product) use ($cartItems) {
            $cartItem = $cartItems->where('product_id', $product->id)->first();
            $product->cart_quantity = $cartItem ? $cartItem->quantity : 0;
            return $product;
        });


        return view('cart', compact('cartProducts'));
    }
}
