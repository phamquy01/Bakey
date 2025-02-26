<!DOCTYPE html>
<html>
<head>
    <title>Đơn hàng mới</title>
</head>
<body>
    <h2>Xin chào, {{ $data['order']->name }}</h2>
    <p>Cảm ơn bạn đã mua hàng tại cửa hàng của chúng tôi. Đơn hàng của bạn đã được nhận và đang được xử lý.</p>
    <p>Thông tin đơn hàng của bạn:</p>
    <p>Mã đơn hàng: {{ $data['order']->code }}</p>
    <p>Người nhận: {{ $data['order']->name }}</p>
    <p>Địa chỉ: {{ $data['order']->address }}</p>
    <p>Số điện thoại: {{ $data['order']->phone }}</p>
    <p>Ngày đặt hàng: {{ $data['order']->created_at->format('d/m/Y') }}</p>
    <p>Phương thức thanh toán: Thanh toán khi nhận hàng</p>
    <p>Chi tiết đơn hàng:</p>
    <table>
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Tổng cộng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data['items'] as $item)
                <tr>
                    <td>{{ $item?->product?->name }} × {{ $item->quantity }}</td>
                    <td>{{ number_format($item->total, 0, ',', '.') }}₫</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Tổng cộng</th>
                <td>{{ number_format($data['order']->total_price, 0, ',', '.') }}₫</td>
            </tr>
            <tr>
                <th>Tổng đơn hàng</th>
                <td>{{ number_format($data['order']->total_amount, 0, ',', '.') }}₫</td>
            </tr>
        </tfoot>
</body>
</html>
