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

    // Home > Brands
    Breadcrumbs::for('brands.index', function ($trail) {
        $trail->parent('home');
        $trail->push('Бренды', route('brands.index'));
    });

        // Home > Brand
        Breadcrumbs::for('brands.show', function ($trail) {
            $trail->parent('home');
            $trail->push('Название бренда', route('brands.show'));
        });

    // Home > Actions
    Breadcrumbs::for('actions.index', function ($trail) {
        $trail->parent('home');
        $trail->push('Акции', route('actions.index'));
    });

        // Home > Action
        Breadcrumbs::for('actions.show', function ($trail) {
            $trail->parent('actions.index');
            $trail->push('Название акции', route('actions.show'));
        });

    // Home > Catalog
    Breadcrumbs::for('catalog.index', function ($trail, $category) {
        $trail->parent('home');
        $trail->push($category, route('catalog.index', ['path' => $category]));
    });
        // Home > Catalog > Favorite
        Breadcrumbs::for('catalog.favorite', function ($trail) {
            $trail->parent('home');
            $trail->push('Избранное', route('catalog.favorite'));
        });

        // Home > Catalog > Category {path}
        Breadcrumbs::for('catalog.category', function ($trail, $category) {
            $trail->parent('catalog.index');
            $trail->push($category, route('catalog.index', ['path' => $category]));
        });

            // Home > Catalog > Category {path} > Product
            Breadcrumbs::for('catalog.product', function ($trail, $product) {
                $trail->parent('catalog.index');
                $trail->push($product->title, route('catalog.product', ['slug' => $product->slug_product]));
            });




