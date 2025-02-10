@extends('layouts.app')

@section('title', $title)

@section('description', $description)

@section('keywords', $title . ', ' . $description)

@section('page', 'home-page')
@section('file', 'home-page')

@section('canonical', env('APP_URL'))

@section('image', $imageShareUrl)

@section('content')
    <div class="main">
        <!--mini cart-->
        <div class="mini_cart">
            <div class="cart_gallery">
                <div class="cart_close">
                    <div class="cart_text">
                        <h3>cart</h3>
                    </div>
                    <div class="mini_cart_close">
                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                    </div>
                </div>
                <div class="cart_item">
                    <div class="cart_img">
                        <a href="single-product.html"><img src="/images/product/product1.png" alt=""></a>
                    </div>
                    <div class="cart_info">
                        <a href="single-product.html">Primis In Faucibus</a>
                        <p>1 x <span> $65.00 </span></p>
                    </div>
                    <div class="cart_remove">
                        <a href="#"><i class="ion-android-close"></i></a>
                    </div>
                </div>
                <div class="cart_item">
                    <div class="cart_img">
                        <a href="single-product.html"><img src="/images/product/product2.png" alt=""></a>
                    </div>
                    <div class="cart_info">
                        <a href="single-product.html">Letraset Sheets</a>
                        <p>1 x <span> $60.00 </span></p>
                    </div>
                    <div class="cart_remove">
                        <a href="#"><i class="ion-android-close"></i></a>
                    </div>
                </div>
            </div>
            <div class="mini_cart_table">
                <div class="cart_table_border">
                    <div class="cart_total">
                        <span>Sub total:</span>
                        <span class="price">$125.00</span>
                    </div>
                    <div class="cart_total mt-10">
                        <span>total:</span>
                        <span class="price">$125.00</span>
                    </div>
                </div>
            </div>
            <div class="mini_cart_footer">
                <div class="cart_button">
                    <a href="cart.html">View cart</a>
                </div>
                <div class="cart_button">
                    <a href="checkout.html"><i class="fa fa-sign-in"></i> Checkout</a>
                </div>
            </div>
        </div>
        <!--mini cart end-->

        <!-- page search box -->
        <div class="page_search_box">
            <div class="search_close">
                <i class="ion-close-round"></i>
            </div>
            <form class="border-bottom" action="#">
                <input class="border-0" placeholder="Search products..." type="text">
                <button type="submit"><span class="pe-7s-search"></span></button>
            </form>
        </div>

        <!--slide banner section start-->
        <div class="hero_banner_section hero_banner2 d-flex align-items-center mb-60"
            data-bgimg="/images/bg/hero-bg2.png">
            <div class="container">
                <div class="hero_banner_inner">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="hero_content hero_content2">
                                <h3 class="wow fadeInUp text-white" data-wow-delay="0.1s" data-wow-duration="1.1s"> Up To
                                    Sale <span> 50% Off</span> </h3>
                                <h1 class="wow fadeInUp text-white" data-wow-delay="0.2s" data-wow-duration="1.2s">We Bake
                                    With <br>
                                    Pasion.</h1>
                                <a class="btn btn-link wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s"
                                    href="shop-left-sidebar.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--slider area end-->

        <!-- featured banner section start -->
        <div class="featured_banner_section mb-100">
            <div class="container-fluid">
                <div class="row featured_banner_inner slick__activation"
                    data-slick='{
                "slidesToShow": 3,
                "slidesToScroll": 1,
                "arrows": true,
                "dots": false,
                "autoplay": false,
                "speed": 300,
                "infinite": true ,  
                "responsive":[ 
                  {"breakpoint":768, "settings": { "slidesToShow": 2 } }, 
                  {"breakpoint":500, "settings": { "slidesToShow": 1 } }  
                 ]                                                     
            }'>
                    <div class="col-lg-4">
                        <div class="single_featured_banner wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                            <div class="featured_banner_thumb">
                                <a href="shop-left-sidebar.html"><img src="/images/bg/featured-banner1.png"
                                        alt=""></a>
                            </div>
                            <div class="featured_banner_text d-flex justify-content-between align-items-center">
                                <h3><a href="shop-left-sidebar.html">Pastry</a></h3>
                                <span>(39)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_featured_banner wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                            <div class="featured_banner_thumb">
                                <a href="shop-left-sidebar.html"><img src="/images/bg/featured-banner2.png"
                                        alt=""></a>
                            </div>
                            <div class="featured_banner_text d-flex justify-content-between align-items-center">
                                <h3><a href="shop-left-sidebar.html">Breakfast</a></h3>
                                <span>(23)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_featured_banner wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s">
                            <div class="featured_banner_thumb">
                                <a href="shop-left-sidebar.html"><img src="/images/bg/featured-banner3.png"
                                        alt=""></a>
                            </div>
                            <div class="featured_banner_text d-flex justify-content-between align-items-center">
                                <h3><a href="shop-left-sidebar.html">Cofee Cake</a></h3>
                                <span>(17)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_featured_banner wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s">
                            <div class="featured_banner_thumb">
                                <a href="shop-left-sidebar.html"><img src="/images/bg/featured-banner1.png"
                                        alt=""></a>
                            </div>
                            <div class="featured_banner_text d-flex justify-content-between align-items-center">
                                <h3><a href="shop-left-sidebar.html">Pastry</a></h3>
                                <span>(39)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- featured banner section end -->

        <!-- product section start -->
        <div class="product_section mb-80 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
            <div class="container">
                <div class="product_header">
                    <div class="section_title text-center">
                        <h2>New Products</h2>
                    </div>
                    <div class="product_tab_button">
                        <ul class="nav justify-content-center" role="tablist" id="nav-tab">
                            <li>
                                <a class="active" data-toggle="tab" href="#features" role="tab"
                                    aria-controls="features" aria-selected="false">Our Features </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#seller" role="tab" aria-controls="seller"
                                    aria-selected="false">
                                    Best Sellers </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#sales" role="tab" aria-controls="sales"
                                    aria-selected="false">New Items </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content product_container">
                    <div class="tab-pane fade show active" id="features" role="tabpanel">
                        <div class="product_gallery">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="single-product.html"><img src="/images/product/product1.png"
                                                        alt=""></a>
                                                <div class="action_links">
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content text-center">
                                                <h4><a href="single-product.html">Products Name Here</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$22.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="single-product.html"><img src="/images/product/product2.png"
                                                        alt=""></a>
                                                <div class="action_links">
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content text-center">
                                                <h4><a href="single-product.html">Lorem, ipsum dolor.</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$24.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="single-product.html"><img src="/images/product/product3.png"
                                                        alt=""></a>
                                                <div class="action_links">
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content text-center">
                                                <h4><a href="single-product.html">Praesentium vero nesciu.</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$28.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="single-product.html"><img src="/images/product/product4.png"
                                                        alt=""></a>
                                                <div class="action_links">
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content text-center">
                                                <h4><a href="single-product.html">Sit amet consectetur elit.</a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="current_price">$32.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="single-product.html"><img src="/images/product/product5.png"
                                                        alt=""></a>
                                                <div class="action_links">
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content text-center">
                                                <h4><a href="single-product.html">Atque earum ullam non.</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$35.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="single-product.html"><img src="/images/product/product6.png"
                                                        alt=""></a>
                                                <div class="action_links">
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content text-center">
                                                <h4><a href="single-product.html">Modi excepturi ut ipsam.</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$38.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="single-product.html"><img src="/images/product/product7.png"
                                                        alt=""></a>
                                                <div class="action_links">
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content text-center">
                                                <h4><a href="single-product.html">Provident odio, are Unde.</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$28.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="single-product.html"><img src="/images/product/product1.png"
                                                        alt=""></a>
                                                <div class="action_links">
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content text-center">
                                                <h4><a href="single-product.html">Products Name Here</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$22.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="seller" role="tabpanel">
                        <div class="product_gallery">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="single-product.html"><img src="/images/product/product5.png"
                                                        alt=""></a>
                                                <div class="action_links">
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content text-center">
                                                <h4><a href="single-product.html">Atque earum ullam non.</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$35.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="single-product.html"><img src="/images/product/product6.png"
                                                        alt=""></a>
                                                <div class="action_links">
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content text-center">
                                                <h4><a href="single-product.html">Modi excepturi ut ipsam.</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$38.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="single-product.html"><img src="/images/product/product7.png"
                                                        alt=""></a>
                                                <div class="action_links">
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content text-center">
                                                <h4><a href="single-product.html">Provident odio, are Unde.</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$28.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="single-product.html"><img src="/images/product/product1.png"
                                                        alt=""></a>
                                                <div class="action_links">
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content text-center">
                                                <h4><a href="single-product.html">Products Name Here</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$22.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="single-product.html"><img src="/images/product/product1.png"
                                                        alt=""></a>
                                                <div class="action_links">
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content text-center">
                                                <h4><a href="single-product.html">Products Name Here</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$22.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="single-product.html"><img src="/images/product/product2.png"
                                                        alt=""></a>
                                                <div class="action_links">
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content text-center">
                                                <h4><a href="single-product.html">Lorem, ipsum dolor.</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$24.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="single-product.html"><img src="/images/product/product3.png"
                                                        alt=""></a>
                                                <div class="action_links">
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content text-center">
                                                <h4><a href="single-product.html">Praesentium vero nesciu.</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$28.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="single-product.html"><img src="/images/product/product4.png"
                                                        alt=""></a>
                                                <div class="action_links">
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content text-center">
                                                <h4><a href="single-product.html">Sit amet consectetur elit.</a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="current_price">$32.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sales" role="tabpanel">
                        <div class="product_gallery">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="single-product.html"><img src="/images/product/product3.png"
                                                        alt=""></a>
                                                <div class="action_links">
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content text-center">
                                                <h4><a href="single-product.html">Praesentium vero nesciu.</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$28.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="single-product.html"><img src="/images/product/product4.png"
                                                        alt=""></a>
                                                <div class="action_links">
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content text-center">
                                                <h4><a href="single-product.html">Sit amet consectetur elit.</a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="current_price">$32.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="single-product.html"><img src="/images/product/product5.png"
                                                        alt=""></a>
                                                <div class="action_links">
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content text-center">
                                                <h4><a href="single-product.html">Atque earum ullam non.</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$35.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="single-product.html"><img src="/images/product/product1.png"
                                                        alt=""></a>
                                                <div class="action_links">
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content text-center">
                                                <h4><a href="single-product.html">Products Name Here</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$22.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="single-product.html"><img src="/images/product/product2.png"
                                                        alt=""></a>
                                                <div class="action_links">
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content text-center">
                                                <h4><a href="single-product.html">Lorem, ipsum dolor.</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$24.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="single-product.html"><img src="/images/product/product6.png"
                                                        alt=""></a>
                                                <div class="action_links">
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content text-center">
                                                <h4><a href="single-product.html">Modi excepturi ut ipsam.</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$38.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="single-product.html"><img src="/images/product/product7.png"
                                                        alt=""></a>
                                                <div class="action_links">
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content text-center">
                                                <h4><a href="single-product.html">Provident odio, are Unde.</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$28.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="single-product.html"><img src="/images/product/product1.png"
                                                        alt=""></a>
                                                <div class="action_links">
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">
                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                        <li class="wishlist"><a href="wishlist.html"
                                                                title="Add to Wishlist"><span
                                                                    class="pe-7s-like"></span></a>
                                                        </li>
                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                <span class="pe-7s-look"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content text-center">
                                                <h4><a href="single-product.html">Products Name Here</a></h4>
                                                <div class="price_box">
                                                    <span class="current_price">$22.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product section end -->

        <!-- banner section  start -->
        <div class="banner_section banner_section2 mb-140 padding-l-r-92">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single_banner wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                            <div class="banner_thumb">
                                <a href="#"><img src="/images/bg/banner3.png" alt=""></a>
                                <div class="banner_text">
                                    <h3><span>70%</span> Sale Off</h3>
                                    <h2>Best Quality <br>
                                        Products</h2>
                                    <a class="btn btn-link" href="shop-left-sidebar.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_banner wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                            <div class="banner_thumb">
                                <a href="#"><img src="/images/bg/banner4.png" alt=""></a>
                                <div class="banner_text">
                                    <h3><span>25%</span> Sale Off</h3>
                                    <h2>Hot & Spicy <br>
                                        Pastry</h2>
                                    <a class="btn btn-link" href="shop-left-sidebar.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_banner wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s">
                            <div class="banner_thumb">
                                <a href="#"><img src="/images/bg/banner5.png" alt=""></a>
                                <div class="banner_text">
                                    <h3><span>35%</span> Sale Off</h3>
                                    <h2>Best Quality <br>
                                        Products</h2>
                                    <a class="btn btn-link" href="shop-left-sidebar.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner section  end -->

        <!-- service section start-->
        <div class="service_section services_style2 service_container mb-86">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="services_section_inner d-flex justify-content-between">
                            <div class="single_services one text-center wow fadeInUp" data-wow-delay="0.1s"
                                data-wow-duration="1.1s">
                                <div class="services_thumb">
                                    <img src="/images/others/services5.png" alt="">
                                </div>
                                <div class="services_content">
                                    <h3><a href="shop-left-sidebar.html">Pastry</a></h3>
                                    <p>Lorem ipsum dolor sit ametgtol consecr adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="single_services two text-center wow fadeInUp" data-wow-delay="0.2s"
                                data-wow-duration="1.2s">
                                <div class="services_thumb">
                                    <img src="/images/others/services6.png" alt="">
                                </div>
                                <div class="services_content">
                                    <h3><a href="shop-left-sidebar.html">Breakfast</a></h3>
                                    <p>Lorem ipsum dolor sit ametgtol consecr adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="single_services three text-center wow fadeInUp" data-wow-delay="0.3s"
                                data-wow-duration="1.3s">
                                <div class="services_thumb">
                                    <img src="/images/others/services7.png" alt="">
                                </div>
                                <div class="services_content">
                                    <h3><a href="shop-left-sidebar.html">Cofee Cake</a></h3>
                                    <p>Lorem ipsum dolor sit ametgtol consecr adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="single_services four text-center wow fadeInUp" data-wow-delay="0.4s"
                                data-wow-duration="1.4s">
                                <div class="services_thumb">
                                    <img src="/images/others/services8.png" alt="">
                                </div>
                                <div class="services_content">
                                    <h3><a href="shop-left-sidebar.html">Bake Tost</a></h3>
                                    <p>Lorem ipsum dolor sit ametgtol consecr adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- service section end-->

        <!-- product section start -->
        <div class="product_section mb-80 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
            <div class="container">
                <div class="section_title text-center mb-55">
                    <h2>Best Seller</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor
                        incididunt ut
                        labore et dolore magna</p>
                </div>
                <div class="row product_slick slick_navigation slick__activation"
                    data-slick='{
                "slidesToShow": 4,
                "slidesToScroll": 1,
                "arrows": true,
                "dots": false,
                "autoplay": false,
                "speed": 300,
                "infinite": true ,  
                "responsive":[ 
                  {"breakpoint":992, "settings": { "slidesToShow": 3 } }, 
                  {"breakpoint":768, "settings": { "slidesToShow": 2 } }, 
                  {"breakpoint":500, "settings": { "slidesToShow": 1 } }  
                 ]                                                     
            }'>
                    <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="single-product.html"><img src="/images/product/product1.png"
                                            alt=""></a>
                                    <div class="action_links">
                                        <ul class="d-flex justify-content-center">
                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart"> <span
                                                        class="pe-7s-shopbag"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                        class="pe-7s-like"></span></a></li>
                                            <li class="quick_button"><a href="#" title="Quick View"
                                                    data-bs-toggle="modal" data-bs-target="#modal_box">
                                                    <span class="pe-7s-look"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <h4><a href="single-product.html">Products Name Here</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$22.00</span>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="single-product.html"><img src="/images/product/product2.png"
                                            alt=""></a>
                                    <div class="action_links">
                                        <ul class="d-flex justify-content-center">
                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart"> <span
                                                        class="pe-7s-shopbag"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                        class="pe-7s-like"></span></a></li>
                                            <li class="quick_button"><a href="#" title="Quick View"
                                                    data-bs-toggle="modal" data-bs-target="#modal_box">
                                                    <span class="pe-7s-look"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <h4><a href="single-product.html">Lorem, ipsum dolor.</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$24.00</span>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="single-product.html" ><img src="/images/product/product3.png"
                                            alt=""></a>
                                    <div class="action_links">
                                        <ul class="d-flex justify-content-center">
                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart"> <span
                                                        class="pe-7s-shopbag"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                        class="pe-7s-like"></span></a></li>
                                            <li class="quick_button"><a href="#" title="Quick View"
                                                    data-bs-toggle="modal" data-bs-target="#modal_box">
                                                    <span class="pe-7s-look"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <h4><a href="single-product.html">Praesentium vero nesciu.</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$28.00</span>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="single-product.html"><img src="/images/product/product4.png"
                                            alt=""></a>
                                    <div class="action_links">
                                        <ul class="d-flex justify-content-center">
                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart"> <span
                                                        class="pe-7s-shopbag"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                        class="pe-7s-like"></span></a></li>
                                            <li class="quick_button"><a href="#" title="Quick View"
                                                    data-bs-toggle="modal" data-bs-target="#modal_box">
                                                    <span class="pe-7s-look"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <h4><a href="single-product.html">Sit amet consectetur elit.</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$32.00</span>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="single-product.html"><img src="/images/product/product5.png"
                                            alt=""></a>
                                    <div class="action_links">
                                        <ul class="d-flex justify-content-center">
                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart"> <span
                                                        class="pe-7s-shopbag"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                        class="pe-7s-like"></span></a></li>
                                            <li class="quick_button"><a href="#" title="Quick View"
                                                    data-bs-toggle="modal" data-bs-target="#modal_box">
                                                    <span class="pe-7s-look"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <h4><a href="single-product.html">Atque earum ullam non.</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$35.00</span>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="single-product.html"><img src="/images/product/product6.png"
                                            alt=""></a>
                                    <div class="action_links">
                                        <ul class="d-flex justify-content-center">
                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart"> <span
                                                        class="pe-7s-shopbag"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                        class="pe-7s-like"></span></a></li>
                                            <li class="quick_button"><a href="#" title="Quick View"
                                                    data-bs-toggle="modal" data-bs-target="#modal_box">
                                                    <span class="pe-7s-look"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <h4><a href="single-product.html">Modi excepturi ut ipsam.</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$38.00</span>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="single-product.html"><img src="/images/product/product7.png"
                                            alt=""></a>
                                    <div class="action_links">
                                        <ul class="d-flex justify-content-center">
                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart"> <span
                                                        class="pe-7s-shopbag"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                        class="pe-7s-like"></span></a></li>
                                            <li class="quick_button"><a href="#" title="Quick View"
                                                    data-bs-toggle="modal" data-bs-target="#modal_box">
                                                    <span class="pe-7s-look"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <h4><a href="single-product.html">Provident odio, are Unde.</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$28.00</span>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="single-product.html"><img src="/images/product/product1.png"
                                            alt=""></a>
                                    <div class="action_links">
                                        <ul class="d-flex justify-content-center">
                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart"> <span
                                                        class="pe-7s-shopbag"></span></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span
                                                        class="pe-7s-like"></span></a></li>
                                            <li class="quick_button"><a href="#" title="Quick View"
                                                    data-bs-toggle="modal" data-bs-target="#modal_box">
                                                    <span class="pe-7s-look"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <h4><a href="single-product.html">Products Name Here</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$22.00</span>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <!-- product section end -->

        <!-- banner fullwidth section start -->
        <div class="deals_banner_section padding-l-r-92 mb-105 wow fadeInUp" data-wow-delay="0.1s"
            data-wow-duration="1.1s">
            <div class="deals_banner_bg" data-bgimg="/images/bg/banner-fullwidth2.png">
                <div class="container">
                    <div class="deals_banner_inner">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-6 col-md-6 offset-md-6">
                                <div class="banner_discount_text deals_banner_text ">
                                    <h3><span>30% </span> Sale Off</h3>
                                    <h2>Deal of the day</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                        eiusmod <br> tempor
                                        incididunt ut labore et dolore magna</p>
                                    <div class="timer__area">
                                        <div data-countdown="2023/10/11"></div>
                                    </div>
                                    <a class="btn btn-link" href="shop-left-sidebar.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="add_discount">
                            <img src="/images/others/add-discount.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner fullwidth section end -->

        <!-- blog section start -->
        <div class="blog_section mb-90">
            <div class="container">
                <div class="section_title text-center wow fadeInUp mb-50" data-wow-delay="0.1s"
                    data-wow-duration="1.1s">
                    <h2>Latest Blog</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>
                        tempor incididunt ut
                        labore et dolore magna</p>
                </div>
                <div class="row blog_inner slick__activation"
                    data-slick='{
                "slidesToShow": 3,
                "slidesToScroll": 1,
                "arrows": false,
                "dots": false,
                "autoplay": false,
                "speed": 300,
                "infinite": true ,  
                "responsive":[  
                  {"breakpoint":992, "settings": { "slidesToShow": 2 } },  
                  {"breakpoint":576, "settings": { "slidesToShow": 1 } }  
                 ]                                                     
            }'>
                    <div class="col-lg-4">
                        <div class="single_blog wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                            <div class="blog_thumb">
                                <a href="blog-detail-left-sidebar.html"><img src="/images/blog/blog1.png"
                                        alt=""></a>
                            </div>
                            <div class="blog_content">
                                <div class="blog_arrow_btn">
                                    <a href="blog-detail-left-sidebar.html"><i class="ion-arrow-right-c"></i></a>
                                </div>
                                <span>Brakery</span>
                                <h3><a href="blog-detail-left-sidebar.html">Lorem ipsum doloril
                                        sit amet consepy.</a></h3>
                                <div class="blog__meta d-flex align-items-center">
                                    <div class="blog__meta__thumb">
                                        <img src="/images/others/meta-img1.png" alt="">
                                    </div>
                                    <div class="blog__meta__text">
                                        <ul class="d-flex">
                                            <li>By: Admin</li>
                                            <li><i class="icofont-calendar"></i> 22 Aug, 2021</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_blog wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                            <div class="blog_thumb">
                                <a href="blog-detail-left-sidebar.html"><img src="/images/blog/blog2.png"
                                        alt=""></a>
                            </div>
                            <div class="blog_content">
                                <div class="blog_arrow_btn">
                                    <a href="blog-detail-left-sidebar.html"><i class="ion-arrow-right-c"></i></a>
                                </div>
                                <span class="color2">Brakery</span>
                                <h3><a href="blog-detail-left-sidebar.html">Lorem ipsum dolor sit, elit,
                                        dolores is .</a>
                                </h3>
                                <div class="blog__meta d-flex align-items-center">
                                    <div class="blog__meta__thumb">
                                        <img src="/images/others/meta-img2.png" alt="">
                                    </div>
                                    <div class="blog__meta__text">
                                        <ul class="d-flex">
                                            <li>By: Admin</li>
                                            <li><i class="icofont-calendar"></i> 22 Aug, 2021</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_blog wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s">
                            <div class="blog_thumb">
                                <a href="blog-detail-left-sidebar.html"><img src="/images/blog/blog3.png"
                                        alt=""></a>
                            </div>
                            <div class="blog_content">
                                <div class="blog_arrow_btn">
                                    <a href="blog-detail-left-sidebar.html"><i class="ion-arrow-right-c"></i></a>
                                </div>
                                <span class="color3">Brakery</span>
                                <h3><a href="blog-detail-left-sidebar.html"> harum dolorum culpa quas
                                        are veniam</a></h3>
                                <div class="blog__meta d-flex align-items-center">
                                    <div class="blog__meta__thumb">
                                        <img src="/images/others/meta-img3.png" alt="">
                                    </div>
                                    <div class="blog__meta__text">
                                        <ul class="d-flex">
                                            <li>By: Admin</li>
                                            <li><i class="icofont-calendar"></i> 22 Aug, 2021</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_blog wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                            <div class="blog_thumb">
                                <a href="blog-detail-left-sidebar.html"><img src="/images/blog/blog1.png"
                                        alt=""></a>
                            </div>
                            <div class="blog_content">
                                <div class="blog_arrow_btn">
                                    <a href="blog-detail-left-sidebar.html"><i class="ion-arrow-right-c"></i></a>
                                </div>
                                <span>Brakery</span>
                                <h3><a href="blog-detail-left-sidebar.html">There are many of Lorem
                                        Ipsum.</a></h3>
                                <div class="blog__meta d-flex align-items-center">
                                    <div class="blog__meta__thumb">
                                        <img src="/images/others/meta-img1.png" alt="">
                                    </div>
                                    <div class="blog__meta__text">
                                        <ul class="d-flex">
                                            <li>By: Admin</li>
                                            <li><i class="icofont-calendar"></i> 22 Aug, 2021</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog section end -->


        <!-- modal area start-->
        <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="ion-android-close"></i></span>
                    </button>
                    <div class="modal_body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <div class="modal_tab">
                                        <div class="tab-content product-details-large">
                                            <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                                <div class="modal_tab_img">
                                                    <a href="single-product.html"><img
                                                            src="/images/product/product1.png" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab2" role="tabpanel">
                                                <div class="modal_tab_img">
                                                    <a href="single-product.html"><img
                                                            src="/images/product/product2.png" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab3" role="tabpanel">
                                                <div class="modal_tab_img">
                                                    <a href="#" class="ratio ratio-1x1"><img src="/images/product/product3.png"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab4" role="tabpanel">
                                                <div class="modal_tab_img">
                                                    <a href="#"><img src="/images/product/product4.png"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal_tab_button">
                                            <ul class="nav product_navactive owl-carousel" role="tablist">
                                                <li>
                                                    <a class="nav-link active" data-toggle="tab" href="#tab1"
                                                        role="tab" aria-controls="tab1" aria-selected="false"><img
                                                            src="/images/product/mini-product/product1.png"
                                                            alt=""></a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" data-toggle="tab" href="#tab2"
                                                        role="tab" aria-controls="tab2" aria-selected="false"><img
                                                            src="/images/product/mini-product/product2.png"
                                                            alt=""></a>
                                                </li>
                                                <li>
                                                    <a class="nav-link button_three" data-toggle="tab" href="#tab3"
                                                        role="tab" aria-controls="tab3" aria-selected="false"><img
                                                            src="/images/product/mini-product/product3.png"
                                                            alt=""></a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" data-toggle="tab" href="#tab4"
                                                        role="tab" aria-controls="tab4" aria-selected="false"><img
                                                            src="/images/product/mini-product/product4.png"
                                                            alt=""></a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-12">
                                    <div class="modal_right">
                                        <div class="modal_title mb-10">
                                            <h2>Donec Ac Tempus</h2>
                                        </div>
                                        <div class="modal_price mb-10">
                                            <span class="new_price">$64.99</span>
                                            <span class="old_price">$78.99</span>
                                        </div>
                                        <div class="modal_description mb-15">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Mollitia iste
                                                laborum ad impedit pariatur esse optio tempora sint
                                                ullam autem deleniti nam
                                                in quos qui nemo ipsum numquam, reiciendis maiores
                                                quidem aperiam, rerum vel
                                                recusandae </p>
                                        </div>
                                        <div class="variants_selects">
                                            <div class="variants_size">
                                                <h2>size</h2>
                                                <select class="select_option">
                                                    <option selected value="1">s</option>
                                                    <option value="1">m</option>
                                                    <option value="1">l</option>
                                                    <option value="1">xl</option>
                                                    <option value="1">xxl</option>
                                                </select>
                                            </div>
                                            <div class="variants_color">
                                                <h2>color</h2>
                                                <select class="select_option">
                                                    <option selected value="1">purple</option>
                                                    <option value="1">violet</option>
                                                    <option value="1">black</option>
                                                    <option value="1">pink</option>
                                                    <option value="1">orange</option>
                                                </select>
                                            </div>
                                            <div class="modal_add_to_cart">
                                                <form action="#">
                                                    <input min="1" max="100" step="1"
                                                        value="1" type="number">
                                                    <button type="submit">add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal_social">
                                            <h2>Share this product</h2>
                                            <ul>
                                                <li class="facebook"><a href="#"><i
                                                            class="ion-social-facebook"></i></a>
                                                </li>
                                                <li class="twitter"><a href="#"><i
                                                            class="ion-social-twitter"></i></a></li>
                                                <li class="pinterest"><a href="#"><i
                                                            class="ion-social-pinterest"></i></a>
                                                </li>
                                                <li class="google-plus"><a href="#"><i
                                                            class="ion-social-googleplus"></i></a>
                                                </li>
                                                <li class="linkedin"><a href="#"><i
                                                            class="ion-social-linkedin"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal area end-->

    </div>
@endsection
