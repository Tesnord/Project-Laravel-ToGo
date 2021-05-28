<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Utils\MarketFavorites;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index()
    {
        MarketFavorites::getInstance();
        $brands = Brand::query();

        return view('brands.index', [
            'brands' => $brands,
        ]);
    }

    public function show()
    {
        MarketFavorites::getInstance();
        $brand = Brand::query();

        return view('brands.item');
    }
}
