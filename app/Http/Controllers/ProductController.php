<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $categories = Category::all();
        return view('catalog.index', array(
            'categories' => $categories,
        ));
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function category($slug_category)
    {
        $categories = Category::where('slug_category', $slug_category);
        $products = Product::all();

        return view('catalog.category', array(
            'products' => $products,
            'categories' => $categories,
        ));
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function brand()
    {
        return view('catalog.brand');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($slug_category, $slug_product)
    {
        $product = Product::query()->where('slug_product', '=', $slug_product)->first();
        $properties_values = $product->properties_values;
        $price = $product->price->value;
        $currency = $product->price->currency->value;

        $menu_categories = Category::all()->toArray();

        return view('catalog.card-product', array(
            'product' => $product,
            'properties_values' => $properties_values,
            'price' => $price,
            'currency' => $currency,
            'menu_categories' => $menu_categories,
        ));

    }
}
