<?php

namespace App\Http\Controllers;

use App\Utils\MarketFavorites;
use Illuminate\Http\Request;

class ActionsController extends Controller
{
    public function index()
    {
        MarketFavorites::getInstance();
        return view('actions.index');
    }

    public function show()
    {
        MarketFavorites::getInstance();
        return view('actions.item');
    }
}
