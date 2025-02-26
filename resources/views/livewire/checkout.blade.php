<div class="cart-area">

    <div class="checkout-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="coupon-accordion">
                        <h3>Khách hàng trở lại? <span id="showlogin">Nhấp vào đây để đăng nhập</span></h3>
                        <div id="checkout-login" class="coupon-content">
                            <div class="coupon-info">
                                <form action="#">
                                    <p class="form-row-first">
                                        <label class="mb-1">Email<span class="required">*</span></label>
                                        <input type="text">
                                    </p>
                                    <p class="form-row-last">
                                        <label>Mật khẩu <span class="required">*</span></label>
                                        <input type="text">
                                    </p>
                                    <p class="form-row">
                                        <input type="checkbox" id="remember_me">
                                        <label for="remember_me">Nhớ tài khoản</label>
                                    </p>
                                    <p class="lost-password"><a href="#">Quên mật khẩu</a></p>
                                </form>
                            </div>
                        </div>
                        <h3>Có phiếu giảm giá? <span id="showcoupon">Nhấp vào đây để nhập mã của bạn</span></h3>
                        <div id="checkout_coupon" class="coupon-checkout-content">
                            <div class="coupon-info">
                                <form action="#">
                                    <p class="checkout-coupon">
                                        <input placeholder="Coupon code" type="text">
                                        <input class="coupon-inner_btn" value="Apply Coupon" type="submit">
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <form action="#">
                        <div class="checkbox-form">
                            <h3>Chi tiết thanh toán</h3>
                            <div class="row">
                                {{-- <div class="col-md-12">
                                    <div class="country-select clearfix">
                                        <label>Country <span class="required">*</span></label>
                                        <select class="myniceselect nice-select wide">
                                            <option data-display="Bangladesh">Bangladesh</option>
                                            <option value="uk">London</option>
                                            <option value="rou">Romania</option>
                                            <option value="fr">French</option>
                                            <option value="de">Germany</option>
                                            <option value="aus">Australia</option>
                                        </select>
                                    </div>
                                </div> --}}
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Họ và tên <span class="required">*</span></label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Tên công ty</label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Địa chỉ <span class="required">*</span></label>
                                        <input placeholder="Địa chỉ đường phố" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <input placeholder="Căn hộ, phòng suite, đơn vị, v.v. (tùy chọn)"
                                            type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Thị trấn / thành phố<span class="required">*</span></label>
                                        <input type="text">
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>State / County <span class="required">*</span></label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Postcode / Zip <span class="required">*</span></label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div> --}}
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Email <span class="required">*</span></label>
                                        <input placeholder="" type="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Số điện thoại <span class="required">*</span></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list create-acc">
                                        <input id="cbox" type="checkbox">
                                        <label for="cbox">Tạo tài khoản</label>
                                    </div>
                                    <div id="cbox-info" class="checkout-form-list create-account">
                                        <p>Tạo một tài khoản bằng cách nhập thông tin bên dưới. Nếu bạn là khách hàng
                                            quay lại, vui lòng đăng nhập ở đầu trang.</p>
                                        <label>Mật khẩu tài khoản<span class="required">*</span></label>
                                        <input placeholder="password" type="password">
                                    </div>
                                </div>
                            </div>
                            <div class="different-address">
                                <div class="ship-different-title">
                                    <h3>
                                        <label>Gửi đến một địa chỉ khác?</label>
                                        <input id="ship-box" type="checkbox">
                                    </h3>
                                </div>
                                <div id="ship-box-info" class="row">
                                    {{-- <div class="col-md-12">
                                        <div class="myniceselect country-select clearfix">
                                            <label>Country <span class="required">*</span></label>
                                            <select class="myniceselect nice-select wide">
                                                <option data-display="Bangladesh">Bangladesh</option>
                                                <option value="uk">London</option>
                                                <option value="rou">Romania</option>
                                                <option value="fr">French</option>
                                                <option value="de">Germany</option>
                                                <option value="aus">Australia</option>
                                            </select>
                                        </div>
                                    </div> --}}
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Họ và tên <span class="required">*</span></label>
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Địa chỉ công ty</label>
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Địa chỉ <span class="required">*</span></label>
                                            <input placeholder="Địa chỉ đường phố" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <input placeholder="Căn hộ, phòng suite, đơn vị, v.v. (tùy chọn)"
                                                type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Thị trấn / thành phố<span class="required">*</span></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>State / County <span class="required">*</span></label>
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Postcode / Zip <span class="required">*</span></label>
                                            <input placeholder="" type="text">
                                        </div>
                                    </div> --}}
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Email <span class="required">*</span></label>
                                            <input placeholder="" type="email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Số điện thoại <span class="required">*</span></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="order-notes">
                                    <div class="checkout-form-list checkout-form-list-2">
                                        <label>Ghi chú đơn hàngs</label>
                                        <textarea id="checkout-mess" cols="30" rows="10"
                                            placeholder="Ghi chú về đơn hàng của bạn, ví dụ ghi chú đặc biệt về việc giao hàng."></textarea>
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
                                    <tr class="cart-item">
                                        <td class="cart-product-name">Vestibulum suscipit<strong
                                                class="product-quantity">
                                                × 1</strong></td>
                                        <td class="cart-product-total"><span class="amount">$165.00</span></td>
                                    </tr>
                                    <tr class="cart-item">
                                        <td class="cart-product-name"> Vestibulum suscipit<strong
                                                class="product-quantity">
                                                × 1</strong></td>
                                        <td class="cart-product-total"><span class="amount">$165.00</span></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <th>Tổng cộng</th>
                                        <td><span class="amount">$215.00</span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Tổng đơn hàng</th>
                                        <td><strong><span class="amount">$215.00</span></strong></td>
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
                                                    Chuyển khoản trực tiếp qua ngân hàng.
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                            <div class="card-body">
                                                <p class="mb-3">Thanh toán trực tiếp vào tài khoản ngân hàng của
                                                    chúng tôi. Vui lòng sử dụng Mã đơn hàng của bạn làm tham chiếu thanh
                                                    toán. Đơn hàng của bạn sẽ không được giao cho đến khi tiền được
                                                    chuyển vào tài khoản của chúng tôi.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="#payment-2">
                                            <h5 class="panel-title">
                                                <a href="#" class="collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo" aria-expanded="false">
                                                    Thanh toán bằng séc
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                            <div class="card-body">
                                                <p class="mb-3">Thanh toán trực tiếp vào tài khoản ngân hàng của
                                                    chúng tôi. Vui lòng sử dụng Mã đơn hàng của bạn làm tham chiếu thanh
                                                    toán. Đơn hàng của bạn sẽ không được giao cho đến khi tiền được
                                                    chuyển vào tài khoản của chúng tôi.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="#payment-3">
                                            <h5 class="panel-title">
                                                <a href="#" class="collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree" aria-expanded="false">
                                                    PayPal
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                                            <div class="card-body">
                                                <p>Thanh toán trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng
                                                    sử dụng Mã đơn hàng của bạn làm tham chiếu thanh toán. Đơn hàng của
                                                    bạn sẽ không được giao cho đến khi tiền được chuyển vào tài khoản
                                                    của chúng tôi.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-button-payment">
                                    <input value="Đặt hàng" type="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
