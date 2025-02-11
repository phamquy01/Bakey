<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ $favicon }}">
    <link rel="canonical" href="@yield('canonical')">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">

    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:image" content="@yield('image')">
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Website",
          "name": "@yield('title')",
          "url": "/",
          "logo": "@yield('image')"
        }
        </script>
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" sizes="16x16" href="/images/logo.png">
    <link rel="stylesheet" href="/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/ionicons.min.css">
    <link rel="stylesheet" href="/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/nice-select.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/jquery-ui.min.css">
    <link rel="stylesheet" href="{{ mix('/css/global.css') }}" />
    <link rel="stylesheet" href="{{ mix('/css/header.css') }}" />
    <link rel="stylesheet" href="{{ mix('/css/footer.css') }}" />
    <link rel="stylesheet" href="{{ mix('/css/common.css') }}" />
    {{-- <link rel="stylesheet" href="{{ mix('/css/' . View::getSection('file') . '.css') }}" /> --}}
    <script src="/js/vendor/modernizr-3.11.2.min.js"></script>
</head>

<body>
    <!--offcanvas menu area start-->
    <div class="body_overlay">

    </div>

    <div class="wrapper @yield('page')">
        @section('header')
            @include('layouts.header')
        @show
        @yield('content')
        @section('footer')
            @include('layouts.footer')
        @show
    </div>
</body>
<script src="/js/vendor/jquery-3.6.0.min.js"></script>
<script src="/js/vendor/jquery-migrate-3.3.2.min.js"></script>
<script src="/js/vendor/bootstrap.bundle.min.js"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/wow.min.js"></script>
<script src="/js/jquery.scrollup.min.js"></script>
<script src="/js/jquery.nice-select.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/mailchimp-ajax.js"></script>
<script src="/js/jquery-ui.min.js"></script>
<script src="/js/jquery.zoom.min.js"></script>
<script src='/js/app.js'></script>

</html>
