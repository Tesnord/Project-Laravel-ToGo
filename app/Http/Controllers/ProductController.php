<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($slug_category)
    {
        $categories = Category::query()
            ->where('slug_category', $slug_category)
            ->get();

        return view('catalog.index', [
            'categories' => $categories,
        ]);
    }

    public function category($slug_category)
    {
        $categories = Category::query()
            ->where('slug_category', $slug_category)
            ->get();
        $products = Product::where('category_id');

        return view('catalog.category', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }

    public function brand()
    {
        return view('catalog.brand');
    }

    public function show($slug_product)
    {
        $product = Product::query()->where('slug_product', '=', $slug_product)->first();
        $properties_values = $product->properties_values;
        $price = $product->price->value;
        $currency = $product->price->currency->value;
        $reviews = $product->reviews;


        return view('catalog.card-product', [
            'product' => $product,
            'reviews' => $reviews,
            'properties_values' => $properties_values,
            'price' => $price,
            'currency' => $currency,
        ]);
    }

    public function favorite()
    {
        $cookie_market_favorites = $_COOKIE["market_favorites"];
        $cookie_market_favorites_obj = json_decode($cookie_market_favorites);
        $favorites = $cookie_market_favorites_obj->favorites;

        $q_favorites = Product::query()->find($favorites)->all();

        return view('catalog.favorite', array(
            "products" => $q_favorites
        ));
    }


    public function search(Request $request)
    {
        $search = $request->input('query');
        $query = Product::search($search);
        $products = $query->paginate(6)->withQueryString();
        return view('catalog.search', [
            'products' => $products,
            'search' => $search,
        ]);
    }
}
