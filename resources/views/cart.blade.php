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
        @livewire('cart')

    </div>
@endsection
