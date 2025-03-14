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

       @livewire('product-list', ['products' => $products])


    </div>
@endsection
