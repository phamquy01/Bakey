<?php 

namespace App\Http\Controllers;


class CheckoutController extends Controller
{
    public function __invoke()
    {
        return view('checkout');
    }
}