@extends('layouts.app')


@section('content')
    <div class="main">

        <!-- breadcrumbs area start -->
        <div class="breadcrumbs_aree breadcrumbs_bg mb-100" data-bgimg="/images/others/breadcrumbs-bg.png">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs_text">
                            <h1>Products</h1>
                            <ul>
                                <li><a href="/">Home </a></li>
                                <li> // Products</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumbs area end -->

        <!-- product page section start -->
        <div class="product_page_section mb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product_page_wrapper">
                            <!--shop toolbar area start-->
                            <div class="product_sidebar_header mb-60 d-flex justify-content-between align-items-center">
                                <div class="page__amount border">
                                    <p><span>12</span> Product Found of <span>30</span></p>
                                </div>
                                <div class="product_header_right d-flex align-items-center">
                                    <div class="sorting__by d-flex align-items-center">
                                        <span>Sort By : </span>
                                        <form class="select_option" action="#">
                                            <select name="orderby" id="short">
                                                <option selected value="1">Default</option>
                                                <option value="2">Sort by popularity</option>
                                                <option value="3">Sort by newness</option>
                                                <option value="4"> low to high</option>
                                                <option value="5"> high to low</option>
                                                <option value="6">Product Name: Z</option>
                                            </select>
                                        </form>
                                    </div>
                                    <div class="product__toolbar__btn">
                                        <ul class="nav" role="tablist">
                                            <li class="nav-item">
                                                <a class="active" data-bs-toggle="tab" href="#grid" role="tab"
                                                    aria-controls="grid" aria-selected="true"><i class="ion-grid"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a data-bs-toggle="tab" href="#list" aria-controls="list" role="tab"
                                                    aria-selected="false"><i class="ion-ios-list"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--shop toolbar area end-->


                            <!--shop gallery start-->
                            <div class="product_page_gallery">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="grid">
                                        <div class="row grid__product">
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <article class="single_product wow fadeInUp" data-wow-delay="0.1s"
                                                    data-wow-duration="1.1s">
                                                    <figure>
                                                        <div class="product_thumb">
                                                            <a href="single-product.html"><img
                                                                    src="/images/product/product1.png" alt=""></a>
                                                            <div class="action_links">
                                                                <ul class="d-flex justify-content-center">
                                                                    <li class="add_to_cart"><a href="cart.html"
                                                                            title="Add to cart">
                                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                                    <li class="wishlist"><a href="#"
                                                                            title="Add to Wishlist"><span
                                                                                class="pe-7s-like"></span></a></li>
                                                                    <li class="quick_button"><a href="#"
                                                                            title="Quick View" data-bs-toggle="modal"
                                                                            data-bs-target="#modal_box"> <span
                                                                                class="pe-7s-look"></span></a></li>
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
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <article class="single_product wow fadeInUp" data-wow-delay="0.2s"
                                                    data-wow-duration="1.2s">
                                                    <figure>
                                                        <div class="product_thumb">
                                                            <a href="single-product.html"><img
                                                                    src="/images/product/product2.png" alt=""></a>
                                                            <div class="action_links">
                                                                <ul class="d-flex justify-content-center">
                                                                    <li class="add_to_cart"><a href="cart.html"
                                                                            title="Add to cart">
                                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                                    <li class="wishlist"><a href="#"
                                                                            title="Add to Wishlist"><span
                                                                                class="pe-7s-like"></span></a></li>
                                                                    <li class="quick_button"><a href="#"
                                                                            title="Quick View" data-bs-toggle="modal"
                                                                            data-bs-target="#modal_box"> <span
                                                                                class="pe-7s-look"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <figcaption class="product_content text-center">
                                                            <h4><a href="single-product.html">delectus porro natus?</a>
                                                            </h4>
                                                            <div class="price_box">
                                                                <span class="current_price">$22.00</span>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </article>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <article class="single_product wow fadeInUp" data-wow-delay="0.3s"
                                                    data-wow-duration="1.3s">
                                                    <figure>
                                                        <div class="product_thumb">
                                                            <a href="single-product.html"><img
                                                                    src="/images/product/product3.png" alt=""></a>
                                                            <div class="action_links">
                                                                <ul class="d-flex justify-content-center">
                                                                    <li class="add_to_cart"><a href="cart.html"
                                                                            title="Add to cart">
                                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                                    <li class="wishlist"><a href="#"
                                                                            title="Add to Wishlist"><span
                                                                                class="pe-7s-like"></span></a></li>
                                                                    <li class="quick_button"><a href="#"
                                                                            title="Quick View" data-bs-toggle="modal"
                                                                            data-bs-target="#modal_box"> <span
                                                                                class="pe-7s-look"></span></a></li>
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
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <article class="single_product wow fadeInUp" data-wow-delay="0.1s"
                                                    data-wow-duration="1.1s">
                                                    <figure>
                                                        <div class="product_thumb">
                                                            <a href="single-product.html"><img
                                                                    src="/images/product/product4.png" alt=""></a>
                                                            <div class="action_links">
                                                                <ul class="d-flex justify-content-center">
                                                                    <li class="add_to_cart"><a href="cart.html"
                                                                            title="Add to cart">
                                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                                    <li class="wishlist"><a href="#"
                                                                            title="Add to Wishlist"><span
                                                                                class="pe-7s-like"></span></a></li>
                                                                    <li class="quick_button"><a href="#"
                                                                            title="Quick View" data-bs-toggle="modal"
                                                                            data-bs-target="#modal_box"> <span
                                                                                class="pe-7s-look"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <figcaption class="product_content text-center">
                                                            <h4><a href="single-product.html">Praesentium vero nesciu.</a>
                                                            </h4>
                                                            <div class="price_box">
                                                                <span class="current_price">$28.00</span>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </article>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <article class="single_product wow fadeInUp" data-wow-delay="0.2s"
                                                    data-wow-duration="1.2s">
                                                    <figure>
                                                        <div class="product_thumb">
                                                            <a href="single-product.html"><img
                                                                    src="/images/product/product5.png" alt=""></a>
                                                            <div class="action_links">
                                                                <ul class="d-flex justify-content-center">
                                                                    <li class="add_to_cart"><a href="cart.html"
                                                                            title="Add to cart">
                                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                                    <li class="wishlist"><a href="#"
                                                                            title="Add to Wishlist"><span
                                                                                class="pe-7s-like"></span></a></li>
                                                                    <li class="quick_button"><a href="#"
                                                                            title="Quick View" data-bs-toggle="modal"
                                                                            data-bs-target="#modal_box"> <span
                                                                                class="pe-7s-look"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <figcaption class="product_content text-center">
                                                            <h4><a href="single-product.html">Sit amet consectetur
                                                                    elit.</a>
                                                            </h4>
                                                            <div class="price_box">
                                                                <span class="current_price">$32.00</span>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </article>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <article class="single_product wow fadeInUp" data-wow-delay="0.3s"
                                                    data-wow-duration="1.3s">
                                                    <figure>
                                                        <div class="product_thumb">
                                                            <a href="single-product.html"><img
                                                                    src="/images/product/product6.png" alt=""></a>
                                                            <div class="action_links">
                                                                <ul class="d-flex justify-content-center">
                                                                    <li class="add_to_cart"><a href="cart.html"
                                                                            title="Add to cart">
                                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                                    <li class="wishlist"><a href="#"
                                                                            title="Add to Wishlist"><span
                                                                                class="pe-7s-like"></span></a></li>
                                                                    <li class="quick_button"><a href="#"
                                                                            title="Quick View" data-bs-toggle="modal"
                                                                            data-bs-target="#modal_box"> <span
                                                                                class="pe-7s-look"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <figcaption class="product_content text-center">
                                                            <h4><a href="single-product.html">Atque earum ullam non.</a>
                                                            </h4>
                                                            <div class="price_box">
                                                                <span class="current_price">$35.00</span>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </article>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <article class="single_product wow fadeInUp" data-wow-delay="0.1s"
                                                    data-wow-duration="1.1s">
                                                    <figure>
                                                        <div class="product_thumb">
                                                            <a href="single-product.html"><img
                                                                    src="/images/product/product7.png" alt=""></a>
                                                            <div class="action_links">
                                                                <ul class="d-flex justify-content-center">
                                                                    <li class="add_to_cart"><a href="cart.html"
                                                                            title="Add to cart">
                                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                                    <li class="wishlist"><a href="#"
                                                                            title="Add to Wishlist"><span
                                                                                class="pe-7s-like"></span></a></li>
                                                                    <li class="quick_button"><a href="#"
                                                                            title="Quick View" data-bs-toggle="modal"
                                                                            data-bs-target="#modal_box"> <span
                                                                                class="pe-7s-look"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <figcaption class="product_content text-center">
                                                            <h4><a href="single-product.html">Atque earum ullam non.</a>
                                                            </h4>
                                                            <div class="price_box">
                                                                <span class="current_price">$35.00</span>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </article>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <article class="single_product wow fadeInUp" data-wow-delay="0.2s"
                                                    data-wow-duration="1.2s">
                                                    <figure>
                                                        <div class="product_thumb">
                                                            <a href="single-product.html"><img
                                                                    src="/images/product/product8.png" alt=""></a>
                                                            <div class="action_links">
                                                                <ul class="d-flex justify-content-center">
                                                                    <li class="add_to_cart"><a href="cart.html"
                                                                            title="Add to cart">
                                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                                    <li class="wishlist"><a href="#"
                                                                            title="Add to Wishlist"><span
                                                                                class="pe-7s-like"></span></a></li>
                                                                    <li class="quick_button"><a href="#"
                                                                            title="Quick View" data-bs-toggle="modal"
                                                                            data-bs-target="#modal_box"> <span
                                                                                class="pe-7s-look"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <figcaption class="product_content text-center">
                                                            <h4><a href="single-product.html">Modi excepturi ut ipsam.</a>
                                                            </h4>
                                                            <div class="price_box">
                                                                <span class="current_price">$38.00</span>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </article>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <article class="single_product wow fadeInUp" data-wow-delay="0.3s"
                                                    data-wow-duration="1.3s">
                                                    <figure>
                                                        <div class="product_thumb">
                                                            <a href="single-product.html"><img
                                                                    src="/images/product/product9.png" alt=""></a>
                                                            <div class="action_links">
                                                                <ul class="d-flex justify-content-center">
                                                                    <li class="add_to_cart"><a href="cart.html"
                                                                            title="Add to cart">
                                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                                    <li class="wishlist"><a href="#"
                                                                            title="Add to Wishlist"><span
                                                                                class="pe-7s-like"></span></a></li>
                                                                    <li class="quick_button"><a href="#"
                                                                            title="Quick View" data-bs-toggle="modal"
                                                                            data-bs-target="#modal_box"> <span
                                                                                class="pe-7s-look"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <figcaption class="product_content text-center">
                                                            <h4><a href="single-product.html">Provident odio, are Unde.</a>
                                                            </h4>
                                                            <div class="price_box">
                                                                <span class="current_price">$28.00</span>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </article>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <article class="single_product wow fadeInUp" data-wow-delay="0.1s"
                                                    data-wow-duration="1.1s">
                                                    <figure>
                                                        <div class="product_thumb">
                                                            <a href="single-product.html"><img
                                                                    src="/images/product/product10.png"
                                                                    alt=""></a>
                                                            <div class="action_links">
                                                                <ul class="d-flex justify-content-center">
                                                                    <li class="add_to_cart"><a href="cart.html"
                                                                            title="Add to cart">
                                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                                    <li class="wishlist"><a href="#"
                                                                            title="Add to Wishlist"><span
                                                                                class="pe-7s-like"></span></a></li>
                                                                    <li class="quick_button"><a href="#"
                                                                            title="Quick View" data-bs-toggle="modal"
                                                                            data-bs-target="#modal_box"> <span
                                                                                class="pe-7s-look"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <figcaption class="product_content text-center">
                                                            <h4><a href="single-product.html">Modi excepturi ut ipsam.</a>
                                                            </h4>
                                                            <div class="price_box">
                                                                <span class="current_price">$38.00</span>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </article>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <article class="single_product wow fadeInUp" data-wow-delay="0.2s"
                                                    data-wow-duration="1.2s">
                                                    <figure>
                                                        <div class="product_thumb">
                                                            <a href="single-product.html"><img
                                                                    src="/images/product/product11.png"
                                                                    alt=""></a>
                                                            <div class="action_links">
                                                                <ul class="d-flex justify-content-center">
                                                                    <li class="add_to_cart"><a href="cart.html"
                                                                            title="Add to cart">
                                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                                    <li class="wishlist"><a href="#"
                                                                            title="Add to Wishlist"><span
                                                                                class="pe-7s-like"></span></a></li>
                                                                    <li class="quick_button"><a href="#"
                                                                            title="Quick View" data-bs-toggle="modal"
                                                                            data-bs-target="#modal_box"> <span
                                                                                class="pe-7s-look"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <figcaption class="product_content text-center">
                                                            <h4><a href="single-product.html">Provident odio, are Unde.</a>
                                                            </h4>
                                                            <div class="price_box">
                                                                <span class="current_price">$28.00</span>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </article>
                                            </div>
                                            <div class="col-xl-3 col-md-4 col-sm-6">
                                                <article class="single_product wow fadeInUp" data-wow-delay="0.3s"
                                                    data-wow-duration="1.3s">
                                                    <figure>
                                                        <div class="product_thumb">
                                                            <a href="single-product.html"><img
                                                                    src="/images/product/product12.png"
                                                                    alt=""></a>
                                                            <div class="action_links">
                                                                <ul class="d-flex justify-content-center">
                                                                    <li class="add_to_cart"><a href="cart.html"
                                                                            title="Add to cart">
                                                                            <span class="pe-7s-shopbag"></span></a></li>
                                                                    <li class="wishlist"><a href="#"
                                                                            title="Add to Wishlist"><span
                                                                                class="pe-7s-like"></span></a></li>
                                                                    <li class="quick_button"><a href="#"
                                                                            title="Quick View" data-bs-toggle="modal"
                                                                            data-bs-target="#modal_box"> <span
                                                                                class="pe-7s-look"></span></a></li>
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
                                    <div class="tab-pane fade" id="list">
                                        <div class="list__product">
                                            <article class="product_list_items border-bottom">
                                                <figure class="product_list_flex d-flex align-items-center">
                                                    <div class="product_thumb">
                                                        <a href="single-product.html"><img
                                                                src="/images/product/product12.png" alt=""></a>
                                                        <div class="action_links">
                                                            <ul class="d-flex justify-content-center">
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        title="Add to cart">
                                                                        <span class="pe-7s-shopbag"></span></a></li>
                                                                <li class="wishlist"><a href="#"
                                                                        title="Add to Wishlist"><span
                                                                            class="pe-7s-like"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        title="Quick View" data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box">
                                                                        <span class="pe-7s-look"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_list_content">
                                                        <h4><a href="single-product.html">Products Name Here</a></h4>
                                                        <div class="product__ratting">
                                                            <ul class="d-flex">
                                                                <li><a href="#"><i class="ion-ios-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i
                                                                            class="ion-android-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="price_box">
                                                            <span class="current_price">$22.00</span>
                                                        </div>
                                                        <div class="product__desc">
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Dignissimos aliquam maiores impedit temporibus ratione
                                                                eveniet adipisci ab quisquam in quam.</p>
                                                        </div>
                                                        <div class="action_links product_list_action">
                                                            <ul class="d-flex">
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        title="Add to cart">
                                                                        <span class="pe-7s-shopbag"></span></a></li>
                                                                <li class="wishlist"><a href="#"
                                                                        title="Add to Wishlist"><span
                                                                            class="pe-7s-like"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        title="Quick View" data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box">
                                                                        <span class="pe-7s-look"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class="product_list_items border-bottom">
                                                <figure class="product_list_flex d-flex align-items-center">
                                                    <div class="product_thumb">
                                                        <a href="single-product.html"><img
                                                                src="/images/product/product1.png" alt=""></a>
                                                        <div class="action_links">
                                                            <ul class="d-flex justify-content-center">
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        title="Add to cart">
                                                                        <span class="pe-7s-shopbag"></span></a></li>
                                                                <li class="wishlist"><a href="#"
                                                                        title="Add to Wishlist"><span
                                                                            class="pe-7s-like"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        title="Quick View" data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box">
                                                                        <span class="pe-7s-look"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_list_content">
                                                        <h4><a href="single-product.html">Lorem, ipsum dolor.</a></h4>
                                                        <div class="product__ratting">
                                                            <ul class="d-flex">
                                                                <li><a href="#"><i class="ion-ios-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i
                                                                            class="ion-android-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="price_box">
                                                            <span class="current_price">$24.00</span>
                                                        </div>
                                                        <div class="product__desc">
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Dignissimos aliquam maiores impedit temporibus ratione
                                                                eveniet adipisci ab quisquam in quam.</p>
                                                        </div>
                                                        <div class="action_links product_list_action">
                                                            <ul class="d-flex">
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        title="Add to cart">
                                                                        <span class="pe-7s-shopbag"></span></a></li>
                                                                <li class="wishlist"><a href="#"
                                                                        title="Add to Wishlist"><span
                                                                            class="pe-7s-like"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        title="Quick View" data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box">
                                                                        <span class="pe-7s-look"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class="product_list_items border-bottom">
                                                <figure class="product_list_flex d-flex align-items-center">
                                                    <div class="product_thumb">
                                                        <a href="single-product.html"><img
                                                                src="/images/product/product3.png" alt=""></a>
                                                        <div class="action_links">
                                                            <ul class="d-flex justify-content-center">
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        title="Add to cart">
                                                                        <span class="pe-7s-shopbag"></span></a></li>
                                                                <li class="wishlist"><a href="#"
                                                                        title="Add to Wishlist"><span
                                                                            class="pe-7s-like"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        title="Quick View" data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box">
                                                                        <span class="pe-7s-look"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_list_content">
                                                        <h4><a href="single-product.html">Sit amet consecte elit.</a></h4>
                                                        <div class="product__ratting">
                                                            <ul class="d-flex">
                                                                <li><a href="#"><i class="ion-ios-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i
                                                                            class="ion-android-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="price_box">
                                                            <span class="current_price">$26.00</span>
                                                        </div>
                                                        <div class="product__desc">
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Dignissimos aliquam maiores impedit temporibus ratione
                                                                eveniet adipisci ab quisquam in quam.</p>
                                                        </div>
                                                        <div class="action_links product_list_action">
                                                            <ul class="d-flex">
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        title="Add to cart">
                                                                        <span class="pe-7s-shopbag"></span></a></li>
                                                                <li class="wishlist"><a href="#"
                                                                        title="Add to Wishlist"><span
                                                                            class="pe-7s-like"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        title="Quick View" data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box">
                                                                        <span class="pe-7s-look"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class="product_list_items border-bottom">
                                                <figure class="product_list_flex d-flex align-items-center">
                                                    <div class="product_thumb">
                                                        <a href="single-product.html"><img
                                                                src="/images/product/product4.png" alt=""></a>
                                                        <div class="action_links">
                                                            <ul class="d-flex justify-content-center">
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        title="Add to cart">
                                                                        <span class="pe-7s-shopbag"></span></a></li>
                                                                <li class="wishlist"><a href="#"
                                                                        title="Add to Wishlist"><span
                                                                            class="pe-7s-like"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        title="Quick View" data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box">
                                                                        <span class="pe-7s-look"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_list_content">
                                                        <h4><a href="single-product.html">Atque earum ullam non.</a></h4>
                                                        <div class="product__ratting">
                                                            <ul class="d-flex">
                                                                <li><a href="#"><i class="ion-ios-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="ion-ios-star"></i></a>
                                                                </li>
                                                                <li><a href="#"><i
                                                                            class="ion-android-star-outline"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="price_box">
                                                            <span class="current_price">$22.00</span>
                                                        </div>
                                                        <div class="product__desc">
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Dignissimos aliquam maiores impedit temporibus ratione
                                                                eveniet adipisci ab quisquam in quam.</p>
                                                        </div>
                                                        <div class="action_links product_list_action">
                                                            <ul class="d-flex">
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                        title="Add to cart">
                                                                        <span class="pe-7s-shopbag"></span></a></li>
                                                                <li class="wishlist"><a href="#"
                                                                        title="Add to Wishlist"><span
                                                                            class="pe-7s-like"></span></a></li>
                                                                <li class="quick_button"><a href="#"
                                                                        title="Quick View" data-bs-toggle="modal"
                                                                        data-bs-target="#modal_box">
                                                                        <span class="pe-7s-look"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination poduct_pagination">
                                <ul>
                                    <li class="current"><span>1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="next"><a href="#"><i class="ion-chevron-right"></i></a></li>
                                </ul>
                            </div>
                            <!--shop gallery end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product page section end -->


    </div>
@endsection
