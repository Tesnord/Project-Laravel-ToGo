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
Breadcrumbs::for('category', function ($trail) {
    $trail->parent('catalog');
    $trail->push('Категория', url('/catalog/category'));
});

// Home > Catalog > Category > Product
Breadcrumbs::for('product', function ($trail, $product) {
    $trail->parent('category');
    $trail->push($product->title, route('product', $product));
});
