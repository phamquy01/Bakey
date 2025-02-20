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

<div class="offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                    </div>
                    <div class="welcome_text text-center">
                        <p>Welcome to Bakery Shop</p>
                    </div>
                    <div id="menu" class="text-left ">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children active">
                                <a href="/">Home</a>
                            </li>
                            <li><a href="/about">About Us</a></li>
                            <li class="menu-item-has-children"><a href="#">Shop</a>
                            </li>
                            <li class="menu-item-has-children"><a href="/blog">blog</a>
                            </li>
                            <li class="menu-item-has-children"><a href="/contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--offcanvas menu area end-->

<!--header area start-->
<header class="header_section">
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header_top_inner d-flex justify-content-between">
                        <div class="welcome_text">
                            <p>World Wide Completely Free Returns and Free Shipping</p>
                        </div>
                        <div class="header_top_sidebar d-flex align-items-center">
                            <ul class="d-flex">
                                <li><i class="icofont-phone"></i> <a href="tel:+00123456789">+00 123 456 789</a>
                                </li>
                                <li><i class="icofont-envelope"></i> <a
                                        href="mailto:demo@example.com">demo@example.com</a></li>
                                <li class="account_link"> <i class="icofont-user-alt-7"></i><a
                                        href="#">Account</a>
                                    <ul class="dropdown_account_link">
                                        <li><a href="/account">My Account</a></li>
                                        <li><a href="/login">Login</a></li>
                                        <li><a href="/contact">Contact</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="main_header d-flex justify-content-between align-items-center">
                    <div class="header_logo">
                        <a class="sticky_none" href="/"><img src="/images/logo/logo.png" alt=""></a>
                    </div>
                    <!--main menu start-->
                    <div class="main_menu d-none d-lg-block">
                        <nav>
                            <ul class="d-flex">
                                <li><a class="active" href="/">Home</a>
                                </li>
                                <li><a href="/about">About</a></li>
                                {{-- <li><a href="/page">Pages</a></li> --}}
                                <li class="megamenu-holder">
                                    <a href="/products">Shop</a>
                                </li>
                                <li><a href="/blog">blog</a>
                                </li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--main menu end-->
                    <div class="header_account">
                        <ul class="d-flex">
                            <li class="header_search"><a href="javascript:void(0)"><i class="pe-7s-search"></i></a>
                            </li>
                            <li class="header_wishlist"><a href="wishlist.html"><i class="pe-7s-like"></i></a></li>
                            <li class="shopping_cart"><a href="javascript:void(0)"><i class="pe-7s-shopbag"></i></a>
                                <span class="item_count">2</span>
                            </li>
                        </ul>
                        <div class="canvas_open">
                            <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--header area end-->

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
                <a href="single-product.html"><img src="/uploads/products/product1.jpeg" alt=""></a>
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
                <a href="single-product.html"><img src="/uploads/products/product2.jpeg" alt=""></a>
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
            <a href="cart">View cart</a>
        </div>
        <div class="cart_button">
            <a href="checkout.html"><i class="fa fa-sign-in"></i> Checkout</a>
        </div>
    </div>
</div>
<!--mini cart end-->
