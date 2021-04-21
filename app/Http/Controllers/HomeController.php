<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all()->toArray();
        $menu_categories = Category::all()->toArray();
        return view('home', [
            'menu_categories' => $menu_categories,
            'products' => $products,
        ]);
    }
}
