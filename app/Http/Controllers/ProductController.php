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

        if ($category === null) {
            abort(404);
        }

        if ($category->getLevel() < 2) {
            $products = $category->qProductsRcsv()->get();
            return view('catalog.index', [
                'category' => $category,
                'sub_categories' => $category->children,
                'products' => $products,
            ]);
        } else {
            $products = $category->qProductsRcsv()->paginate(1);
            return view('catalog.category', [
                'category' => $category,
                'sub_categories' => $category->children,
                'products' => $products,
            ]);
        }
    }

    public function show($slug_product)
    {
        $product = Product::query()->where('slug_product', '=', $slug_product)->first();
        $offer = Product::query()->paginate(5);
        $properties_values = $product->properties_values;
        $price = $product->price->value;
        $currency = $product->price->currency->value;
        $reviews = $product->reviews;
        $availability = $product->availability;

        if ($reviews) {
            $rating = 0;
            $count = count($reviews);
            foreach ($reviews as $review) {
                $rating += $review['rating'];
            }
            if ($count > 0) {
                $rating = $rating / $count;
            } else {
                $rating = 0;
            }
        }

        if ($product === null) {
            abort(404);
        }

        return view('catalog.product', [
            'product' => $product,
            'reviews' => $reviews,
            'properties_values' => $properties_values,
            'price' => $price,
            'currency' => $currency,
            'count' => $count,
            'rating' => $rating,
            'availability' => $availability,
            'offer' => $offer,
        ]);
    }

    public function favorite()
    {
        try {
            MarketFavorites::getInstance();
            $q_favorites = Product::query()->find($GLOBALS['favorites'])->all();
            $offer = Product::query()->paginate(5);
        } catch (Exception $exception) {
            $q_favorites = [];
        }
        return view('catalog.favorite', array(
            'products' => $q_favorites,
            'offer' => $offer,
        ));
    }

    public function search(Request $request)
    {
        MarketFavorites::getInstance();
        $search = $request->input('query');
        $query = Product::search($search);
        $products = $query->paginate(100)->withQueryString();
        $offer = Product::query()->paginate(5);
        return view('catalog.search', [
            'products' => $products,
            'search' => $search,
            'offer' => $offer,
        ]);
    }
}

