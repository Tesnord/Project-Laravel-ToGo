<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Utils\MarketBaskets;
use League\Flysystem\Exception;

class BasketController extends Controller
{

    public function index()
    {
        global $basket;

        $basketInst = MarketBaskets::getInstance();
        $basketProducts = $basketInst->getBasketProducts();
        $offer = Product::query()->paginate(5);

        return view('basket.index', array(
            'products' => $basketProducts,
            'offer' => $offer,
            'basket' => $basket,
        ));
    }

    /**
     * Форма оформления заказа
     */
    public function checkout()
    {
        return view('basket.checkout');
    }
}
