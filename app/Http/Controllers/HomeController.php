<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Utils\MarketFavorites;

class HomeController extends Controller
{
    public function index()
    {
        MarketFavorites::getInstance();
        $menu_categories = Category::query()
            ->where('parent_id', 0)
            ->get();

        return view('home', [
            'menu_categories' => $menu_categories,
        ]);
    }

    public function policy()
    {
        MarketFavorites::getInstance();
        return view('policy');
    }
}
