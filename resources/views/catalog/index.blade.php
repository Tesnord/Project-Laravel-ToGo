@extends('layouts.layout')

@section('content')

    <div class="breadcrumb-block">
        <div class="container">
{{--            {{ \DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render('catalog') }}--}}
        </div>
    </div>
    <div class="title-main">
        <div class="container">
            <div class="title-main__inner">

                <h1>{{ $categories->name }}</h1>
                <div class="title-main__numb">230 товаров</div>
            </div>
        </div>
    </div>
    @foreach($categories as $category)
        <div class="catalog-min">
            <div class="container">
                    <div class="catalog-min__top">
                        <div class="catalog-min__top-title">
                            <img src="{{ asset('/assets/images/svg/icon-catalog1.svg') }}" alt=''>
                            {{ $category->name }}
                        </div>
                        <a class="button button-all" href=""><span>смотреть</span> +75 еще</a>
                    </div>
                    <div class="row">
                        @foreach($category->products as $product)
                            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                                <div class="catalog__item catalog__item-bt">
                                    <div class="catalog__item-top">
                                        <a class="catalog__item-img" href="">
                                            <img src="{{ asset($product->preview_picture->src) }}" alt="">
                                        </a>
                                        <div class="catalog__item-fav">
                                            <svg><use xlink:href="#like"></use></svg>
                                        </div>
                                        <div class="catalog__item-label catalog__item-label-hit"><span>хит</span></div>
                                    </div>
                                    <div class="catalog__item-tx">
                                        <a class="catalog__item-title" href="">
                                            {{ $product->title }}
                                        </a>
                                        <div class="catalog__item-numb">{{ $product->weight }} г</div>
                                        <div class="catalog__item-bottom">
                                            <div class="catalog__item-info">
                                                <div class="catalog__item-price">
                                                    <div class="catalog__item-price-old">50 руб</div>
                                                    <div class="catalog__item-price-now">{{ $product->price->value }} {{ $product->price->currency->value }}</div>
                                                </div>
                                                <a class="catalog__item-buy" href="#">купить<img
                                                        src="{{ asset('/assets/images/svg/cart.svg') }}" alt=""></a>
                                            </div>
                                            <a class="catalog__item-offer" href="#">5 предложений</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>


@endsection
