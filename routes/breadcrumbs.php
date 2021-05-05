<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Главная', route('home'));
});

// Home > Catalog
Breadcrumbs::for('catalog.index', function ($trail, $categories) {
    $trail->parent('home');
    $trail->push($categories->name, route('catalog.index', ['slug_category' => $categories->slug_categody]));
});

// Home > Catalog > Category
Breadcrumbs::for('catalog.category', function ($trail, $categories) {
    $trail->parent('catalog.index');
    $trail->push($categories->name, route('catalog.category', $categories));
});

// Home > Catalog > Category > Product
Breadcrumbs::for('catalog.product', function ($trail, $product) {
    $trail->parent('catalog.category');
    $trail->push($product->title, route('catalog.product', $product));
});
