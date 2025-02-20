<?php
namespace App\Services;

use App\Models\Brand;
use App\Models\CategoryProduct;
use App\Models\Option;
use App\Models\Product;
use App\Models\Slider;

class ProxyService
{
    public function __construct()
    {
        //
    }

    public function getOptionByKey($key)
    {
        $option = Option::where('key', $key)->first();
        if ($option) {
            $option = $option->value;
        }
        return $option;
    }

    public function getProducts($limit = -1, $orderBy = 'desc', $isHot = false)
    {
        $query = Product::query();
        if ($limit > 0) {
            $query->limit($limit);
        }
        if ($isHot) {
            $query->where('hot', 1);
        }
        return $query->orderBy('created_at', $orderBy)->get();
    }

    public function getSlide()
    {
        return Slider::get();
    }

    public function getCategory($nested = false, $withProduct = false)
    {
        $query = CategoryProduct::query();
        if ($nested) {
            $query->with(['children'])->where('id_parent', 0);
        }
        if ($withProduct) {
            $query->with(['products']);
        }
        return $query->get();
    }

    public function getCategoryBySlug($slug)
    {
        return CategoryProduct::where('slug', $slug)->firstOrFail();
    }

    public function getProductPaginate($catId = null, $limit = -1, $orderBy = null, $keyWord = "")
    {
        $query = Product::query();
        if (strlen($keyWord) > 0) {
            $query->where('name', 'like', '%' . $keyWord . '%');
        }
        if ($catId != null) {
            $query->whereIn('cat_id', $catId);
        }
        if ($orderBy != null) {
            $query->orderBy($orderBy['condition'], $orderBy['value']);
        }

        return $query->paginate($limit);
    }

    public function getProductBySlug($slug)
    {
        return Product::where('slug', $slug)->firstOrFail();
    }

    public function getBrands()
    {
        return Brand::get();
    }

    public function getAllShoppingCart()
    {
        return session('cart');
    }


}
