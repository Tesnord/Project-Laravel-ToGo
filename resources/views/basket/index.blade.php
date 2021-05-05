@extends('layouts.layout')

@section('content')



    <div class="breadcrumb-block">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Главная</a></li>
                <li class="breadcrumb-item active">Корзина</li>
            </ol>
        </div>
    </div>
    <div class="title-main">
        <div class="container">
            <div class="title-main__inner">
                <h1>Корзина</h1>
                <div class="title-main__numb">2 товара</div>
            </div>
        </div>
    </div>
    <div class="cart">
        <div class="container">
            <div class="cart__inner">
                <div class="cart__list">

                    @if (count($products))
                        @php
                            $basketCost = 0;
                        @endphp
                        @foreach($products as $product)
                            @php
                                $itemPrice = $product->price->value;
                                $currency = $product->price->currency->value;
                                $itemQuantity =  $product->pivot->quantity;
                                $itemCost = $itemPrice * $itemQuantity;
                                $basketCost = $basketCost + $itemCost;
                            @endphp
                            <div class="cart__list-item">
                                <div class="cart__list-descr">
                                    <div class="cart__list-img"
                                         style="background-image: url({{ $product->preview_picture->src }})"></div>
                                    <a class="cart__list-title"
                                       href="{{ route('catalog.product', [$product->slug_product]) }}">{{ $product->title }}</a>
                                    <div class="cart__list-article">Артикул: {{ $product->vendor_code }}</div>
                                </div>
                                <div class="cart__list-numb cart__list-numb-tw">
                                    <div class="cart__list-price">
                                        <div
                                            class="cart__list-price-now">{{ number_format($itemPrice, 2, '.', '') }} {{ $currency }}</div>
                                        <div class="cart__list-price-old">145 ₽</div>
                                    </div>
                                    <div class="cart__list-numb-tx">Цена за 1 шт</div>
                                </div>
                                <div class="cart__list-amount">
                                    <div class="catalog__item-amount">
                                        <input type="text" value="{{ $itemQuantity }}">
                                        <form action="{{ route('basket.quantity', ['id' => $product->id]) }}" method="post" class="d-inline">
                                            @csrf
                                            <span class="up">
                                                <img src="{{asset('assets/images/svg/plus.svg')}}" alt="">
                                            </span>
                                        </form>
                                        <form action="{{--{{ route('basket.minus', ['id' => $product->id]) }}--}}" method="post" class="d-inline">
                                            @csrf
                                            <span class="down">
                                                <img src="{{asset('assets/images/svg/minus.svg')}}" alt="">
                                            </span>
                                        </form>
                                    </div>
                                </div>
                                <div class="cart__list-numb">
                                    <div class="cart__list-price">
                                        <div
                                            class="cart__list-price-now">{{ number_format($itemCost, 2, '.', '') }} {{ $currency }}</div>
                                    </div>
                                    <div class="cart__list-numb-tx">Экономия 300 ₽</div>
                                </div>
                                <div class="cart__list-delete">
                                    <svg>
                                        <use xlink:href="#delete">
                                            <form action="{{--{{ route('basket.remove', ['id' => $product->id]) }}--}}" method="post">
                                                @csrf
                                                <button type="submit" class="m-0 p-0 border-0 bg-transparent">
                                                    <i class="fas fa-trash-alt text-danger"></i>
                                                </button>
                                            </form>
                                        </use>
                                    </svg>
                                </div>
                            </div>

                        @endforeach
                        <div class="cart__list-all">
                            <div class="cart__list-descr">
                                <div class="cart__list-all-title">Промокод применен</div>
                                <div class="cart__list-promo">
                                    <input type="text">
                                    <button class="cart__list-promo-btn"><img
                                            src="{{asset('assets/images/svg/arrow3.svg')}}" alt="">
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
                                    <div
                                        class="cart__list-price-now">{{ number_format($basketCost, 2, '.', '') }} {{ $currency }}</div>
                                    <div class="cart__list-price-old">145 ₽</div>
                                </div>
                            </div>
                            <div class="cart__list-all-btn"><a class="button button-secondary" href="#">оформить
                                    заказ</a>
                            </div>
                        </div>
                    @else
                        <div class="tx">
                            <div class="container">
                                <div class="tx__inner">
                                    <div class="tx__img"><img src="{{ asset('assets/images/svg/img1.svg') }}" alt=""></div>
                                    <div class="tx__text">
                                        <div class="tx__title">В корзине пока нет товаров</div>
                                        <p>Перейдите в каталог, посмотрите скидки или <br>воспользуйтесь поиском, чтобы найти нужный товар.</p>
                                        <a class="button button-secondary" href="{{ route('home') }}">начать покупки</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="cart-banner">
            <div class="container">
                <div class="cart-banner__inner">
                    <div class="cart-banner__img"><img src="{{asset('assets/images/cart-banner1.png')}}" alt=""></div>
                    <div class="cart-banner__tx">
                        <div class="cart-banner__title">Бесплатные товары по подписке</div>
                        <div class="cart-banner__label">Выгода</div>
                        <a class="cart-banner__btn" href="#">Бесплатно получайте товары из любимых категорий по подписке<img
                                src="{{asset('assets/images/svg/arrow5.svg')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="catalog-min catalog-min-tw">
            <div class="container">
                <h3>Возможно вас заинтересует</h3>
                <div class="row">
                    <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                        <div class="catalog__item catalog__item-bt">
                            <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img
                                        src="{{asset('assets/images/catalog-img17.jpg')}}" alt=""></a>
                                <div class="catalog__item-fav">
                                    <svg>
                                        <use xlink:href="#like"></use>
                                    </svg>
                                </div>
                                <div class="catalog__item-label catalog__item-label-hit"><span>хит</span></div>
                            </div>
                            <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Подарочный набор «Дари
                                    тепло»</a>
                                <div class="catalog__item-numb">12 товаров</div>
                                <div class="catalog__item-bottom">
                                    <div class="catalog__item-info">
                                        <div class="catalog__item-price">
                                            <div class="catalog__item-price-old">50 руб</div>
                                            <div class="catalog__item-price-now">2200 ₽</div>
                                        </div>
                                        <a class="catalog__item-buy" href="#">купить<img
                                                src="{{asset('assets/images/svg/cart.svg')}}"
                                                alt=""></a>
                                    </div>
                                    <a class="catalog__item-offer" href="#">5 предложений</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                        <div class="catalog__item catalog__item-bt">
                            <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img
                                        src="{{asset('assets/images/catalog-img18.jpg')}}" alt=""></a>
                                <div class="catalog__item-fav">
                                    <svg>
                                        <use xlink:href="#like"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Подарочный набор
                                    «Порция
                                    счастья»</a>
                                <div class="catalog__item-numb">5 товаров</div>
                                <div class="catalog__item-bottom">
                                    <div class="catalog__item-info">
                                        <div class="catalog__item-price">
                                            <div class="catalog__item-price-now">1305 ₽</div>
                                        </div>
                                        <div class="catalog__item-amount">
                                            <input type="text" value="1"><span class="up"><img
                                                    src="{{asset('assets/images/svg/plus.svg')}}" alt=""></span><span
                                                class="down"><img
                                                    src="{{asset('assets/images/svg/minus.svg')}}" alt=""></span>
                                        </div>
                                    </div>
                                    <a class="catalog__item-offer" href="#">5 предложений</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                        <div class="catalog__item catalog__item-bt">
                            <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img
                                        src="{{asset('assets/images/catalog-img19.jpg')}}" alt=""></a>
                                <div class="catalog__item-fav">
                                    <svg>
                                        <use xlink:href="#like"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Подарочный набор
                                    «Любимым
                                    родителям»</a>
                                <div class="catalog__item-numb">12 товаров</div>
                                <div class="catalog__item-bottom">
                                    <div class="catalog__item-info">
                                        <div class="catalog__item-price">
                                            <div class="catalog__item-price-old">50 ₽</div>
                                            <div class="catalog__item-price-now">1500 ₽</div>
                                        </div>
                                        <a class="catalog__item-buy" href="#">купить<img
                                                src="{{asset('assets/images/svg/cart.svg')}}"
                                                alt=""></a>
                                    </div>
                                    <a class="catalog__item-offer" href="#">5 предложений</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                        <div class="catalog__item catalog__item-bt">
                            <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img
                                        src="{{asset('assets/images/catalog-img20.jpg')}}" alt=""></a>
                                <div class="catalog__item-fav">
                                    <svg>
                                        <use xlink:href="#like"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Подарочный набор
                                    «Чудо»</a>
                                <div class="catalog__item-numb">12 товаров</div>
                                <div class="catalog__item-bottom">
                                    <div class="catalog__item-info">
                                        <div class="catalog__item-price">
                                            <div class="catalog__item-price-old">50 ₽</div>
                                            <div class="catalog__item-price-now">1900 ₽</div>
                                        </div>
                                        <a class="catalog__item-buy" href="#">купить<img
                                                src="{{asset('assets/images/svg/cart.svg')}}"
                                                alt=""></a>
                                    </div>
                                    <a class="catalog__item-offer" href="#">5 предложений</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                        <div class="catalog__item catalog__item-bt">
                            <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img
                                        src="{{asset('assets/images/catalog-img21.jpg')}}" alt=""></a>
                                <div class="catalog__item-fav">
                                    <svg>
                                        <use xlink:href="#like"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Подарочный набор
                                    «Дорогому
                                    дедушке»</a>
                                <div class="catalog__item-numb">12 товаров</div>
                                <div class="catalog__item-bottom">
                                    <div class="catalog__item-info">
                                        <div class="catalog__item-price">
                                            <div class="catalog__item-price-old">50 ₽</div>
                                            <div class="catalog__item-price-now">2100 ₽</div>
                                        </div>
                                        <a class="catalog__item-buy" href="#">купить<img
                                                src="{{asset('assets/images/svg/cart.svg')}}"
                                                alt=""></a>
                                    </div>
                                    <a class="catalog__item-offer" href="#">5 предложений</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection