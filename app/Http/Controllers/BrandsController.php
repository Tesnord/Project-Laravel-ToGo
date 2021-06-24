<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\CatalogBrand;
use App\Models\Promotions;
use App\Utils\MarketBaskets;
use App\Utils\MarketFavorites;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index(Request $request)
    {
        $en = array(
            'A' => 'A',
            'B' => 'B',
            'C' => 'C',
            'D' => 'D',
            'E' => 'E',
            'F' => 'F',
            'G' => 'G',
            'H' => 'H',
            'I' => 'I',
            'J' => 'J',
            'K' => 'K',
            'L' => 'L',
            'M' => 'M',
            'N' => 'N',
            'O' => 'O',
            'P' => 'P',
            'Q' => 'Q',
            'R' => 'R',
            'S' => 'S',
            'T' => 'T',
            'U' => 'U',
            'V' => 'V',
            'W' => 'W',
            'X' => 'X',
            'Y' => 'Y',
            'Z' => 'Z'
        );

        $ru = array(
            'А' => 'A',
            'Б' => 'B',
            'В' => 'V',
            'Г' => 'G',
            'Д' => 'D',
            'Е' => 'E',
            'Ё' => 'IE',
            'Ж' => 'ZH',
            'З' => 'Z',
            'И' => 'I',
            'Й' => 'Y',
            'К' => 'K',
            'Л' => 'L',
            'М' => 'M',
            'Н' => 'N',
            'О' => 'O',
            'П' => 'P',
            'Р' => 'R',
            'С' => 'S',
            'Т' => 'T',
            'У' => 'U',
            'Ф' => 'F',
            'Х' => 'H',
            'Ц' => 'TS',
            'Ч' => 'CH',
            'Ш' => 'SH',
            'Щ' => 'SHCH',
            'Ъ' => 'THD',
            'Ы' => 'IY',
            'Ь' => 'TSF',
            'Э' => 'EE',
            'Ю' => 'YU',
            'Я' => 'YA'
        );

        $brands = CatalogBrand::all()
            ->groupBy(function($item) {
                $str = str_replace(['"'], '', $item->name);
                $i = mb_strtoupper(mb_substr($str, 0, 1));
                return $i;
            })
            ->map(function($items) {
                return $items->take(15);
            })
            ->sortBy(function ($object, $key) {
                return $key;
            })
        ;

        if (isset($request->orderBy)) {
            if ($request->orderBy == 'en-{{$row}}') {
                $brands = $brands->orderBy('en');
            }
            if ($request->orderBy == 'ru-{{$row}}') {
                $brands = $brands->orderBy('ru');
            }
            if ($request->orderBy == '{{$row}}') {
                $brands = $brands->orderBy('number');
            }
        }

        if ($request->ajax()) {
            return view('layouts.brands.filter', [
                'brands' => $brands,
            ])->render();
        }

        return view('brands.index', [
            'brands' => $brands,
            'en' => $en,
            'ru' => $ru,
        ]);
    }

    // public function show($slug_brand)
    // {
    //     $brand = Brand::query()->where('slug_brand', '=', $slug_brand)->first();
    //     $products = $brand->products->toQuery()->paginate(1);
    //     return view('brands.item', [
    //         'brand' => $brand,
    //         'products' => $products,
    //     ]);
    // }
}
