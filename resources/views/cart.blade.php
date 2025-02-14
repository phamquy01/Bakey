@extends('layouts.app')



@section('content')
    <div class="main">
        <!-- breadcrumbs area start -->
        <div class="breadcrumbs_aree breadcrumbs_bg mb-110" data-bgimg="/images/others/breadcrumbs-bg.png">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs_text">
                            <h1>Cart</h1>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li> // Cart</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumbs area end -->
        <div class="cart-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="product_remove">remove</th>
                                            <th class="product-thumbnail">images</th>
                                            <th class="cart-product-name">Product</th>
                                            <th class="product-price">Unit Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product_remove">
                                                <a href="#">
                                                    <i class="pe-7s-close" title="Remove"></i>
                                                </a>
                                            </td>
                                            <td class="product-thumbnail">
                                                <a href="#">
                                                    <img src="/images/product/mini-product/product1.png"
                                                        alt="Cart Thumbnail">
                                                </a>
                                            </td>
                                            <td class="product-name"><a href="#">Products Name Here</a>
                                            </td>
                                            <td class="product-price"><span class="amount">$22.00</span></td>
                                            <td class="product_pro_button quantity">
                                                <div class="pro-qty border">
                                                    <input type="text" value="1">
                                                </div>
                                            </td>
                                            <td class="product-subtotal"><span class="amount">$22.00</span></td>
                                        </tr>
                                        <tr>
                                            <td class="product_remove">
                                                <a href="#">
                                                    <i class="pe-7s-close" title="Remove"></i>
                                                </a>
                                            </td>
                                            <td class="product-thumbnail">
                                                <a href="#">
                                                    <img src="/images/product/mini-product/product2.png"
                                                        alt="Cart Thumbnail">
                                                </a>
                                            </td>
                                            <td class="product-name"><a href="#">Lorem, ipsum dolor.</a></td>
                                            <td class="product-price"><span class="amount">$24.00</span></td>
                                            <td class="product_pro_button quantity">
                                                <div class="pro-qty border">
                                                    <input type="text" value="1">
                                                </div>
                                            </td>
                                            <td class="product-subtotal"><span class="amount">$24.00</span></td>
                                        </tr>
                                        <tr>
                                            <td class="product_remove">
                                                <a href="#">
                                                    <i class="pe-7s-close" title="Remove"></i>
                                                </a>
                                            </td>
                                            <td class="product-thumbnail">
                                                <a href="#">
                                                    <img src="/images/product/mini-product/product3.png"
                                                        alt="Cart Thumbnail">
                                                </a>
                                            </td>
                                            <td class="product-name"><a href="#">Praesentium vero nesciu.</a></td>
                                            <td class="product-price"><span class="amount">$28.00</span></td>
                                            <td class="product_pro_button quantity">
                                                <div class="pro-qty border">
                                                    <input type="text" value="1">
                                                </div>
                                            </td>
                                            <td class="product-subtotal"><span class="amount">$28.00</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="coupon-all">
                                        <div class="coupon">
                                            <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                                placeholder="Coupon code" type="text">
                                            <input class="button mt-xxs-30" name="apply_coupon" value="Apply coupon"
                                                type="submit">
                                        </div>
                                        <div class="coupon2">
                                            <input class="button" name="update_cart" value="Update cart" type="submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="cart-page-total">
                                        <h2>Cart totals</h2>
                                        <ul>
                                            <li>Subtotal <span>$80.00</span></li>
                                            <li>Total <span>$80.00</span></li>
                                        </ul>
                                        <a href="#">Proceed to checkout</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
