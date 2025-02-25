<div class="cart-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="product_remove">remove</th>
                                    <th class="product-thumbnail">images</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="product-price">Unit Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($order->items->isEmpty())
                                    <tr>
                                        <td colspan="6" class="text-center">Không có sản phẩm nào trong giỏ hàng</td>
                                    </tr>
                                @else
                                    @foreach ($order->items as $item)
                                        <tr>
                                            <td class="product_remove">
                                                <div type="button" wire:click="removeItem({{ $item->id }})">
                                                    <i class="pe-7s-close" title="Remove"></i>
                                                </div>
                                            </td>
                                            <td class="product-thumbnail">
                                                <a href="#" ratio="1x1" class="bakery-ratio d-block">
                                                    <img class="w-100 h-100 object-fit-cover"src="{{ $item->product->image }}"
                                                        alt="Cart Thumbnail"> </a>
                                            </td>
                                            <td class="product-name"><a href="#">{{ $item->product->name }}</a>
                                            </td>
                                            <td class="product-price"><span
                                                    class="amount">{{ number_format($item->price, 0, ',', '.') }}
                                                    VND</span></td>
                                            <td class="product_pro_button quantity">
                                                <div class="pro-qty border">
                                                    <input type="text" value={{ $item->quantity }}>
                                                </div>
                                            </td>
                                            <td class="product-subtotal"><span
                                                    class="amount">{{ number_format($item->total, 0, ',', '.') }}
                                                    VND</span>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    {{-- <div class="row">
                        <div class="col-12">
                            <div class="coupon-all">
                                <div class="coupon">
                                    <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                        placeholder="Coupon code" type="text">
                                    <input class="button mt-xxs-30" name="apply_coupon" value="Apply coupon"
                                        type="submit">
                                </div>
                                <div class="coupon2">
                                    <input class="button" name="update_cart" value="Update cart" type="submit">
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Cart totals</h2>
                                <ul>
                                    <li>Subtotal <span>{{ number_format($order->total_amount, 0, ',', '.') }} VND</span>
                                    <li>Total <span>{{ number_format($order->total_price, 0, ',', '.') }} VND</span>
                                </ul>
                                @if ($order->items->isNotEmpty())
                                    <a href="/dat-hang">Dặt hàng</a>
                                    
                                @else
                                    <a href="/san-pham">Tiếp tục mua hàng</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
