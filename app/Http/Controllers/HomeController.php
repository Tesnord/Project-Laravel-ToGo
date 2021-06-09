<?php

namespace App\Http\Controllers;

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

        return view('home', [
            'menu_categories' => $menu_categories,
            'categories' => $categories,
        ]);
    }

    public function policy()
    {
        return view('policy');
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
