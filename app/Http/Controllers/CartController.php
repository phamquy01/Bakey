<?php

namespace App\Http\Controllers;

class CartController extends Controller
{
    public function __invoke()
    {
        $title = app('proxy')->getOptionByKey('title');
        $description = app('proxy')->getOptionByKey('description');
        $imageShareUrl = app('proxy')->getOptionByKey('image');
        $categories = app('proxy')->getCategory(true);

        // Tạo giá trị mặc định cho cart để tránh lỗi
        $cart = [];

        return view('cart', compact('cart'));
    }
}
