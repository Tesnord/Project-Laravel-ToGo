@extends('layouts.layout')

@section('content')


<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-12">
                <div class="banner__big">
                    <div class="banner__big-slider js-banner-big">
                        <div class="banner__big-slider-item" style="background-image: url({{ asset('assets/images/banner1.jpg') }})">
                            <div class="banner__big-slider-title">Ура! Мы открылись</div>
                            <div class="banner__big-slider-tx">В честь открытия дарим скидку 10% на все!</div><a class="button button-bord" href="#">Узнать больше</a>
                        </div>
                        <div class="banner__big-slider-item" style="background-image: url({{ asset('assets/images/banner1.jpg') }})">
                            <div class="banner__big-slider-title">Ура! Мы открылись</div>
                            <div class="banner__big-slider-tx">В честь открытия дарим скидку 10% на все!</div><a class="button button-bord" href="#">Узнать больше</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="banner__al">
                    <div class="banner__min-in"><a class="banner__min" href="#" style="background-image: url({{ asset('assets/images/banner2.jpg') }})"><span class="banner__min-title">Скидки до 25%<br>на батончики Jimmy</span></a></div>
                    <div class="banner__min-in"><a class="banner__min" href="#" style="background-image: url({{ asset('assets/images/banner3.jpg') }})"><span class="banner__min-title">Спецпредложение<br>на овощи и фрукты</span></a></div>
                </div>
            </div>
        </div>
    </div>
</div>

@foreach($categories as $category)
    <div class="catalog-min">
        <div class="container">
            <div class="catalog-min__top">
                <div class="catalog-min__top-title">
                    @foreach($category->getImages() as $image)
                        <img src="{{ asset($image->src) }}" alt=''>
                    @endforeach
                    {{ $category->name }}
                </div>
                <a class="button button-all"
                   href="{{ route('catalog.index', ['path' => $category->getPath()]) }}">
                    смотреть еще
                </a>
            </div>
            <div class="row">
                @foreach($category->qProductsRcsv()->paginate(5) as $product)
                    @include('layouts.catalog.product')
                @endforeach
            </div>
        </div>
    </div>
@endforeach

