<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="icon" type="image/png" sizes="16x16" href="{{ app('proxy')->getOptionByKey('favicon') }}">
    <link rel="stylesheet" href="/css/fontawesome.min.css">
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Quản trị cửa hàng</title>
</head>

<body>
    <div id="warpper" class="nav-fixed">
        <nav class="topnav shadow navbar-light bg-white d-flex">
            <div class="navbar-brand"><a href="?">Quản trị cửa hàng</a></div>
            <div class="nav-right ">
                <div class="btn-group mr-auto">
                    <button type="button" class="btn dropdown" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="plus-icon fas fa-plus-circle"></i>
                    </button>
                    <div class="dropdown-menu">
                        {{-- <a class="dropdown-item" href="{{ url('admin/post/add') }}">Thêm bài viết</a> --}}
                        <a class="dropdown-item" href="{{ url('admin/product/create') }}">Thêm sản phẩm</a>
                        {{-- <a class="dropdown-item" href="{{ url('admin/order/list') }}">Xem đơn hàng</a> --}}
                    </div>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Tài khoản</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end nav  -->

        @php
            $module_active = session('module_active');
        @endphp
        <div id="page-body" class="d-flex">
            <div id="sidebar" class="bg-white">
                <ul id="sidebar-menu">
                    <li class="nav-link {{ $module_active == 'dashboard' ? 'active' : '' }}">
                        <a href="{{ url('/admin/dashboard') }}">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="fa-solid fa-gauge-high"></i>
                            </div>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-link {{ $module_active == 'pages' ? 'active' : '' }}">
                        <a href="{{ url('/admin/page') }}">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="fa-solid fa-layer-group"></i>
                            </div>
                            Trang
                        </a>
                        <i class="arrow fas fa-angle-right"></i>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/admin/page/add') }}">Thêm mới</a></li>
                            <li><a href="{{ url('/admin/page/list') }}">Danh sách</a></li>
                        </ul>
                    </li>
                    <li class="nav-link {{ $module_active == 'post' ? 'active' : '' }}">
                        <a href="{{ url('/admin/post/list') }}">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </div>
                            Bài viết
                        </a>
                        <i class="arrow fas fa-angle-right"></i>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/admin/post/create') }}">Thêm mới</a></li>
                            <li><a href="{{ url('/admin/post/list') }}">Danh sách</a></li>
                            <li><a href="{{ url('/admin/post/cat/list') }}">Danh mục</a></li>
                        </ul>
                    </li>
                    <li class="nav-link {{ $module_active == 'slider' ? 'active' : '' }}">
                        <a href="{{ url('/admin/slider') }}">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="fa-duotone fa-film-simple"></i>
                            </div>
                            Slider
                        </a>
                    </li>
                    <li class="nav-link {{ $module_active == 'product' ? 'active' : '' }}">
                        <a href="{{ url('/admin/product') }}">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="fas fa-gears"></i>
                            </div>
                            Sản phẩm
                        </a>
                        <i class="arrow fas fa-angle-right"></i>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/admin/product/create') }}">Thêm mới</a></li>
                            <li><a href="{{ url('/admin/product/list') }}">Danh sách</a></li>
                            <li><a href="{{ url('/admin/product/cat') }}">Danh mục</a></li>
                        </ul>
                    </li>
                    <li class="nav-link {{ $module_active == 'brand' ? 'active' : '' }}">
                        <a href="{{ url('/admin/brand/show') }}">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="fa-solid fa-copyright"></i>
                            </div>
                            Thương hiệu
                        </a>
                    </li>
                    <li class="nav-link {{ $module_active == 'order' ? 'active' : '' }}">
                        <a href="{{ url('/admin/order/list') }}">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="fa-solid fa-list-check"></i>
                            </div>
                            Bán hàng
                        </a>
                        <i class="arrow fas fa-angle-right"></i>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/admin/order/list') }}">Đơn hàng</a></li>
                        </ul>
                    </li>
                    {{-- <li class="nav-link {{ $module_active == 'feedback' ? 'active' : '' }}">
                        <a href="{{ url('/admin/feedback/list') }}">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="fa-solid fa-message"></i>
                            </div>
                            Phản hồi
                        </a>
                    </li>  --}}
                    <li class="nav-link {{ $module_active == 'user' ? 'active' : '' }}">
                        <a href="{{ url('/admin/user/list') }}">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            Users
                        </a>
                        <i class="arrow fas fa-angle-right"></i>

                        <ul class="sub-menu">
                            <li><a href="{{ url('/admin/user/create') }}">Thêm mới</a></li>
                            <li><a href="{{ url('admin/user/list') }}">Danh sách</a></li>
                        </ul>
                    </li>
                    <li class="nav-link {{ $module_active == 'role' ? 'active' : '' }}">
                        <a href="{{ url('/admin/role') }}">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="fa-duotone fa-user-group"></i>
                            </div>
                            Nhóm quyền
                        </a>
                        <i class="arrow fas fa-angle-right"></i>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/admin/role/create') }}">Thêm mới</a></li>
                            <li><a href="{{ url('/admin/role') }}">Danh sách</a></li>
                        </ul>
                    </li>
                    <li class="nav-link {{ $module_active == 'setting' ? 'active' : '' }}">
                        <a href="{{ url('/admin/setting') }}">
                            <div class="nav-link-icon d-inline-flex">
                                <i class="fa-light fa-solar-system"></i>
                            </div>
                            Hệ thống
                        </a>
                    </li>

                </ul>
            </div>
            <div id="wp-content">
                @yield('content')
            </div>
        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="/js/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="/js/admin.js"></script>

    @yield('js')
    @yield('css')
</body>


</html>
