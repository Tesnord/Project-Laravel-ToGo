<?php

namespace App\Http\Controllers;

use App\Models\Promotions;
use App\Utils\MarketFavorites;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PromotionsController extends Controller
{
    public function index()
    {
        MarketFavorites::getInstance();
        $promotions = Promotions::query()->paginate(3);


        foreach ($promotions as $promotion) {
            $start = Carbon::create($promotion->start)->formatLocalized('%d %B');
            $finish = Carbon::create($promotion->finish)->formatLocalized('%d %B') ;
            $brand = $promotion->brand;
        }
        return view('promotions.index', [
            'promotions' => $promotions,
            'start' => $start,
            'finish' => $finish,
            'brand' => $brand,
        ]);
    }

    public function show($slug_promotion)
    {
        MarketFavorites::getInstance();
        $promotion = Promotions::query()->where('slug_promotion', '=', $slug_promotion)->first();
        $start = date('d F', strtotime($promotion->start));
        $finish = date('d F', strtotime($promotion->finish));
        $products = $promotion->products->toQuery()->paginate(1);
        $brand = $promotion->brand;

        return view('promotions.item', [
            'promotion' => $promotion,
            'start' => $start,
            'finish' => $finish,
            'products' => $products,
            'brand' => $brand,
        ]);
    }
}
