@extends('layouts.app')

@section('content')
    <div class="main">
        <!-- breadcrumbs area start -->
        <div class="breadcrumbs_aree breadcrumbs_bg mb-110" data-bgimg="/images/others/breadcrumbs-bg.png">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs_text">
                            <h1>ĐẶT HÀNG THÀNH CÔNG</h1>
                            <ul>
                                <li><a href="index.html">Trang chủ</a></li>
                                <li> // Đặt hàng thành công</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumbs area end -->
        <div class="container pb-5">
            <div class="row text-center">
                <div class="col-12 mb-5">
                    Bạn đã đặt hàng thành công. Chúng tôi sẽ liên hệ với bạn sớm nhất có thể. Cảm ơn bạn đã mua hàng tại cửa hàng của chúng tôi. Thông tin đơn hàng của bạn sẽ được gửi qua email.
                </div>
                <div class="col-12">
                    <a href="/" class="btn btn-primary">Quay lại trang chủ</a>
            </div>
        </div>
    </div>
@endsection
