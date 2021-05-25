<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use App\Utils\MarketFavorites;

class ProductController extends Controller
{
    public function index(string $path = '/')
    {
        MarketFavorites::getInstance();
        $category = Category::getByPath($path);
        // dd(Category::getPath());
        // dd($category->getBreadcrumbs());

        if ($category->getLevel() < 2) {
            return view('catalog.index', [
                'category' => $category,
                'sub_categories' => $category->children,
                'products' => $category->getProductsRcsv(),
                'breadcrumbs' => $category->getBreadcrumbs(),
            ]);
        } else {
            return view('catalog.category', [
                'category' => $category,
                'sub_categories' => $category->children,
                'products' => $category->getProductsRcsv(),
                'breadcrumbs' => $category->getBreadcrumbs(),
            ]);
        }
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

    //{"favorites":[1,2,3,4]}    -  %7B%22favorites%22%3A%5B1%2C2%2C3%2C4%5D%7D
    //{"favorites":[]}           -  %7B%22favorites%22%3A%5B%5D%7D
    public function favorite()
    {
        try {
            /*$cookie_market_favorites = $_COOKIE["market_favorites"];
            $cookie_market_favorites_obj = json_decode($cookie_market_favorites);
            $favorites = $cookie_market_favorites_obj->favorites;*/
            MarketFavorites::getInstance();
            $q_favorites = Product::query()->find($GLOBALS['favorites'])->all();
        } catch (Exception $exception) {
            $q_favorites = [];
        }
        return view('catalog.favorite', array(
            "products" => $q_favorites
        ));
    }

    public function search(Request $request)
    {
        $search = $request->input('query');
        $query = Product::search($search);
        $products = $query->paginate(100)->withQueryString();
        return view('catalog.search', [
            'products' => $products,
            'search' => $search,
        ]);
    }
}

