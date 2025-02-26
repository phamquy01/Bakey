<div class="cart-area">

    <div class="checkout-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <form action="#">
                        <div class="checkbox-form">
                            <h3>Chi tiết thanh toán</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Họ và tên <span class="required">*</span></label>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <input placeholder="" type="text" wire:model.live="name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Địa chỉ <span class="required">*</span></label>
                                        @error('address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <input placeholder="Địa chỉ đường phố" type="text" wire:model.live="address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Email <span class="required">*</span></label>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <input placeholder="" type="email" wire:model.live="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Số điện thoại <span class="required">*</span></label>
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <input type="text" wire:model.live="phone">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Ghi chú</label>
                                        <textarea class="w-100 p-2" rows="3" placeholder="Ghi chú đơn hàng của bạn" name="message" wire:model.live="note"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="your-order">
                        <h3>Đơn hàng của bạn</h3>
                        <div class="your-order-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="cart-product-name">Sản phẩm</th>
                                        <th class="cart-product-total">Tổng cộng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order->items as $item)
                                        <tr class="cart-item">
                                            <td class="cart-product-name">{{ $item?->product?->name }}
                                                <strong class="product-quantity">
                                                    × {{ $item->quantity }}</strong></td>
                                            <td class="cart-product-total"><span class="amount">{{ number_format($item->total, 0, ',', '.') }}₫</span>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <th>Tổng cộng</th>
                                        <td><span class="amount">{{ number_format($order->total_price, 0, ',', '.') }}₫</span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Tổng đơn hàng</th>
                                        <td><strong><span class="amount">{{ number_format($order->total_amount, 0, ',', '.') }}₫</span></strong>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="payment-method">
                            <div class="payment-accordion">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="#payment-1">
                                            <h5 class="panel-title">
                                                <a href="#" class="" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true">
                                                    Thanh toán khi nhận hàng
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                            <div class="card-body">
                                                <p class="mb-3">Thanh toán trực tiếp khi nhận hàng. Vui lòng kiểm tra email để câp nhật trạng thái đơn hàng của bạn.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-button-payment">
                                    <input value="Đặt hàng" type="submit" wire:click="completed">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
