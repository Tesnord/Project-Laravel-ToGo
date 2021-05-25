@extends('layouts.layout')

@section('content')

    <div class="breadcrumb-block">
        <div class="container">
            {{--{{ \DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render('catalog.product', ['slug' => $product->slug_product]) }}--}}
        </div>
    </div>
    <div class="card-product">
        <div class="container">
            <div class="card-product__inner">
                <div class="card-product__top-mob">
                    <div class="card-product__description-top">
                        <div class="card-product__description-top-item">Артикул: {{ $product->vendor_code }}</div>
                        <div class="card-product__description-top-item">В наличии</div>
                    </div>
                    <h1>{{ $product->title }}</h1>
                </div>
                <div class="card-product__slider js-card-product-slider">
                    <div class="card-product__slider-nav">
                        @foreach($product->getImages() as $image)
                            <div class="card-product__slider-nav-item">
                                <div class="card-product__slider-nav-item-img"
                                     style="background-image: url({{ asset($image->src) }})"></div>
                            </div>
                        @endforeach
                    </div>

                    <div class="card-product__slider-for">
                        @foreach($product->getImages() as $image)
                            <a class="card-product__slider-for-item" href="{{ asset($image->src) }}"
                               data-fancybox="cart-prod"
                               style="background-image: url({{ asset($image->src)}})"></a>
                        @endforeach
                    </div>

                </div>
                <div class="card-product__description">
                    <div class="card-product__description-top">
                        <div class="card-product__description-top-item">Артикул: {{ $product->vendor_code }}</div>
                        <div class="card-product__description-top-item">В наличии</div>
                    </div>
                    <h1>{{ $product->title }}</h1>
                    <p>{{ $product->desc_title }}</p>
                    <div class="card-product__description-points">+2.5 балла</div>
                    <div class="card-product__description-info">
                        <div class="card-product__description-price">
                            <div class="card-product__description-price-now">{{ $price }} {{ $currency }}</div>
                            <div class="card-product__description-price-old"></div>
                        </div>
                        <div class="card-product__description-numb">{{ $product->weight }} г</div>
                    </div>
                    <div class="card-product__description-btns">
                        <div class="form-inline">
                            <a class="button button-primary">купить<img
                                    src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            {{--<a class="button button-all event-button to-favorite" href="#" data-product-id="{{ $product->id  }}">в избранное<img
                                    src="{{ asset('assets/images/svg/like.svg') }}" alt=""></a>--}}
                            @if(empty($product->isFavorite()))
                                <a class="button button-all" href="#"
                                   data-product-id="{{ $product->id  }}">в избранное<img
                                        src="{{ asset('assets/images/svg/like.svg') }}" alt=""></a>
                            @else
                                <a class="button button-all" href="#"
                                   data-product-id="{{ $product->id  }}">в избранное<img
                                        src="{{ asset('assets/images/svg/like2.svg') }}" alt=""></a>
                            @endif
                        </div>
                    </div>
                    <a class="card-product__description-link" href="#"><img
                            src="{{ asset('assets/images/svg/icon1.svg') }}" alt=""><span>Получайте товары по более привлекательной цене</span></a>
                </div>
                <div class="card-product__all">
                    <div class="card-product__all-reviews">
                        <div class="card-product__all-reviews-rating">
                            <div class="card-product__all-reviews-rating-now">3,6</div>
                            <div class="card-product__all-reviews-rating-all">(3 отзыва)</div>
                        </div>
                        <div class="card-product__all-reviews-list">
                            <div class="card-product__all-reviews-list-item-act"><img
                                    src="{{asset('assets/images/svg/rating-active.svg')}}" alt=""></div>
                            <div class="card-product__all-reviews-list-item-act"><img
                                    src="{{asset('assets/images/svg/rating-active.svg')}}" alt=""></div>
                            <div class="card-product__all-reviews-list-item-act"><img
                                    src="{{asset('assets/images/svg/rating-active.svg')}}" alt=""></div>
                            <div class="card-product__all-reviews-list-item"><img
                                    src="{{asset('assets/images/svg/rating-active.svg')}}" alt=""></div>
                            <div class="card-product__all-reviews-list-item"><img
                                    src="{{asset('assets/images/svg/rating.svg')}}" alt=""></div>
                        </div>
                    </div>
                    <div class="card-product__all-logo"><img src="{{asset('assets/images/logo-card.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="card-product__inner-tw">
                <div class="card-product__left">
                    <div class="card-product__tabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#card-item1" id="card-item1-tab" data-toggle="tab"
                                   role="tab" aria-controls="card-item1" aria-selected="true">характеристики</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="#card-item2" id="card-item2-tab" data-toggle="tab" role="tab"
                                   aria-controls="card-item2" aria-selected="false">Описание</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="#card-item3" id="card-item3-tab" data-toggle="tab" role="tab"
                                   aria-controls="card-item3" aria-selected="false">Отзывы</a></li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="card-item1" role="tabpanel"
                                 aria-labelledby="card-item1-tab">
                                <div class="card-product__tabs-holder">
                                    <div class="card-product__tabs-inner">
                                        <div class="card-product__tabs-table">
                                            @foreach($properties_values as $prop_value)
                                                <div class="card-product__tabs-table-row">
                                                    <div
                                                        class="card-product__tabs-table-cell">{{ $prop_value->property->name }}
                                                    </div>
                                                    <div
                                                        class="card-product__tabs-table-cell card-product__tabs-table-cell-city">
                                                        {{$prop_value->value}}
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="card-product__tabs-storage">
                                            <div class="card-product__tabs-storage-title">Хранение:</div>
                                            <p>В недоступном для детей месте. Не более 10 суток в сухом месте, избегая
                                                чрезмерной влаги и охлаждения.</p>
                                        </div>
                                        <div class="card-product__tabs-label">
                                            @foreach($product->descriptions as $desc)
                                                <div class="card-product__tabs-label-item">
                                                    {{ $desc->name }}
                                                    @foreach($desc->getImages() as $img)
                                                        <img src="{{asset($img->src)}}" alt="">
                                                    @endforeach
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="card-product__right">
                                        <div class="card-product__bann">
                                            <div class="card-product__bann-icon"><img
                                                    src="{{asset('assets/images/svg/bann-icon.svg')}}" alt=""></div>
                                            <div class="card-product__bann-tx">Наш курьер доставит ваш заказ в течение
                                                1,5 часа
                                            </div>
                                            <a class="button button-bord2" href="#">Узнать больше</a>
                                        </div>
                                        <div class="card-product__deliv">
                                            <div class="card-product__deliv-tx">Бесплатная доставки от 3 000 руб</div>
                                            <div class="card-product__deliv-icon"><img
                                                    src="{{asset('assets/images/svg/inf.svg')}}" alt=""></div>
                                            <div class="card-product__deliv-icon-inf">блабла</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="card-item2" role="tabpanel" aria-labelledby="card-item2-tab">
                                <div class="card-product__tabs-holder">
                                    <div class="card-product__tabs-inner">
                                        <div class="card-product__tabs-text">
                                            {!! $product->description !!}
                                        </div>
                                        <div class="card-product__tabs-label">
                                            @foreach($product->descriptions as $desc)
                                                <div class="card-product__tabs-label-item">
                                                    {{ $desc->name }}
                                                    @foreach($desc->getImages() as $img)
                                                        <img src="{{asset($img->src)}}" alt="">
                                                    @endforeach
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="card-product__right">
                                        <div class="card-product__bann">
                                            <div class="card-product__bann-icon"><img
                                                    src="{{asset('assets/images/svg/bann-icon.svg')}}" alt=""></div>
                                            <div class="card-product__bann-tx">Наш курьер доставит ваш заказ в течение
                                                1,5 часа
                                            </div>
                                            <a class="button button-bord2" href="#">Узнать больше</a>
                                        </div>
                                        <div class="card-product__deliv">
                                            <div class="card-product__deliv-tx">Бесплатная доставки от 3 000 руб</div>
                                            <div class="card-product__deliv-icon"><img
                                                    src="{{asset('assets/images/svg/inf.svg')}}" alt="">
                                                <div class="card-product__deliv-icon-inf">блабла</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="card-item3" role="tabpanel" aria-labelledby="card-item3-tab">
                                <div class="card-product__tabs-holder">
                                    <div class="card-product__tabs-inner">
                                        <div class="card-product__reviews">
                                            @foreach($reviews as $review)
                                                <div class="card-product__reviews-item">
                                                    <div class="card-product__reviews-info">
                                                        <div
                                                            class="card-product__reviews-title">{{ $review->user->name }}</div>
                                                        <div class="card-product__reviews-rating">
                                                            @for($i = 0; $i < 5; $i++)
                                                                @if(floor($review->rating) - $i >= 1)
                                                                    <div class="card-product__reviews-rating-item">
                                                                        <img
                                                                            src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                            alt="">
                                                                    </div>
                                                                @else
                                                                    <div class="card-product__reviews-rating-item">
                                                                        <img
                                                                            src="{{asset('assets/images/svg/rating.svg')}}"
                                                                            alt="">
                                                                    </div>
                                                                @endif
                                                            @endfor
                                                        </div>
                                                        <div
                                                            class="card-product__reviews-data">{{ $review->created_at->format('d.m.Y') }}</div>
                                                    </div>
                                                    <div class="card-product__reviews-description">
                                                        <p>{{ $review->description }}</p>
                                                        <div class="card-product__reviews-list">
                                                            @foreach($review->getImages() as $image)

                                                                <a class="card-product__reviews-list-img"
                                                                   href="{{ asset($image->src) }}"
                                                                   data-fancybox="rev1"
                                                                   style="background-image: url({{ asset($image->src) }})"></a>
                                                            @endforeach
                                                                    <div
                                                                    class="card-product__reviews-list-img card-product__reviews-list-img-all"
                                                                    style="background-image: url({{ asset($image->src) }})">
                                                                    <span>еще 3</span></div>


                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="card-product__right">
                                        <div class="card-product__bann">
                                            <div class="card-product__bann-icon"><img
                                                    src="{{asset('assets/images/svg/bann-icon2.svg')}}" alt=""></div>
                                            <div class="card-product__bann-tx">Спасибо, что делитесь своим мнением</div>
                                            <a class="button button-bord2" href="#">Написать отзыв</a>
                                        </div>
                                        <div class="card-product__deliv">
                                            <div class="card-product__deliv-tx">Бесплатная доставки от 3 000 руб</div>
                                            <div class="card-product__deliv-icon"><img
                                                    src="{{asset('assets/images/svg/inf.svg')}}"
                                                    alt="">
                                                <div class="card-product__deliv-icon-inf">блабла</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-product__other">
                        <h3>Другие предложения продавцов на сайте</h3>
                        <div class="card-product__product">
                            <div class="card-product__product-row">
                                <div class="card-product__product-descr">
                                    <div class="card-product__product-img"><img
                                            src="{{asset('assets/images/logo-i.png')}}" alt="">
                                    </div>
                                    <div class="card-product__product-title">Мир здоровья</div>
                                    <div class="card-product__product-firm">ООО «Свежие продукты»</div>
                                </div>
                                <div class="card-product__product-price">
                                    <div class="card-product__product-price-now">121 ₽</div>
                                    <div class="card-product__product-price-old">145 ₽</div>
                                </div>
                                <div class="card-product__product-btn"><a class="button button-primary"
                                                                          href="#">купить<img
                                            src="{{asset('assets/images/svg/cart.svg')}}" alt=""></a></div>
                            </div>
                            <div class="card-product__product-row">
                                <div class="card-product__product-descr">
                                    <div class="card-product__product-img"><img
                                            src="{{asset('assets/images/logo-i.png')}}" alt="">
                                    </div>
                                    <div class="card-product__product-title">Мир здоровья</div>
                                    <div class="card-product__product-firm">ООО «Свежие продукты»</div>
                                </div>
                                <div class="card-product__product-price">
                                    <div class="card-product__product-price-now">121 ₽</div>
                                    <div class="card-product__product-price-old">145 ₽</div>
                                </div>
                                <div class="card-product__product-btn"><a class="button button-primary"
                                                                          href="#">купить<img
                                            src="{{asset('assets/images/svg/cart.svg')}}" alt=""></a></div>
                            </div>
                            <div class="card-product__product-row">
                                <div class="card-product__product-descr">
                                    <div class="card-product__product-img"><img
                                            src="{{asset('assets/images/logo-i.png')}}" alt="">
                                    </div>
                                    <div class="card-product__product-title">Мир здоровья</div>
                                    <div class="card-product__product-firm">ООО «Свежие продукты»</div>
                                </div>
                                <div class="card-product__product-price">
                                    <div class="card-product__product-price-now">121 ₽</div>
                                    <div class="card-product__product-price-old">145 ₽</div>
                                </div>
                                <div class="card-product__product-btn"><a class="button button-primary"
                                                                          href="#">купить<img
                                            src="{{asset('assets/images/svg/cart.svg')}}" alt=""></a></div>
                            </div>
                            <div class="card-product__product-row">
                                <div class="card-product__product-descr">
                                    <div class="card-product__product-img"><img
                                            src="{{asset('assets/images/logo-i.png')}}" alt="">
                                    </div>
                                    <div class="card-product__product-title">Мир здоровья</div>
                                    <div class="card-product__product-firm">ООО «Свежие продукты»</div>
                                </div>
                                <div class="card-product__product-price">
                                    <div class="card-product__product-price-now">121 ₽</div>
                                    <div class="card-product__product-price-old">145 ₽</div>
                                </div>
                                <div class="card-product__product-btn"><a class="button button-primary"
                                                                          href="#">купить<img
                                            src="{{asset('assets/images/svg/cart.svg')}}" alt=""></a></div>
                            </div>
                            <div class="card-product__product-row d-none">
                                <div class="card-product__product-descr">
                                    <div class="card-product__product-img"><img
                                            src="{{asset('assets/images/logo-i.png')}}" alt="">
                                    </div>
                                    <div class="card-product__product-title">Мир здоровья</div>
                                    <div class="card-product__product-firm">ООО «Свежие продукты»</div>
                                </div>
                                <div class="card-product__product-price">
                                    <div class="card-product__product-price-now">121 ₽</div>
                                    <div class="card-product__product-price-old">145 ₽</div>
                                </div>
                                <div class="card-product__product-btn"><a class="button button-primary"
                                                                          href="#">купить<img
                                            src="{{asset('assets/images/svg/cart.svg')}}" alt=""></a></div>
                            </div>
                            <div class="card-product__product-btn-main js-card-product">смотреть +75 еще</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.catalog-min')

@endsection
