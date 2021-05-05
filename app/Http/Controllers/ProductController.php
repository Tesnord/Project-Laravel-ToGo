<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index($slug_category)
    {
        $categories = Category::query()
            ->where('slug_category', $slug_category)
            ->get();

        // foreach ($categories as &$category) {
        //     $category->
        // }

        return view('catalog.index', [
            'categories' => $categories,
            // 'counts' => $counts,
        ]);
    }

    public function category($slug_category)
    {
        $categories = Category::where('slug_category', $slug_category)->get();
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

    public function review()
    {

    }

    /*public function search(Request $request)
    {
        $search = $request->input('query');
        $query = Product::search($search);
        $products = $query->withQueryString();
        return view('catalog.search', [
            'products' => $products,
            'search' => $search,
        ]);
    }*/

    public function search()
    {
        return view('catalog.search');
    }
}
