<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Главная', url('/'));
});

// Home > Catalog
Breadcrumbs::for('catalog', function ($trail) {
    $trail->parent('home');
    $trail->push('Каталог', url('/catalog'));
});

// Home > Catalog > Category
Breadcrumbs::for('category', function ($trail, $categories) {
    $trail->parent('catalog');
    $trail->push($categories->name, route('category', $categories));
});

// Home > Catalog > Category > Product
Breadcrumbs::for('product', function ($trail, $product) {
    $trail->parent('category');
    $trail->push($product->title, route('product', $product));
});
