<?php

namespace App\Http\Controllers;

use App\Filters\ProductFilter;
use App\Models\Brand;
use App\Models\Letter;
use Illuminate\Http\Request;


class BrandsController extends Controller
{
    public function index()
    {
        $letters = Letter::query()->get();
        $allBrand = Brand::query()->get();

        $brands = Brand::all()
            ->groupBy(function ($item) {
                $str = str_replace(['"'], '', $item->name);
                $i = mb_strtoupper(mb_substr($str, 0, 1));
                return $i;
            })
            ->map(function ($items) {
                return $items->take(15);
            })
            ->sortBy(function ($object, $key) {
                return $key;
            });

        return view('brands.index', [
            'brands' => $brands,
            'allBrand' => $allBrand,
            'letters' => $letters,
        ]);
    }

    public function show($value)
    {
        $letter = Letter::query()->where('value', '=', $value)->first();
        $letters = Letter::query()->get();

        $brands = Brand::all()
            ->groupBy(function ($item) {
                $str = str_replace(['"'], '', $item->name);
                $i = mb_strtoupper(mb_substr($str, 0, 1));
                return $i;
            })
            ->sortBy(function ($object, $key) {
                return $key;
            });

        foreach ($brands as $key => $value) {
            if ($letter->letter == $key) {
                // dd($value);
                return view('brands.show', [
                    // Все буквы
                    'letters' => $letters,
                    // Буква страницы
                    'letterBrand' => $key,
                    // Бренды буквы
                    'brands' => $value,
                ]);
            }
        }
    }

    public function catalog($slug_brand)
    {
        $brand = Brand::query()->where('slug_brand', '=', $slug_brand)->first();
        $products = $brand->products->toQuery()->paginate(1);
        return view('catalog.brand', [
            'brand' => $brand,
            'products' => $products,
        ]);
    }
}
