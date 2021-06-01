@extends('layouts.layout')

@section('content')

    <div class="breadcrumb-block">
        <div class="container">
            {{ \DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render('basket') }}
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

    {{--// else (Блок если есть подписка)
    <div class="cart-banner cart-banner-tw">
        <div class="cart-banner__inner">
            <div class="cart-banner__img"><img src="{{asset('assets/images/cart-banner2.png')}}" alt=""></div>
            <div class="cart-banner__tx">
                <p>У вас оформлена подписка на категорию <a href="#">Молочные продукты</a>, <a href="#">Бакалея</a>.
                    Хотите добавить товары?</p><a class="cart-banner__btn-tw" href="#">Добавить товары</a>
            </div>
        </div>
    </div>
    // end else--}}
    <div class="cart">
        <div class="container">
            <div class="cart__inner">
                <div class="cart__list">

                    <div class="cart__list-item">
                        <div class="cart__list-descr">
                            <div class="cart__list-img"
                                 style="background-image: url('{{ asset('assets/images/card-img2.jpg') }}')"></div>
                            <a class="cart__list-title" href="#">Манго Тайское Премиум (1 шт 300 гр)</a>
                            <div class="cart__list-article">Артикул: 87346773</div>
                        </div>
                        <div class="cart__list-numb cart__list-numb-tw">
                            <div class="cart__list-price">
                                <div class="cart__list-price-now">121 ₽</div>
                                <div class="cart__list-price-old">145 ₽</div>
                            </div>
                            <div class="cart__list-numb-tx">Цена за 1 шт</div>
                        </div>
                        <div class="cart__list-amount">
                            <div class="catalog__item-amount">
                                <input type="text" value="1"><span class="up"><img
                                        src="{{ asset('assets/images/svg/plus.svg') }}" alt=""></span><span
                                    class="down"><img src="{{ asset('assets/images/svg/minus.svg') }}" alt=""></span>
                            </div>
                        </div>
                        <div class="cart__list-numb">
                            <div class="cart__list-price">
                                <div class="cart__list-price-now">242 ₽</div>
                            </div>
                            <div class="cart__list-numb-tx">Экономия 300 ₽</div>
                        </div>
                        <div class="cart__list-delete">
                            <svg>
                                <use xlink:href="#delete"></use>
                            </svg>
                        </div>
                    </div>

                </div>
                {{--// else (товары по подписке в корзине)
                <div class="cart__list">
                    <h3>Товары по подписке</h3>
                    <div class="cart__list-item">
                        <div class="cart__list-descr">
                            <div class="cart__list-img"
                                 style="background-image: url('{{ asset('assets/images/card-img2.jpg')}}')"></div>
                            <a class="cart__list-title" href="#">Манго Тайское Премиум (1 шт 300 гр)</a>
                            <div class="cart__list-article">Артикул: 87346773</div>
                        </div>
                        <div class="cart__list-numb">
                            <div class="cart__list-price">
                                <div class="cart__list-price-now">121 ₽</div>
                                <div class="cart__list-price-old">145 ₽</div>
                            </div>
                            <div class="cart__list-numb-tx">Цена за 1 шт</div>
                        </div>
                        <div class="cart__list-amount">
                            <div class="catalog__item-amount">
                                <input type="text" value="1"><span class="up"><img
                                        src="{{ asset('assets/images/svg/plus.svg')}}" alt=""></span><span class="down"><img
                                        src="{{ asset('assets/images/svg/minus.svg')}}" alt=""></span>
                            </div>
                        </div>
                        <div class="cart__list-numb">
                            <div class="cart__list-price">
                                <div class="cart__list-price-now">242 ₽</div>
                            </div>
                            <div class="cart__list-numb-tx">Экономия 300 ₽</div>
                        </div>
                        <div class="cart__list-delete">
                            <svg>
                                <use xlink:href="#delete"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                // end else--}}
                <div class="cart__list-all">
                    <div class="cart__list-descr">
                        <div class="cart__list-all-title">Введите промокод</div>
                        <div class="cart__list-promo">
                            <input type="text">
                            <button class="cart__list-promo-btn"><img src="{{ asset('assets/images/svg/arrow3.svg') }}"
                                                                      alt=""></button>
                        </div>
                        <div class="cart__list-promo-done">Промокод применен</div>
                    </div>
                    <div class="cart__list-all-tx">
                        <div class="cart__list-all-tx-title">Итого:</div>
                        <div class="cart__list-all-tx-text">Общий вес: 0.4 кг</div>
                    </div>
                    <div class="cart__list-all-price">
                        <div class="cart__list-price">
                            <div class="cart__list-price-now">121 ₽</div>
                            <div class="cart__list-price-old">145 ₽</div>
                        </div>
                    </div>
                    <div class="cart__list-all-btn"><a class="button button-secondary" href="#">оформить заказ</a></div>
                </div>
            </div>
        </div>
    </div>
    {{--// else (блок если нет подписок)
    <div class="cart-banner">
        <div class="container">
            <div class="cart-banner__inner">
                <div class="cart-banner__img"><img src="{{ asset('assets/images/cart-banner1.png') }}" alt=""></div>
                <div class="cart-banner__tx">
                    <div class="cart-banner__title">Бесплатные товары по подписке</div>
                    <div class="cart-banner__label">Выгода</div>
                    <a class="cart-banner__btn" href="#">Бесплатно получайте товары из любимых категорий по подписке<img
                            src="{{ asset('assets/images/svg/arrow5.svg') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>--}}

    <div class="tx">
        <div class="container">
            <div class="tx__inner">
                <div class="tx__img"><img src="{{ asset('assets/images/svg/img1.svg')}}" alt=""></div>
                <div class="tx__text">
                    <div class="tx__title">В корзине пока нет товаров</div>
                    <p>Перейдите в каталог, посмотрите скидки или <br>воспользуйтесь поиском, чтобы найти нужный товар.
                    </p><a class="button button-secondary" href="#">начать покупки</a>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.catalog.catalog-min')

@endsection
