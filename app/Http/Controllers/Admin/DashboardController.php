<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{
    function __construct()
    {
        $this->middleware(function($request, $next){
            session(['module_active' => 'dashboard']);
            return $next($request);
        });
    }

    function show(){
        $projectPath = base_path();
        $totalSize = round($this->calculateFolderSize($projectPath)/1024/1024);
        $totalProduct = $this->totalProduct();
        $totalCategory = $this->totalCategory();
        $revenueData = $this->calculateMonthlyRevenue();
        $caculateMonthlyOrder = $this->calculateMonthlyOrder();
        return view('admin.dashboard', compact('totalSize', 'totalProduct', 'totalCategory', 'revenueData', 'caculateMonthlyOrder'));
    }

    private function calculateFolderSize($path)
    {
        $totalSize = Cache::rememberForever('totalSize', function() use ($path) {
            $size = 0;
            foreach (File::allFiles($path) as $file) {
                $size += $file->getSize();
            }
            return $size;
        });
        return $totalSize;
    }
    private function totalProduct()
    {
        $totalProduct = Cache::rememberForever('totalProduct', function() {
            return Product::count();
        });
        return $totalProduct;
    }
    private function totalCategory()
    {
        $totalProduct = Cache::rememberForever('totalCategory', function() {
            return CategoryProduct::count();
        });
        return $totalProduct;
    }

    private function calculateMonthlyRevenue()
    {
        return Order::selectRaw("DATE_FORMAT(created_at, '%Y-%m') as month, SUM(total_price) as total_revenue")
            ->groupBy('month')
            ->orderBy('month', 'ASC')
            ->get();
    }

    // lấy dữ liệu từ bảng order để thống kê theo từng tháng mỗi tháng có bao nhiêu đơn hàng thành công
    // trong bangr orrder đơn hàng thành công có status = 2
    private function calculateMonthlyOrder()
    {
        return Order::selectRaw("DATE_FORMAT(created_at, '%Y-%m') as month, COUNT(id) as total_order")
            ->where('status', 2)
            ->groupBy('month')
            ->orderBy('month', 'ASC')
            ->get();
    }
}
