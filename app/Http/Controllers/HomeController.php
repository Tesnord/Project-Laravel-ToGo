<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use App\Utils\MarketBaskets;
use Illuminate\Http\Request;
use App\Utils\MarketFavorites;

class HomeController extends Controller
{
    public function index()
    {
        $menu_categories = Category::query()
            ->where('parent_id', 0)
            ->get();
        $categories = Category::query()
            ->where('parent_id', 0)
            ->paginate(7);
        $banners = Banner::all()
            ->sortByDesc(function ($object, $key) {
                return $key;
            })
            ->groupBy(function ($item) {
                $i = $item->min;
                return $i;
            })
        ;

        return view('home', [
            'menu_categories' => $menu_categories,
            'categories' => $categories,
            'banners' => $banners,
        ]);
    }

    public function policy()
    {
        return view('policy');
    }

    public function public()
    {
        return view('public');
    }

    public function scores()
    {
        return view('scores');
    }

    public function provider()
    {
        return view('provider');
    }

    public function about()
    {
        return view('about');
    }

    public function delivery()
    {
        return view('delivery');
    }

    public function subscribeIndex()
    {
        return view('subscribe.index');
    }

    public function subscribeShow()
    {
        return view('subscribe.show');
    }
}