{{--<div class="catalog-min">
    <div class="container">
        <div class="catalog-min__top">
            <div class="catalog-min__top-title"><img src="{{ asset('assets/images/svg/icon-catalog2.svg') }}" alt=''> Наши боксы</div><a class="button button-all" href="#"><span>смотреть</span> +75 еще</a>
        </div>
        <div class="row">
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img7.jpg') }}" alt=""></a>
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
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img8.jpg') }}" alt=""></a>
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
                                    <input type="text" value="1"><span class="up"><img src="{{ asset('assets/images/svg/plus.svg') }}" alt=""></span><span class="down"><img src="{{ asset('assets/images/svg/minus.svg') }}" alt=""></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img9.jpg') }}" alt=""></a>
                        <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                    </div>
                    <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Подарочный набор «Любимым родителям»</a>
                        <div class="catalog__item-numb">12 товаров</div>
                        <div class="catalog__item-bottom">
                            <div class="catalog__item-info">
                                <div class="catalog__item-price">
                                    <div class="catalog__item-price-old">50 ₽</div>
                                    <div class="catalog__item-price-now">1500 ₽</div>
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img10.jpg') }}" alt=""></a>
                        <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                    </div>
                    <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Подарочный набор «Чудо»</a>
                        <div class="catalog__item-numb">12 товаров</div>
                        <div class="catalog__item-bottom">
                            <div class="catalog__item-info">
                                <div class="catalog__item-price">
                                    <div class="catalog__item-price-old">50 ₽</div>
                                    <div class="catalog__item-price-now">1900 ₽</div>
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img11.jpg') }}" alt=""></a>
                        <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                    </div>
                    <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Подарочный набор «Дорогому дедушке»</a>
                        <div class="catalog__item-numb">12 товаров</div>
                        <div class="catalog__item-bottom">
                            <div class="catalog__item-info">
                                <div class="catalog__item-price">
                                    <div class="catalog__item-price-old">50 ₽</div>
                                    <div class="catalog__item-price-now">2100 ₽</div>
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
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
            <div class="catalog-min__top-title"><img src="{{ asset('assets/images/svg/icon-catalog3.svg') }}" alt=''> Новинки</div><a class="button button-all" href="#"><span>смотреть</span> +75 еще</a>
        </div>
        <div class="row">
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-bt">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img2.jpg') }}" alt=""></a>
                        <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                        <div class="catalog__item-label catalog__item-label-hit"><span>хит</span></div>
                    </div>
                    <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Клубника отборная ~ 250 г</a>
                        <div class="catalog__item-numb">1 шт (125 г)</div>
                        <div class="catalog__item-bottom">
                            <div class="catalog__item-info">
                                <div class="catalog__item-price">
                                    <div class="catalog__item-price-old">50 руб</div>
                                    <div class="catalog__item-price-now">395 ₽</div>
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            </div><a class="catalog__item-offer" href="#">5 предложений</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-bt">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img3.jpg') }}" alt=""></a>
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
                                    <input type="text" value="1"><span class="up"><img src="{{ asset('assets/images/svg/plus.svg') }}" alt=""></span><span class="down"><img src="{{ asset('assets/images/svg/minus.svg') }}" alt=""></span>
                                </div>
                            </div><a class="catalog__item-offer" href="#">уникальный товар</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-bt catalog__item-favorites">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img4.jpg') }}" alt=""></a>
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
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            </div><a class="catalog__item-offer" href="#">1 предложение</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-bt">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img5.jpg') }}" alt=""></a>
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
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            </div><a class="catalog__item-offer" href="#">3 предложение</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-bt">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img6.jpg') }}" alt=""></a>
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
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            </div><a class="catalog__item-offer" href="#">5 предложение</a>
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
            <div class="catalog-min__top-title"><img src="{{ asset('assets/images/svg/icon-catalog4.svg') }}" alt=''> Молочные продукты</div><a class="button button-all" href="#"><span>смотреть</span> +75 еще</a>
        </div>
        <div class="row">
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-bt">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img2.jpg') }}" alt=""></a>
                        <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                        <div class="catalog__item-label catalog__item-label-hit"><span>хит</span></div>
                    </div>
                    <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Клубника отборная ~ 250 г</a>
                        <div class="catalog__item-numb">1 шт (125 г)</div>
                        <div class="catalog__item-bottom">
                            <div class="catalog__item-info">
                                <div class="catalog__item-price">
                                    <div class="catalog__item-price-old">50 руб</div>
                                    <div class="catalog__item-price-now">395 ₽</div>
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            </div><a class="catalog__item-offer" href="#">5 предложений</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-bt">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img3.jpg') }}" alt=""></a>
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
                                    <input type="text" value="1"><span class="up"><img src="{{ asset('assets/images/svg/plus.svg') }}" alt=""></span><span class="down"><img src="{{ asset('assets/images/svg/minus.svg') }}" alt=""></span>
                                </div>
                            </div><a class="catalog__item-offer" href="#">уникальный товар</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-bt catalog__item-favorites">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img4.jpg') }}" alt=""></a>
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
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            </div><a class="catalog__item-offer" href="#">1 предложение</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-bt">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img5.jpg') }}" alt=""></a>
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
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            </div><a class="catalog__item-offer" href="#">3 предложение</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-bt">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img6.jpg') }}" alt=""></a>
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
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            </div><a class="catalog__item-offer" href="#">5 предложение</a>
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
            <div class="catalog-min__top-title"><img src="{{ asset('assets/images/svg/icon-catalog5.svg') }}" alt=''> Fresh</div><a class="button button-all" href="#"><span>смотреть</span> +75 еще</a>
        </div>
        <div class="row">
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-bt">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img2.jpg') }}" alt=""></a>
                        <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                        <div class="catalog__item-label catalog__item-label-hit"><span>хит</span></div>
                    </div>
                    <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Клубника отборная ~ 250 г</a>
                        <div class="catalog__item-numb">1 шт (125 г)</div>
                        <div class="catalog__item-bottom">
                            <div class="catalog__item-info">
                                <div class="catalog__item-price">
                                    <div class="catalog__item-price-old">50 руб</div>
                                    <div class="catalog__item-price-now">395 ₽</div>
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            </div><a class="catalog__item-offer" href="#">5 предложений</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-bt">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img3.jpg') }}" alt=""></a>
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
                                    <input type="text" value="1"><span class="up"><img src="{{ asset('assets/images/svg/plus.svg') }}" alt=""></span><span class="down"><img src="{{ asset('assets/images/svg/minus.svg') }}" alt=""></span>
                                </div>
                            </div><a class="catalog__item-offer" href="#">уникальный товар</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-bt catalog__item-favorites">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img4.jpg') }}" alt=""></a>
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
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            </div><a class="catalog__item-offer" href="#">1 предложение</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-bt">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img5.jpg') }}" alt=""></a>
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
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            </div><a class="catalog__item-offer" href="#">3 предложение</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-bt">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img6.jpg') }}" alt=""></a>
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
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            </div><a class="catalog__item-offer" href="#">5 предложение</a>
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
            <div class="catalog-min__top-title"><img src="{{ asset('assets/images/svg/icon-catalog6.svg') }}" alt=''> Хлебобулочные изделия</div><a class="button button-all" href="#"><span>смотреть</span> +75 еще</a>
        </div>
        <div class="row">
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-bt">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img2.jpg') }}" alt=""></a>
                        <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                        <div class="catalog__item-label catalog__item-label-hit"><span>хит</span></div>
                    </div>
                    <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Клубника отборная ~ 250 г</a>
                        <div class="catalog__item-numb">1 шт (125 г)</div>
                        <div class="catalog__item-bottom">
                            <div class="catalog__item-info">
                                <div class="catalog__item-price">
                                    <div class="catalog__item-price-old">50 руб</div>
                                    <div class="catalog__item-price-now">395 ₽</div>
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            </div><a class="catalog__item-offer" href="#">5 предложений</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-bt">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img3.jpg') }}" alt=""></a>
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
                                    <input type="text" value="1"><span class="up"><img src="{{ asset('assets/images/svg/plus.svg') }}" alt=""></span><span class="down"><img src="{{ asset('assets/images/svg/minus.svg') }}" alt=""></span>
                                </div>
                            </div><a class="catalog__item-offer" href="#">уникальный товар</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-bt catalog__item-favorites">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img4.jpg') }}" alt=""></a>
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
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            </div><a class="catalog__item-offer" href="#">1 предложение</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-bt">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img5.jpg') }}" alt=""></a>
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
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            </div><a class="catalog__item-offer" href="#">3 предложение</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-bt">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img6.jpg') }}" alt=""></a>
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
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            </div><a class="catalog__item-offer" href="#">5 предложение</a>
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
            <div class="catalog-min__top-title"><img src="{{ asset('assets/images/svg/icon-catalog7.svg') }}" alt=''> Мясо птица яйцо</div><a class="button button-all" href="#"><span>смотреть</span> +75 еще</a>
        </div>
        <div class="row">
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-bt">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img2.jpg') }}" alt=""></a>
                        <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                        <div class="catalog__item-label catalog__item-label-hit"><span>хит</span></div>
                    </div>
                    <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Клубника отборная ~ 250 г</a>
                        <div class="catalog__item-numb">1 шт (125 г)</div>
                        <div class="catalog__item-bottom">
                            <div class="catalog__item-info">
                                <div class="catalog__item-price">
                                    <div class="catalog__item-price-old">50 руб</div>
                                    <div class="catalog__item-price-now">395 ₽</div>
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            </div><a class="catalog__item-offer" href="#">5 предложений</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-bt">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img3.jpg') }}" alt=""></a>
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
                                    <input type="text" value="1"><span class="up"><img src="{{ asset('assets/images/svg/plus.svg') }}" alt=""></span><span class="down"><img src="{{ asset('assets/images/svg/minus.svg') }}" alt=""></span>
                                </div>
                            </div><a class="catalog__item-offer" href="#">уникальный товар</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-bt catalog__item-favorites">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img4.jpg') }}" alt=""></a>
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
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            </div><a class="catalog__item-offer" href="#">1 предложение</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-bt">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img5.jpg') }}" alt=""></a>
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
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            </div><a class="catalog__item-offer" href="#">3 предложение</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-bt">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img6.jpg') }}" alt=""></a>
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
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            </div><a class="catalog__item-offer" href="#">5 предложение</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>--}}
<div class="delivery">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="delivery__info"><img class="img-fluid" src="{{ asset('assets/images/svg/delivery-img.svg') }}" alt="">
                    <div class="delivery__info-title">Доставка 24/7</div>
                    <p>Мы доставим ваш заказ в течение 1,5 часа. В нашей команде только вежливые и пунктуальные курьеры.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="delivery__order" style="background-image: url({{ asset('assets/images/delivery-bg.jpg') }})">
                    <div class="delivery__order-title">Хотите оформить регулярную доставку своих любимых продуктов?</div>
                    <p>Оформите подписку в личном кабинете и еженедельно получайте выбранные вами продукты на дом.</p><a class="button button-bord" href="#">Узнать больше</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="delivery-tw" style="background-image: url({{ asset('assets/images/delivery-bg2.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="delivery-tw__img"><img class="img-fluid" src="{{ asset('assets/images/svg/delivery-img3.svg') }}" alt=""></div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="delivery-tw__info">
                    <div class="delivery-tw__title">MarketToGo –<br>доставка продуктов на дом</div>
                    <p>На складе строго соблюдаются нормы товарного соседства и контроль сроков годности, а для сохранности продуктов во время транспортировки используются только современные автомобили, обеспечивающие необходимый температурный режим.</p>
                    <div class="delivery-tw__list">
                        <div class="delivery-tw__list-item"><img src="{{ asset('assets/images/svg/delivery-i1.svg') }}" alt=''> свежесть<br>и качество</div>
                        <div class="delivery-tw__list-item"><img src="{{ asset('assets/images/svg/delivery-i2.svg') }}" alt=''> все на<br>каждый день</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
