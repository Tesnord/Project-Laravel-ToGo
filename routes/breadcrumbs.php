<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Главная', route('home'));
});

    // Home > Policy
    Breadcrumbs::for('policy', function ($trail) {
        $trail->parent('home');
        $trail->push('Политика конфиденциальности', route('policy'));
    });

    // Home > Basket
    Breadcrumbs::for('basket', function ($trail) {
        $trail->parent('home');
        $trail->push('Корзина', route('basket.index'));
    });

    // Home > Search
    Breadcrumbs::for('search', function ($trail) {
        $trail->parent('home');
        $trail->push('Результат поиска', route('catalog.search'));
    });

    // Home > Favorite
    Breadcrumbs::for('catalog.favorite', function ($trail) {
        $trail->parent('home');
        $trail->push('Избранное', route('catalog.favorite'));
    });

    // Home > Brands
    Breadcrumbs::for('brands.index', function ($trail) {
        $trail->parent('home');
        $trail->push('Бренды', route('brands.index'));
    });

        // Home > Brands > Brand
        Breadcrumbs::for('catalog.brand', function ($trail, $brand) {
            $trail->parent('brands.index');
            $trail->push($brand->name, route('catalog.brand', ['slug_brand' => $brand->slug_brand]));
        });

    // Home > Promotions
    Breadcrumbs::for('promotions.index', function ($trail) {
        $trail->parent('home');
        $trail->push('Акции', route('promotions.index'));
    });

        // Home > Promotions > Action
        Breadcrumbs::for('promotions.show', function ($trail, $promotion) {
            $trail->parent('promotions.index');
            $trail->push($promotion->name, route('promotions.show', $promotion));
        });

    // Home > Catalog
    Breadcrumbs::for('catalog.index', function ($trail, $category) {
        $trail->parent('home');
        $categories = $category->getBreadcrumbs();
        foreach ($categories as $cat) {
            $trail->push($cat['name'], route('catalog.index', ['path' => $cat['slug_category']]));
        }
    });

        // Home > Catalog > Category {path} > Product
        Breadcrumbs::for('catalog.product', function ($trail, $product) {
            $trail->parent('catalog.index');
            $trail->push($product->title, route('catalog.product', ['slug' => $product->slug_product]));
        });




