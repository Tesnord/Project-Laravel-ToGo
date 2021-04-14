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
    public function category()
    {
        $products = Product::all();

        return view('catalog.category', array(
            'products' => $products,
        ));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        $product = Product::find($id);
        $properties_values = $product->properties_values;
        $price = $product->price->value;
        $currency = $product->price->currency->value;
        return view('catalog.card-product', array(
            'product' => $product,
            'properties_values' => $properties_values,
            'price' => $price,
            'currency' => $currency,
        ));

    }
}
