<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Promotions;
use App\Utils\MarketBaskets;
use App\Utils\MarketFavorites;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index()
    {
        $brands = Brand::query()->paginate(3);

        return view('brands.index', [
            'brands' => $brands,
        ]);
    }

    public function show($slug_brand)
    {
        $brand = Brand::query()->where('slug_brand', '=', $slug_brand)->first();
        $products = $brand->products->toQuery()->paginate(1);
        return view('brands.item', [
            'brand' => $brand,
            'products' => $products,
        ]);
    }
}
