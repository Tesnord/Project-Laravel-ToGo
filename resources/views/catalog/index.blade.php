@extends('layouts.layout')

@section('content')
    @foreach($categories as $category)
    <div class="breadcrumb-block">
        <div class="container">
            {{--{{ \DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render('catalog.index', ['slug_category' => $category->slug_category]) }}--}}
        </div>
    </div>
        <div class="title-main">
            <div class="container">
                <div class="title-main__inner">
                    <h1>{{ $category->name }}</h1>
                    <div class="title-main__numb">{{ $category->getProductsCountRcsv() }}</div>
                </div>
            </div>
        </div>
            @foreach($category->children as $sub_category)
            <div class="catalog-min">
                <div class="container">
                    <div class="catalog-min__top">
                        <div class="catalog-min__top-title">
                            <img src="{{ asset('/assets/images/svg/icon-catalog1.svg') }}" alt=''>
                            {{ $sub_category->name }}
                        </div>
                        <a class="button button-all" href="{{ route('catalog.category', ['slug_category' => $sub_category->slug_category]) }}"><span>смотреть</span> +75 еще</a>
                    </div>
                    <div class="row">
                        @foreach($sub_category->products as $product)
                            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                                <div class="catalog__item catalog__item-bt">
                                    <div class="catalog__item-top">
                                        <a class="catalog__item-img" href="{{ route('catalog.product', ['slug_product' => $product->slug_product]) }}">
                                            <img src="{{ asset($product->preview_picture->src) }}" alt="">
                                        </a>
                                        <div class="catalog__item-fav">
                                            <svg><use xlink:href="#like"></use></svg>
                                        </div>
                                        <div class="catalog__item-label catalog__item-label-hit"><span>хит</span></div>
                                    </div>
                                    <div class="catalog__item-tx">
                                        <a class="catalog__item-title" href="{{ route('catalog.product', ['slug_product' => $product->slug_product]) }}">
                                            {{ $product->title }}
                                        </a>
                                        <div class="catalog__item-numb">{{ $product->weight }} г</div>
                                        <div class="catalog__item-bottom">
                                            <div class="catalog__item-info">
                                                <div class="catalog__item-price">
                                                    <div class="catalog__item-price-old"></div>
                                                    <div
                                                        class="catalog__item-price-now">{{ $product->price->value }} {{ $product->price->currency->value }}</div>
                                                </div>
                                                <form action="{{ route('basket.add', ['id' => $product->id]) }}"
                                                      method="post" class="form-inline">
                                                    <button class="button button-primary">купить<img
                                                            src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></button>
                                                    @csrf
                                                </form>

                                            </div>
                                            <a class="catalog__item-offer" href="#">5 предложений</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
    @endforeach

@endsection
