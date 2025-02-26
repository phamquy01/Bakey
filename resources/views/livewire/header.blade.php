<div class="sticky-top bg-white shadow-sm">
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
                                        <a href="/san-pham">Shop</a>
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
                                <li class="shopping_cart" wire:click="$toggle('miniCartIsOpen')">
                                    <a href="javascript:void(0)"><i class="pe-7s-shopbag"></i></a>
                                    @if ($hasProductInCart)
                                        <span class="item_count">{{ $itemCount }}</span>
                                    @endif
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
    <div class="mini_cart {{ $miniCartIsOpen ? 'active' : '' }}">
        <div class="cart_gallery">
            <div class="cart_close">
                <div class="cart_text">
                    <h3>Giỏ hàng</h3>
                </div>
                <div class="mini_cart_close">
                    <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                </div>
            </div>
            @foreach ($order->items as $item)
                <div class="cart_item">
                    <div class="cart_img">
                        <a href="{{ $item?->product?->url() }}" class="ratio ratio-1x1"><img
                                class="w-100 h-100 object-fit-cover" src="{{ $item?->product?->image }}"
                                alt="{{ $item?->product?->name }}"></a>
                    </div>
                    <div class="cart_info">
                        <a href="{{ $item?->product?->url() }}">{{ $item?->product?->name }}</a>
                        <p>{{ $item->quantity }} x <span> {{ number_format($item->price, 0, ',', '.') }}₫ </span></p>
                    </div>
                    <div class="cart_remove">
                        <a href="#" wire:click="removeItem({{ $item->id }})"><i
                                class="ion-android-close"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mini_cart_table">
            <div class="cart_table_border">
                <div class="cart_total">
                    <span>Tạm tính:</span>
                    <span class="price">{{ number_format($order->total_amount, 0, ',', '.') }}₫</span>
                </div>
                <div class="cart_total mt-10">
                    <span>Thành tiền:</span>
                    <span class="price">{{ number_format($order->total_price, 0, ',', '.') }}₫</span>
                </div>
            </div>
        </div>
        <div class="mini_cart_footer">
            <div class="cart_button">
                <a href="/gio-hang">Xem giỏ hàng</a>
            </div>
            <div class="cart_button">
                <a href="/dat-hang"><i class="fa fa-sign-in"></i> Đặt hàng</a>
            </div>
        </div>
    </div>
    <div class="toast-container position-fixed top-25 end-0 p-3">
        <div wire:ignore id="add-to-cart-toast" class="toast align-items-center text-bg-primary border-0"
            role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    Đã thêm sản phẩm vào giỏ hàng!
                </div>
                <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('livewire:initialized', () => {
            Livewire.on('addToCartSuccess', () => {
                var toastE = new bootstrap.Toast(document.getElementById('add-to-cart-toast'));
                toastE.show();
            });
        })
    </script>
</div>
