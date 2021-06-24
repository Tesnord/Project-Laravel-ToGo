@extends('layouts.layout')

@section('content')

    <div class="breadcrumb-block">
        <div class="container">
            {{ \DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render('basket') }}
        </div>
    </div>
    @if(count($products))
    <div class="title-main">
        <div class="container">
            <div class="title-main__inner">
                <h1>Корзина</h1>
                <div class="title-main__numb">{{ count($basket) }} товара</div>
            </div>
        </div>
    </div>
{{--    {{ dd($baskets) }}--}}
    <div class="cart">
        <div class="container">
            <div class="cart__inner">
                <div class="cart__list">
                    @foreach($products as $product)
                        <div class="cart__list-item" data-product-id="{{ $product->id }}">
                            <div class="cart__list-descr">
                                @if($product->preview_picture !== null)
                                    <div class="cart__list-img"
                                         style="background-image: url('{{ asset($product->preview_picture->src) }}')"></div>
                                @else
                                    <div class="cart__list-img"
                                         style="background-image: url('{{ asset('/assets/images/svg/logo.svg') }}')"></div>
                                @endif
                                <a class="cart__list-title" href="{{ route('catalog.product', [
                                                                        'slug_product' => $product->slug_product
                                                                        ]) }}">{{ $product->title }}</a>
                                <div class="cart__list-article">Артикул: {{ $product->vendor_code }}</div>
                            </div>
                            <div class="cart__list-numb cart__list-numb-tw">
                                <div class="cart__list-price">
                                    <div class="cart__list-price-now">{{ $product->price->value }} {{ $product->price->currency->value }}</div>
                                </div>
                                <div class="cart__list-numb-tx">Цена за 1 шт</div>
                            </div>

                            <div class="cart__list-amount">
                                <div class="catalog__item-amount" data-product-id="{{ $product->id }}">
                                    <input type="text" min="1" max="20" value="{{$product->quantityInBasket}}">
                                    <span class="up">
                                        <img src="{{ asset('assets/images/svg/plus.svg') }}" alt="">
                                    </span>
                                    <span class="down">
                                        <img src="{{ asset('assets/images/svg/minus.svg') }}" alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="cart__list-numb">
                                <div class="cart__list-price">
                                    <div class="cart__list-price-now">242 {{ $product->price->currency->value }}</div>
                                </div>
                            </div>
                            <div class="cart__list-delete">
                                <svg>
                                    <use xlink:href="#delete"></use>
                                </svg>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="cart__list-all">
                    <div class="cart__list-descr">
                        <div class="cart__list-all-title">Введите промокод</div>
                        <div class="cart__list-promo">
                            <input type="text">
                            <button class="cart__list-promo-btn">
                                <img src="{{ asset('assets/images/svg/arrow3.svg') }}" alt="">
                            </button>
                        </div>
                        <div class="cart__list-promo-done">Промокод применен</div>
                    </div>
                    <div class="cart__list-all-tx">
                        <div class="cart__list-all-tx-title">Итого:</div>
                        <div class="cart__list-all-tx-text">Общий вес: 0.4 кг</div>
                    </div>
                    <div class="cart__list-all-price">
                        <div class="cart__list-price">
                            <div class="cart__list-price-now">121 {{ $product->price->currency->value }}</div>
                        </div>
                    </div>
                    <div class="cart__list-all-btn"><a class="button button-secondary" href="#">оформить заказ</a></div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="tx">
        <div class="container">
            <div class="tx__inner">
                <div class="tx__img"><img src="{{ asset('assets/images/svg/img1.svg')}}" alt=""></div>
                <div class="tx__text">
                    <div class="tx__title">В корзине пока нет товаров</div>
                    <p>Перейдите в каталог, посмотрите скидки или <br>воспользуйтесь поиском, чтобы найти нужный товар.
                    </p><a class="button button-secondary" href="{{ route('home') }}">начать покупки</a>
                </div>
            </div>
        </div>
    </div>
    @endif
    @include('layouts.catalog.catalog-min')
@endsection
