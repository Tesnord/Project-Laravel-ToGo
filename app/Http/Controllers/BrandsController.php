<?php

namespace App\Http\Controllers;

use App\Utils\MarketFavorites;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index()
    {
        MarketFavorites::getInstance();
        return view('brands.index');
    }

    public function show()
    {
        MarketFavorites::getInstance();
        return view('brands.item');
    }
}
