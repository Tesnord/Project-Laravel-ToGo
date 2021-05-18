@extends('layouts.layout')

@section('content')

    <div class="breadcrumb-block">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Главная</a></li>
                <li class="breadcrumb-item active">Результаты поиска</li>
            </ol>
        </div>
    </div>
    @if(count($products))
    <div class="title-main">
        <div class="container">
            <div class="title-main__inner">
                <h1>Результаты поиска</h1>
            </div>
        </div>
    </div>
    <div class="subscription-tx">
        <div class="container">
            <div class="subscription-tx__inner">
                <p>Результаты поиска по запросу «{{ $search ?? 'пусто' }}»</p>
            </div>
        </div>
    </div>
    <div class="catalog">
        <div class="container">
            <div class="catalog__inner">
                <div class="catalog__list">

                        <div class="row">
                            @foreach($products as $product)
                                @include('layouts.catalog.product')
                                {{--<div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                                    <div class="catalog__item">
                                        <div class="catalog__item-top">
                                            <a class="catalog__item-img"
                                               href="{{ route('catalog.product', ['slug_product' => $product->slug_product]) }}">
                                                @if($product->preview_picture !== null)
                                                    <img
                                                        src="{{ $product->preview_picture->src }}"
                                                        alt="">
                                                @else
                                                    <img
                                                        src="/assets/images/svg/logo.svg"
                                                        alt="">
                                                @endif
                                            </a>
                                            <div class="catalog__item-fav">
                                                <svg>
                                                    <use xlink:href="#like"></use>
                                                </svg>
                                            </div>
                                            <div class="catalog__item-label catalog__item-label-hit">
                                                <span>хит</span>
                                            </div>
                                        </div>
                                        <div class="catalog__item-tx">
                                            <a class="catalog__item-title"
                                               href="{{ route('catalog.product', ['slug_product' => $product->slug_product]) }}">{{ $product->title }}</a>
                                            <div class="catalog__item-numb">1 шт ({{ $product->weight }} г)</div>
                                            <div class="catalog__item-bottom">
                                                <div class="catalog__item-info">
                                                    <div class="catalog__item-price">
                                                        <div class="catalog__item-price-old">50 руб</div>
                                                        <div
                                                            class="catalog__item-price-now">{{ $product->price->value }} {{ $product->price->currency->value }}</div>
                                                    </div>
                                                    <form action="{{ route('basket.add', ['id' => $product->id]) }}"
                                                          method="post" class="form-inline">
                                                        <button class="button button-primary">купить<img
                                                                src="{{ asset('assets/images/svg/cart.svg') }}" alt="">
                                                        </button>
                                                        @csrf
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>--}}
                            @endforeach
                            @else
                                <div class="tx">
                                    <div class="container">
                                        <div class="tx__inner">
                                            <div class="tx__img"><img src="{{ asset('assets/images/svg/img3.svg') }}" alt=""></div>
                                            <div class="tx__text">
                                                <div class="tx__title">Товар не найден</div>
                                                <p>Простите, по вашему запросу товаров сейчас нет</p><a
                                                    class="button button-secondary" href="{{ route('home') }}">вернуться на главную</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @include('layouts.catalog-min')
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
