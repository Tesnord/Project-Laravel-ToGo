<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $menu_categories = Category::query()
            ->where('parent_id', 0)
            ->get();

        return view('home', [
            'menu_categories' => $menu_categories,
        ]);
    }

    public function policy()
    {
        return view('policy');
    }
}
