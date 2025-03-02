@extends('layouts/admin')
@section('content')
    <div class="container-fluid pt-5">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{ session('success') }}
            </div>
        @endif
        @if (session('danger'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{ session('danger') }}
            </div>
        @endif
        <div class="row row-cols-3 mb-4">
            <div class="col">
                <div class="card text-white bg-primary mb-3 h-100">
                    <div class="card-header">SỐ LƯỢNG SẢN PHẨM</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $totalProduct ?? 0 }}</h5>
                        <p class="card-text">Tổng số sản phẩm trong cửa hàng</p>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-danger mb-3 h-100">
                    <div class="card-header">SỐ LƯỢNG DANH MỤC</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $totalCategory ?? 0 }}</h5>
                        <p class="card-text">Tổng số lượng danh mục trong cửa hàng</p>
                    </div>
                </div>
            </div>

            {{-- <div class="col">
            <div class="card text-white bg-success mb-3 h-100">
                <div class="card-header">DUNG LƯỢNG</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $totalSize ?? 0 }} MB</h5>
                    <p class="card-text">Tổng số dụng lưu trữ</p>
                </div>
            </div>
        </div> --}}
        </div>
        <!-- end analytic  -->
        <div class="card">
            <div class="card-header font-weight-bold">
                Thống kê
            </div>
            <div class="card-body p-4">
                {{-- <div class="mb-4">
                    <h5 class="font-weight-bold">Biểu đồ doanh thu</h5>
                </div> --}}
                <div style="width:100%; margin-bottom: 40px;">
                    <canvas id="myChart" wire:ignore style="width: 100%; height:400px"></canvas>
                </div>

                {{-- <div class="mb-4 mt-5">
                    <h5 class="font-weight-bold">Biểu đồ thống kê số lượng đơn hàng hoàn thành</h5>
                </div> --}}
                <div style="width:40%; margin-bottom: 20px;">
                    <canvas id="myChart2" wire:ignore style="width: 100%; height:400px"></canvas>
                </div>
            </div>
        </div>

    </div>
@endsection


@section('js')
    @php
        $labels = [];
        $data = [];
        foreach ($revenueData as $item) {
            $labels[] = \Carbon\Carbon::parse($item->month)->format('m/y');
            $data[] = $item->total_revenue;
        }

        $labels2 = [];
        $data2 = [];
        foreach ($caculateMonthlyOrder as $item) {
            $labels2[] = \Carbon\Carbon::parse($item->month)->format('m/y');
            $data2[] = $item->total_order;
        }
    @endphp
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: @json($labels),
                datasets: [{
                    label: 'Doanh thu',
                    data: @json($data),
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const ctx2 = document.getElementById('myChart2');

        new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: @json($labels2),
                datasets: [{
                    label: 'Số lượng đơn hàng',
                    data: @json($data2),
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
