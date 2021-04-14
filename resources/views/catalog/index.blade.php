@extends('layout')

@section('content')

    <div class="title-main">
        <div class="container">
            <div class="title-main__inner">
                <h1>NON-FOOD</h1>
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
                            {{ $category->value }}
                        </div>
                        <a class="button button-all" href="{{ route('category') }}"><span>смотреть</span> +75 еще</a>
                    </div>
                    <div class="row">
                        @foreach($category->products as $product)
                            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                                <div class="catalog__item catalog__item-bt">
                                    <div class="catalog__item-top">
                                        <a class="catalog__item-img" href="{{ route('product', ['id' => $product->id]) }}">
                                            <img src="{{ asset($product->preview_picture->src) }}" alt="">
                                        </a>
                                        <div class="catalog__item-fav">
                                            <svg><use xlink:href="#like"></use></svg>
                                        </div>
                                        <div class="catalog__item-label catalog__item-label-hit"><span>хит</span></div>
                                    </div>
                                    <div class="catalog__item-tx">
                                        <a class="catalog__item-title" href="{{ route('product', ['id' => $product->id]) }}">
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
        </div>
    @endforeach
    {{--<div class="catalog-min">
        <div class="container">
            <div class="catalog-min__top">
                <div class="catalog-min__top-title"><img src="{{ asset('/assets/images/svg/icon-catalog2.svg') }}"
                                                         alt=''> Фрукты
                </div>
                <a class="button button-all" href="#">смотреть +75 еще</a>
            </div>
            <div class="row">
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog__item">
                        <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img
                                    src="{{ asset('/assets/images/catalog-img7.jpg') }}" alt=""></a>
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
                                            src="{{ asset('/assets/images/svg/cart.svg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog__item">
                        <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img
                                    src="{{ asset('/assets/images/catalog-img8.jpg') }}" alt=""></a>
                            <div class="catalog__item-fav">
                                <svg>
                                    <use xlink:href="#like"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Подарочный набор «Порция
                                счастья»</a>
                            <div class="catalog__item-numb">5 товаров</div>
                            <div class="catalog__item-bottom">
                                <div class="catalog__item-info">
                                    <div class="catalog__item-price">
                                        <div class="catalog__item-price-now">1305 ₽</div>
                                    </div>
                                    <div class="catalog__item-amount">
                                        <input type="text" value="1"><span class="up"><img
                                                src="{{ asset('/assets/images/svg/plus.svg') }}" alt=""></span><span
                                            class="down"><img src="{{ asset('/assets/images/svg/minus.svg') }}" alt=""></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog__item">
                        <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img
                                    src="{{ asset('/assets/images/catalog-img9.jpg') }}" alt=""></a>
                            <div class="catalog__item-fav">
                                <svg>
                                    <use xlink:href="#like"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Подарочный набор «Любимым
                                родителям»</a>
                            <div class="catalog__item-numb">12 товаров</div>
                            <div class="catalog__item-bottom">
                                <div class="catalog__item-info">
                                    <div class="catalog__item-price">
                                        <div class="catalog__item-price-old">50 ₽</div>
                                        <div class="catalog__item-price-now">1500 ₽</div>
                                    </div>
                                    <a class="catalog__item-buy" href="#">купить<img
                                            src="{{ asset('/assets/images/svg/cart.svg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog__item">
                        <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img
                                    src="{{ asset('/assets/images/catalog-img10.jpg') }}" alt=""></a>
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
                                            src="{{ asset('/assets/images/svg/cart.svg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog__item">
                        <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img
                                    src="{{ asset('/assets/images/catalog-img11.jpg') }}" alt=""></a>
                            <div class="catalog__item-fav">
                                <svg>
                                    <use xlink:href="#like"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Подарочный набор «Дорогому
                                дедушке»</a>
                            <div class="catalog__item-numb">12 товаров</div>
                            <div class="catalog__item-bottom">
                                <div class="catalog__item-info">
                                    <div class="catalog__item-price">
                                        <div class="catalog__item-price-old">50 ₽</div>
                                        <div class="catalog__item-price-now">2100 ₽</div>
                                    </div>
                                    <a class="catalog__item-buy" href="#">купить<img
                                            src="{{ asset('/assets/images/svg/cart.svg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="catalog-min">
        <div class="container">
            <div class="catalog-min__top">
                <div class="catalog-min__top-title"><img src="{{ asset('/assets/images/svg/icon-catalog3.svg') }}"
                                                         alt=''> Ягоды
                </div>
                <a class="button button-all" href="#">смотреть +75 еще</a>
            </div>
            <div class="row">
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog__item catalog__item-bt">
                        <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img
                                    src="{{ asset('/assets/images/catalog-img2.jpg') }}" alt=""></a>
                            <div class="catalog__item-fav">
                                <svg>
                                    <use xlink:href="#like"></use>
                                </svg>
                            </div>
                            <div class="catalog__item-label catalog__item-label-hit"><span>хит</span></div>
                        </div>
                        <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Клубника отборная ~ 250
                                г</a>
                            <div class="catalog__item-numb">1 шт (125 г)</div>
                            <div class="catalog__item-bottom">
                                <div class="catalog__item-info">
                                    <div class="catalog__item-price">
                                        <div class="catalog__item-price-old">50 руб</div>
                                        <div class="catalog__item-price-now">395 ₽</div>
                                    </div>
                                    <a class="catalog__item-buy" href="#">купить<img
                                            src="{{ asset('/assets/images/svg/cart.svg') }}" alt=""></a>
                                </div>
                                <a class="catalog__item-offer" href="#">5 предложений</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog__item catalog__item-bt">
                        <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img
                                    src="{{ asset('/assets/images/catalog-img3.jpg') }}" alt=""></a>
                            <div class="catalog__item-fav">
                                <svg>
                                    <use xlink:href="#like"></use>
                                </svg>
                            </div>
                            <div class="catalog__item-label catalog__item-label-new"><span>NEW</span></div>
                        </div>
                        <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Мандарины Абхазские ~ 500
                                гр.</a>
                            <div class="catalog__item-numb">0.5 кг</div>
                            <div class="catalog__item-bottom">
                                <div class="catalog__item-info">
                                    <div class="catalog__item-price">
                                        <div class="catalog__item-price-now">135 ₽</div>
                                    </div>
                                    <div class="catalog__item-amount">
                                        <input type="text" value="1"><span class="up"><img
                                                src="{{ asset('/assets/images/svg/plus.svg') }}" alt=""></span><span
                                            class="down"><img src="{{ asset('/assets/images/svg/minus.svg') }}" alt=""></span>
                                    </div>
                                </div>
                                <a class="catalog__item-offer" href="#">уникальный товар</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog__item catalog__item-bt catalog__item-favorites">
                        <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img
                                    src="{{ asset('/assets/images/catalog-img4.jpg') }}" alt=""></a>
                            <div class="catalog__item-fav">
                                <svg>
                                    <use xlink:href="#like"></use>
                                </svg>
                            </div>
                            <div class="catalog__item-label catalog__item-label-sale"><span>30%</span></div>
                        </div>
                        <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Манго Кео Вьетнам ~ 350
                                г</a>
                            <div class="catalog__item-numb">1 шт (125 г)</div>
                            <div class="catalog__item-bottom">
                                <div class="catalog__item-info">
                                    <div class="catalog__item-price">
                                        <div class="catalog__item-price-old">50 ₽</div>
                                        <div class="catalog__item-price-now">45 ₽</div>
                                    </div>
                                    <a class="catalog__item-buy" href="#">купить<img
                                            src="{{ asset('/assets/images/svg/cart.svg') }}" alt=""></a>
                                </div>
                                <a class="catalog__item-offer" href="#">1 предложение</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog__item catalog__item-bt">
                        <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img
                                    src="{{ asset('/assets/images/catalog-img5.jpg') }}" alt=""></a>
                            <div class="catalog__item-fav">
                                <svg>
                                    <use xlink:href="#like"></use>
                                </svg>
                            </div>
                            <div class="catalog__item-label catalog__item-label-sale"><span>30%</span></div>
                        </div>
                        <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Помидоры Узбекские сладкие
                                ~ 500 г</a>
                            <div class="catalog__item-numb">1 шт (125 г)</div>
                            <div class="catalog__item-bottom">
                                <div class="catalog__item-info">
                                    <div class="catalog__item-price">
                                        <div class="catalog__item-price-old">50 ₽</div>
                                        <div class="catalog__item-price-now">450 ₽</div>
                                    </div>
                                    <a class="catalog__item-buy" href="#">купить<img
                                            src="{{ asset('/assets/images/svg/cart.svg') }}" alt=""></a>
                                </div>
                                <a class="catalog__item-offer" href="#">3 предложение</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog__item catalog__item-bt">
                        <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img
                                    src="{{ asset('/assets/images/catalog-img6.jpg') }}" alt=""></a>
                            <div class="catalog__item-fav">
                                <svg>
                                    <use xlink:href="#like"></use>
                                </svg>
                            </div>
                            <div class="catalog__item-label catalog__item-label-sale"><span>30%</span></div>
                        </div>
                        <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Авокадо Хасс ~ 2 шт. в
                                упаковке 350 г</a>
                            <div class="catalog__item-numb">1 шт (125 г)</div>
                            <div class="catalog__item-bottom">
                                <div class="catalog__item-info">
                                    <div class="catalog__item-price">
                                        <div class="catalog__item-price-old">50 ₽</div>
                                        <div class="catalog__item-price-now">45 ₽</div>
                                    </div>
                                    <a class="catalog__item-buy" href="#">купить<img
                                            src="{{ asset('/assets/images/svg/cart.svg') }}" alt=""></a>
                                </div>
                                <a class="catalog__item-offer" href="#">5 предложение</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="catalog-min">
        <div class="container">
            <div class="catalog-min__top">
                <div class="catalog-min__top-title"><img src="{{ asset('/assets/images/svg/icon-catalog4.svg') }}"
                                                         alt=''> Зелень
                </div>
                <a class="button button-all" href="#">смотреть +75 еще</a>
            </div>
            <div class="row">
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog__item catalog__item-bt">
                        <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img
                                    src="{{ asset('/assets/images/catalog-img2.jpg') }}" alt=""></a>
                            <div class="catalog__item-fav">
                                <svg>
                                    <use xlink:href="#like"></use>
                                </svg>
                            </div>
                            <div class="catalog__item-label catalog__item-label-hit"><span>хит</span></div>
                        </div>
                        <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Клубника отборная ~ 250
                                г</a>
                            <div class="catalog__item-numb">1 шт (125 г)</div>
                            <div class="catalog__item-bottom">
                                <div class="catalog__item-info">
                                    <div class="catalog__item-price">
                                        <div class="catalog__item-price-old">50 руб</div>
                                        <div class="catalog__item-price-now">395 ₽</div>
                                    </div>
                                    <a class="catalog__item-buy" href="#">купить<img
                                            src="{{ asset('/assets/images/svg/cart.svg') }}" alt=""></a>
                                </div>
                                <a class="catalog__item-offer" href="#">5 предложений</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog__item catalog__item-bt">
                        <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img
                                    src="{{ asset('/assets/images/catalog-img3.jpg') }}" alt=""></a>
                            <div class="catalog__item-fav">
                                <svg>
                                    <use xlink:href="#like"></use>
                                </svg>
                            </div>
                            <div class="catalog__item-label catalog__item-label-new"><span>NEW</span></div>
                        </div>
                        <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Мандарины Абхазские ~ 500
                                гр.</a>
                            <div class="catalog__item-numb">0.5 кг</div>
                            <div class="catalog__item-bottom">
                                <div class="catalog__item-info">
                                    <div class="catalog__item-price">
                                        <div class="catalog__item-price-now">135 ₽</div>
                                    </div>
                                    <div class="catalog__item-amount">
                                        <input type="text" value="1"><span class="up"><img
                                                src="{{ asset('/assets/images/svg/plus.svg') }}" alt=""></span><span
                                            class="down"><img src="{{ asset('/assets/images/svg/minus.svg') }}" alt=""></span>
                                    </div>
                                </div>
                                <a class="catalog__item-offer" href="#">уникальный товар</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog__item catalog__item-bt catalog__item-favorites">
                        <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img
                                    src="{{ asset('/assets/images/catalog-img4.jpg') }}" alt=""></a>
                            <div class="catalog__item-fav">
                                <svg>
                                    <use xlink:href="#like"></use>
                                </svg>
                            </div>
                            <div class="catalog__item-label catalog__item-label-sale"><span>30%</span></div>
                        </div>
                        <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Манго Кео Вьетнам ~ 350
                                г</a>
                            <div class="catalog__item-numb">1 шт (125 г)</div>
                            <div class="catalog__item-bottom">
                                <div class="catalog__item-info">
                                    <div class="catalog__item-price">
                                        <div class="catalog__item-price-old">50 ₽</div>
                                        <div class="catalog__item-price-now">45 ₽</div>
                                    </div>
                                    <a class="catalog__item-buy" href="#">купить<img
                                            src="{{ asset('/assets/images/svg/cart.svg') }}" alt=""></a>
                                </div>
                                <a class="catalog__item-offer" href="#">1 предложение</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog__item catalog__item-bt">
                        <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img
                                    src="{{ asset('/assets/images/catalog-img5.jpg') }}" alt=""></a>
                            <div class="catalog__item-fav">
                                <svg>
                                    <use xlink:href="#like"></use>
                                </svg>
                            </div>
                            <div class="catalog__item-label catalog__item-label-sale"><span>30%</span></div>
                        </div>
                        <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Помидоры Узбекские сладкие
                                ~ 500 г</a>
                            <div class="catalog__item-numb">1 шт (125 г)</div>
                            <div class="catalog__item-bottom">
                                <div class="catalog__item-info">
                                    <div class="catalog__item-price">
                                        <div class="catalog__item-price-old">50 ₽</div>
                                        <div class="catalog__item-price-now">450 ₽</div>
                                    </div>
                                    <a class="catalog__item-buy" href="#">купить<img
                                            src="{{ asset('/assets/images/svg/cart.svg') }}" alt=""></a>
                                </div>
                                <a class="catalog__item-offer" href="#">3 предложение</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog__item catalog__item-bt">
                        <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img
                                    src="{{ asset('/assets/images/catalog-img6.jpg') }}" alt=""></a>
                            <div class="catalog__item-fav">
                                <svg>
                                    <use xlink:href="#like"></use>
                                </svg>
                            </div>
                            <div class="catalog__item-label catalog__item-label-sale"><span>30%</span></div>
                        </div>
                        <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Авокадо Хасс ~ 2 шт. в
                                упаковке 350 г</a>
                            <div class="catalog__item-numb">1 шт (125 г)</div>
                            <div class="catalog__item-bottom">
                                <div class="catalog__item-info">
                                    <div class="catalog__item-price">
                                        <div class="catalog__item-price-old">50 ₽</div>
                                        <div class="catalog__item-price-now">45 ₽</div>
                                    </div>
                                    <a class="catalog__item-buy" href="#">купить<img
                                            src="{{ asset('/assets/images/svg/cart.svg') }}" alt=""></a>
                                </div>
                                <a class="catalog__item-offer" href="#">5 предложение</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="catalog-min">
        <div class="container">
            <div class="catalog-min__top">
                <div class="catalog-min__top-title"><img src="{{ asset('/assets/images/svg/icon-catalog8.svg') }}"
                                                         alt=''> Грибы
                </div>
                <a class="button button-all" href="#">смотреть +75 еще</a>
            </div>
            <div class="row">
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog__item catalog__item-bt">
                        <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img
                                    src="{{ asset('/assets/images/catalog-img2.jpg') }}" alt=""></a>
                            <div class="catalog__item-fav">
                                <svg>
                                    <use xlink:href="#like"></use>
                                </svg>
                            </div>
                            <div class="catalog__item-label catalog__item-label-hit"><span>хит</span></div>
                        </div>
                        <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Клубника отборная ~ 250
                                г</a>
                            <div class="catalog__item-numb">1 шт (125 г)</div>
                            <div class="catalog__item-bottom">
                                <div class="catalog__item-info">
                                    <div class="catalog__item-price">
                                        <div class="catalog__item-price-old">50 руб</div>
                                        <div class="catalog__item-price-now">395 ₽</div>
                                    </div>
                                    <a class="catalog__item-buy" href="#">купить<img
                                            src="{{ asset('/assets/images/svg/cart.svg') }}" alt=""></a>
                                </div>
                                <a class="catalog__item-offer" href="#">5 предложений</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog__item catalog__item-bt">
                        <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img
                                    src="{{ asset('/assets/images/catalog-img3.jpg') }}" alt=""></a>
                            <div class="catalog__item-fav">
                                <svg>
                                    <use xlink:href="#like"></use>
                                </svg>
                            </div>
                            <div class="catalog__item-label catalog__item-label-new"><span>NEW</span></div>
                        </div>
                        <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Мандарины Абхазские ~ 500
                                гр.</a>
                            <div class="catalog__item-numb">0.5 кг</div>
                            <div class="catalog__item-bottom">
                                <div class="catalog__item-info">
                                    <div class="catalog__item-price">
                                        <div class="catalog__item-price-now">135 ₽</div>
                                    </div>
                                    <div class="catalog__item-amount">
                                        <input type="text" value="1"><span class="up"><img
                                                src="{{ asset('/assets/images/svg/plus.svg') }}" alt=""></span><span
                                            class="down"><img src="{{ asset('/assets/images/svg/minus.svg') }}" alt=""></span>
                                    </div>
                                </div>
                                <a class="catalog__item-offer" href="#">уникальный товар</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog__item catalog__item-bt catalog__item-favorites">
                        <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img
                                    src="{{ asset('/assets/images/catalog-img4.jpg') }}" alt=""></a>
                            <div class="catalog__item-fav">
                                <svg>
                                    <use xlink:href="#like"></use>
                                </svg>
                            </div>
                            <div class="catalog__item-label catalog__item-label-sale"><span>30%</span></div>
                        </div>
                        <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Манго Кео Вьетнам ~ 350
                                г</a>
                            <div class="catalog__item-numb">1 шт (125 г)</div>
                            <div class="catalog__item-bottom">
                                <div class="catalog__item-info">
                                    <div class="catalog__item-price">
                                        <div class="catalog__item-price-old">50 ₽</div>
                                        <div class="catalog__item-price-now">45 ₽</div>
                                    </div>
                                    <a class="catalog__item-buy" href="#">купить<img
                                            src="{{ asset('/assets/images/svg/cart.svg') }}" alt=""></a>
                                </div>
                                <a class="catalog__item-offer" href="#">1 предложение</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog__item catalog__item-bt">
                        <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img
                                    src="{{ asset('/assets/images/catalog-img5.jpg') }}" alt=""></a>
                            <div class="catalog__item-fav">
                                <svg>
                                    <use xlink:href="#like"></use>
                                </svg>
                            </div>
                            <div class="catalog__item-label catalog__item-label-sale"><span>30%</span></div>
                        </div>
                        <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Помидоры Узбекские сладкие
                                ~ 500 г</a>
                            <div class="catalog__item-numb">1 шт (125 г)</div>
                            <div class="catalog__item-bottom">
                                <div class="catalog__item-info">
                                    <div class="catalog__item-price">
                                        <div class="catalog__item-price-old">50 ₽</div>
                                        <div class="catalog__item-price-now">450 ₽</div>
                                    </div>
                                    <a class="catalog__item-buy" href="#">купить<img
                                            src="{{ asset('/assets/images/svg/cart.svg') }}" alt=""></a>
                                </div>
                                <a class="catalog__item-offer" href="#">3 предложение</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog__item catalog__item-bt">
                        <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img
                                    src="{{ asset('/assets/images/catalog-img6.jpg') }}" alt=""></a>
                            <div class="catalog__item-fav">
                                <svg>
                                    <use xlink:href="#like"></use>
                                </svg>
                            </div>
                            <div class="catalog__item-label catalog__item-label-sale"><span>30%</span></div>
                        </div>
                        <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Авокадо Хасс ~ 2 шт. в
                                упаковке 350 г</a>
                            <div class="catalog__item-numb">1 шт (125 г)</div>
                            <div class="catalog__item-bottom">
                                <div class="catalog__item-info">
                                    <div class="catalog__item-price">
                                        <div class="catalog__item-price-old">50 ₽</div>
                                        <div class="catalog__item-price-now">45 ₽</div>
                                    </div>
                                    <a class="catalog__item-buy" href="#">купить<img
                                            src="{{ asset('/assets/images/svg/cart.svg') }}" alt=""></a>
                                </div>
                                <a class="catalog__item-offer" href="#">5 предложение</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}


@endsection
