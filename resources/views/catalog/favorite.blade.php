@extends('layouts.layout')

@section('content')

    <div class="breadcrumb-block">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Главная</a></li>
                <li class="breadcrumb-item"><a href="#">Каталог</a></li>
                <li class="breadcrumb-item active">Избранное</li>
            </ol>
        </div>
    </div>
    <div class="title-main">
        <div class="container">
            <div class="title-main__inner">
                <h1>Избранное</h1>
            </div>
        </div>
    </div>
    @if(count($products))
        <div class="catalog">
            <div class="container">
                <div class="catalog__inner">
                    <div class="catalog__list">
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                                    <div class="catalog__item catalog__item-favorites">
                                        <div class="catalog__item-top"><a class="catalog__item-img" href="{{ route('catalog.product', ['slug_product' => $product->slug_product]) }}"><img
                                                    src="{{ asset($product->preview_picture->src) }}" alt=""></a>
                                            <div class="catalog__item-fav">
                                                <svg>
                                                    <use xlink:href="#like"></use>
                                                </svg>
                                            </div>
                                            <div class="catalog__item-label catalog__item-label-hit"><span>хит</span>
                                            </div>
                                        </div>
                                        <div class="catalog__item-tx"><a class="catalog__item-title" href="{{ route('catalog.product', ['slug_product' => $product->slug_product]) }}">{{ $product->title }}</a>
                                            <div class="catalog__item-numb">{{ $product->weight }} г</div>
                                            <div class="catalog__item-bottom">
                                                <div class="catalog__item-info">
                                                    <div class="catalog__item-price">
                                                        {{--<div class="catalog__item-price-old">50 руб</div>--}}
                                                        <div class="catalog__item-price-now">{{ $product->price->value }} {{ $product->price->currency->value }}</div>
                                                    </div>
                                                    <a class="catalog__item-buy" href="#">купить<img
                                                            src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{--<div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                                <div class="catalog__item catalog__item-favorites">
                                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="assets/images/catalog-img13.jpg" alt=""></a>
                                        <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                                        <div class="catalog__item-label catalog__item-label-new"><span>NEW</span></div>
                                    </div>
                                    <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Мандарины Абхазские ~ 500 гр.</a>
                                        <div class="catalog__item-numb">0.5 кг</div>
                                        <div class="catalog__item-bottom">
                                            <div class="catalog__item-info">
                                                <div class="catalog__item-price">
                                                    <div class="catalog__item-price-now">135 ₽</div>
                                                </div>
                                                <div class="catalog__item-amount">
                                                    <input type="text" value="1"><span class="up"><img src="assets/images/svg/plus.svg" alt=""></span><span class="down"><img src="assets/images/svg/minus.svg" alt=""></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                                <div class="catalog__item catalog__item-favorites">
                                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="assets/images/catalog-img14.jpg" alt=""></a>
                                        <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                                        <div class="catalog__item-label catalog__item-label-sale"><span>30%</span></div>
                                    </div>
                                    <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Манго Кео Вьетнам ~ 350 г</a>
                                        <div class="catalog__item-numb">1 шт (125 г)</div>
                                        <div class="catalog__item-bottom">
                                            <div class="catalog__item-info">
                                                <div class="catalog__item-price">
                                                    <div class="catalog__item-price-old">50 ₽</div>
                                                    <div class="catalog__item-price-now">45 ₽</div>
                                                </div><a class="catalog__item-buy" href="#">купить<img src="assets/images/svg/cart.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                                <div class="catalog__item catalog__item-favorites">
                                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="assets/images/catalog-img15.jpg" alt=""></a>
                                        <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                                        <div class="catalog__item-label catalog__item-label-sale"><span>30%</span></div>
                                    </div>
                                    <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Помидоры Узбекские сладкие ~ 500 г</a>
                                        <div class="catalog__item-numb">1 шт (125 г)</div>
                                        <div class="catalog__item-bottom">
                                            <div class="catalog__item-info">
                                                <div class="catalog__item-price">
                                                    <div class="catalog__item-price-old">50 ₽</div>
                                                    <div class="catalog__item-price-now">450 ₽</div>
                                                </div><a class="catalog__item-buy" href="#">купить<img src="assets/images/svg/cart.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                                <div class="catalog__item catalog__item-favorites">
                                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="assets/images/catalog-img16.jpg" alt=""></a>
                                        <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                                        <div class="catalog__item-label catalog__item-label-sale"><span>30%</span></div>
                                    </div>
                                    <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Авокадо Хасс ~ 2 шт. в упаковке 350 г</a>
                                        <div class="catalog__item-numb">1 шт (125 г)</div>
                                        <div class="catalog__item-bottom">
                                            <div class="catalog__item-info">
                                                <div class="catalog__item-price">
                                                    <div class="catalog__item-price-old">50 ₽</div>
                                                    <div class="catalog__item-price-now">45 ₽</div>
                                                </div><a class="catalog__item-buy" href="#">купить<img src="assets/images/svg/cart.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                                <div class="catalog__item catalog__item-favorites">
                                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="assets/images/catalog-img17.jpg" alt=""></a>
                                        <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                                        <div class="catalog__item-label catalog__item-label-hit"><span>хит</span></div>
                                    </div>
                                    <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Подарочный набор «Дари тепло»</a>
                                        <div class="catalog__item-numb">12 товаров</div>
                                        <div class="catalog__item-bottom">
                                            <div class="catalog__item-info">
                                                <div class="catalog__item-price">
                                                    <div class="catalog__item-price-old">50 руб</div>
                                                    <div class="catalog__item-price-now">2200 ₽</div>
                                                </div><a class="catalog__item-buy" href="#">купить<img src="assets/images/svg/cart.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                                <div class="catalog__item catalog__item-favorites">
                                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="assets/images/catalog-img18.jpg" alt=""></a>
                                        <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                                    </div>
                                    <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Подарочный набор «Порция счастья»</a>
                                        <div class="catalog__item-numb">5 товаров</div>
                                        <div class="catalog__item-bottom">
                                            <div class="catalog__item-info">
                                                <div class="catalog__item-price">
                                                    <div class="catalog__item-price-now">1305 ₽</div>
                                                </div>
                                                <div class="catalog__item-amount">
                                                    <input type="text" value="1"><span class="up"><img src="assets/images/svg/plus.svg" alt=""></span><span class="down"><img src="assets/images/svg/minus.svg" alt=""></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                                <div class="catalog__item catalog__item-favorites">
                                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="assets/images/catalog-img19.jpg" alt=""></a>
                                        <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                                    </div>
                                    <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Подарочный набор «Любимым родителям»</a>
                                        <div class="catalog__item-numb">12 товаров</div>
                                        <div class="catalog__item-bottom">
                                            <div class="catalog__item-info">
                                                <div class="catalog__item-price">
                                                    <div class="catalog__item-price-old">50 ₽</div>
                                                    <div class="catalog__item-price-now">1500 ₽</div>
                                                </div><a class="catalog__item-buy" href="#">купить<img src="assets/images/svg/cart.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                                <div class="catalog__item catalog__item-favorites">
                                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="assets/images/catalog-img20.jpg" alt=""></a>
                                        <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                                    </div>
                                    <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Подарочный набор «Чудо»</a>
                                        <div class="catalog__item-numb">12 товаров</div>
                                        <div class="catalog__item-bottom">
                                            <div class="catalog__item-info">
                                                <div class="catalog__item-price">
                                                    <div class="catalog__item-price-old">50 ₽</div>
                                                    <div class="catalog__item-price-now">1900 ₽</div>
                                                </div><a class="catalog__item-buy" href="#">купить<img src="assets/images/svg/cart.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                                <div class="catalog__item catalog__item-favorites">
                                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="assets/images/catalog-img21.jpg" alt=""></a>
                                        <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                                    </div>
                                    <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Подарочный набор «Дорогому дедушке»</a>
                                        <div class="catalog__item-numb">12 товаров</div>
                                        <div class="catalog__item-bottom">
                                            <div class="catalog__item-info">
                                                <div class="catalog__item-price">
                                                    <div class="catalog__item-price-old">50 ₽</div>
                                                    <div class="catalog__item-price-now">2100 ₽</div>
                                                </div><a class="catalog__item-buy" href="#">купить<img src="assets/images/svg/cart.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="tx">
            <div class="container">
                <div class="tx__inner">
                    <div class="tx__img"><img src="{{ asset('assets/images/svg/img2.svg') }}" alt=""></div>
                    <div class="tx__text">
                        <div class="tx__title">Тут будут понравившиеся Вам товары!</div>
                        <p>Нажимайте <img src="{{ asset('assets/images/svg/like2.svg') }}" alt=''>, чтобы сохранять
                            товары в избранное.</p><a class="button button-secondary" href="{{ route('home') }}">начать покупки</a>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.catalog-min')
    @endif

@endsection
