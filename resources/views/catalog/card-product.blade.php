@extends('layout')

@section('content')

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
                        @foreach($product->images as $image)
                            <div class="card-product__slider-nav-item">
                                <div class="card-product__slider-nav-item-img"
                                     style="background-image: url({{ asset($image->src) }})"></div>
                            </div>
                        @endforeach
                    </div>

                    <div class="card-product__slider-for">
                        @foreach($product->images as $image)
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
                            <div class="card-product__description-price-old">{{ $product->old_price }} ₽</div>
                        </div>
                        <div class="card-product__description-numb">{{ $product->weight }} г</div>
                    </div>
                    <div class="card-product__description-btns">
                        <a class="button button-primary" href="#">купить<img
                                src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                        <a class="button button-all" href="#">в избранное<img
                                src="{{ asset('assets/images/svg/like.svg') }}" alt=""></a>
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
                                                    <div class="card-product__tabs-table-cell">{{ $prop_value->property->name }}
                                                    </div>
                                                    <div class="card-product__tabs-table-cell card-product__tabs-table-cell-city">
                                                        {{$prop_value->value}}
                                                    </div>
                                                </div>
                                            @endforeach
                                            {{--<div class="card-product__tabs-table-row">
                                                <div class="card-product__tabs-table-cell">Срок годности:</div>
                                                <div class="card-product__tabs-table-cell">5 суток</div>
                                            </div>
                                            <div class="card-product__tabs-table-row">
                                                <div class="card-product__tabs-table-cell">Температура хранения:</div>
                                                <div class="card-product__tabs-table-cell">10 – 15 °С</div>
                                            </div>
                                            <div class="card-product__tabs-table-row">
                                                <div class="card-product__tabs-table-cell">Калории (100г):</div>
                                                <div class="card-product__tabs-table-cell">340 кКал</div>
                                            </div>
                                            <div class="card-product__tabs-table-row">
                                                <div class="card-product__tabs-table-cell">Белки:</div>
                                                <div class="card-product__tabs-table-cell">10 г</div>
                                            </div>
                                            <div class="card-product__tabs-table-row">
                                                <div class="card-product__tabs-table-cell">Жиры:</div>
                                                <div class="card-product__tabs-table-cell">0.2 г</div>
                                            </div>
                                            <div class="card-product__tabs-table-row">
                                                <div class="card-product__tabs-table-cell">Углеводы:</div>
                                                <div class="card-product__tabs-table-cell">28.5 г</div>
                                            </div>--}}
                                        </div>
                                        <div class="card-product__tabs-storage">
                                            <div class="card-product__tabs-storage-title">Хранение:</div>
                                            <p>В недоступном для детей месте. Не более 10 суток в сухом месте, избегая
                                                чрезмерной влаги и охлаждения.</p>
                                        </div>
                                        <div class="card-product__tabs-label">
                                            <div class="card-product__tabs-label-item"> Халяль<img
                                                    src="{{asset('assets/images/svg/tb-icon1.svg')}}" alt=""></div>
                                            <div class="card-product__tabs-label-item"> Веган<img
                                                    src="{{asset('assets/images/svg/tb-icon2.svg')}}" alt=""></div>
                                            <div class="card-product__tabs-label-item"> Эко<img
                                                    src="{{asset('assets/images/svg/tb-icon3.svg')}}" alt=""></div>
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
                                            <p>Хорошее и натуральное спелое манго, которое будет сочиться и будет
                                                обладать неповторимым вкусом и ароматом, найти достаточно сложно! Если
                                                приобрести манго в любом сетевом магазине, то Вы сами в этом убедитесь.
                                                Их манго жесткие, незрелые, блестят (что явно указывает на их внешнюю
                                                обработку, чтобы они дольше хранились), а волокнистая текстура мякоти...
                                                постоянно приходится доставать из зубов волокна после того как Вы съели
                                                этот фрукт. Вам знакомо это чувство?!</p>
                                            <div class="card-product__tabs-text-mob">
                                                <p>Наши манго из Таиланда лишены этих неудобств, мы их сами встречаем в
                                                    аэропорту после фито-санитарного контроля в Москве, сами везем на
                                                    нашу розничную точку и на доставки! Мы уверены в том, что они ничем
                                                    не обработаны, потому что видим и знаем как они дозревают и портятся
                                                    в своем естественном цикле. Косточки от наших манго прорастают у
                                                    наших клиентов. Текстура мякоти без волокон, отлично можно кушать
                                                    ложкой или делать пюре из манго, что так нравится взрослым и
                                                    детям.</p>
                                                <div class="card-product__tabs-text-title">Состав корзины</div>
                                                <ol>
                                                    <li>Вино игристое итальянское</li>
                                                    <li>Масло оливковое нефильтрованное</li>
                                                    <li>Масло оливковое классическое</li>
                                                    <li>Масло оливковое в жестяной канистре</li>
                                                    <li>Масло оливковое в глиняном горшочке</li>
                                                    <li>Драже конфеты - 1 кг</li>
                                                    <li>Драже конфеты - 0,15 кг</li>
                                                    <li>Уксус бальзамический из Модены</li>
                                                    <li>Соус бальзамический</li>
                                                    <li>Жемчужины (икринки) из бальзамического уксуса</li>
                                                    <li>Итальянский новогодний кулич - 750 гр</li>
                                                    <li>Итальянская паста</li>
                                                    <li>Соус для пасты</li>
                                                    <li>Итальянский кофе</li>
                                                    <li>Итальянский шоколад</li>
                                                    <li>Нуга</li>
                                                    <li>Крокканте</li>
                                                    <li>Артишоки Гурмэ</li>
                                                    <li>Оливки Гурмэ</li>
                                                    <li>Корзина огромная</li>
                                                    <li>Новогодний декор</li>
                                                </ol>
                                            </div>
                                            <div class="card-product__tabs-text-mob-btn js-text-mob-btn">читать еще
                                            </div>
                                        </div>
                                        <div class="card-product__tabs-label">
                                            <div class="card-product__tabs-label-item"> Халяль<img
                                                    src="{{asset('assets/images/svg/tb-icon1.svg')}}" alt=""></div>
                                            <div class="card-product__tabs-label-item"> Веган<img
                                                    src="{{asset('assets/images/svg/tb-icon2.svg')}}" alt=""></div>
                                            <div class="card-product__tabs-label-item"> Эко<img
                                                    src="{{asset('assets/images/svg/tb-icon3.svg')}}" alt=""></div>
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
                                            <div class="card-product__reviews-item">
                                                <div class="card-product__reviews-info">
                                                    <div class="card-product__reviews-title">Лариса Шинкаренко</div>
                                                    <div class="card-product__reviews-rating">
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating.svg')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="card-product__reviews-data">14.01.2021</div>
                                                </div>
                                                <div class="card-product__reviews-description">
                                                    <p>Хорошее и натуральное спелое манго, которое будет сочиться и
                                                        будет обладать неповторимымвкусом и ароматом, найти достаточно
                                                        сложно! Если приобрести манго в любом сетевом магазине,то Вы
                                                        сами в этом убедитесь. Их манго жесткие, незрелые, блестят</p>
                                                </div>
                                            </div>
                                            <div class="card-product__reviews-item">
                                                <div class="card-product__reviews-info">
                                                    <div class="card-product__reviews-title">Лариса Шинкаренко</div>
                                                    <div class="card-product__reviews-rating">
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating.svg')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="card-product__reviews-data">14.01.2021</div>
                                                </div>
                                                <div class="card-product__reviews-description">
                                                    <p>Хорошее и натуральное спелое манго, которое будет сочиться и
                                                        будет обладать неповторимымвкусом и ароматом, найти достаточно
                                                        сложно! Если приобрести манго в любом сетевом магазине,то Вы
                                                        сами в этом убедитесь. Их манго жесткие, незрелые, блестят</p>
                                                    <div class="card-product__reviews-list">
                                                        <a class="card-product__reviews-list-img"
                                                           href="{{asset('assets/images/card-img3.jpg')}}"
                                                           data-fancybox="rev1"
                                                           style="background-image: url({{asset('assets/images/card-img3.jpg')}})"></a>
                                                        <a class="card-product__reviews-list-img"
                                                           href="{{asset('assets/images/card-img4.jpg')}}"
                                                           data-fancybox="rev1"
                                                           style="background-image: url({{asset('assets/images/card-img4.jpg')}})"></a>
                                                        <a class="card-product__reviews-list-img"
                                                           href="{{asset('assets/images/card-img3.jpg')}}"
                                                           data-fancybox="rev1"
                                                           style="background-image: url({{asset('assets/images/card-img3.jpg')}})"></a>
                                                        <a class="card-product__reviews-list-img"
                                                           href="{{asset('assets/images/card-img4.jpg')}}"
                                                           data-fancybox="rev1"
                                                           style="background-image: url({{asset('assets/images/card-img4.jpg')}})"></a>
                                                        <a class="card-product__reviews-list-img"
                                                           href="{{asset('assets/images/card-img3.jpg')}}"
                                                           data-fancybox="rev1"
                                                           style="background-image: url({{asset('assets/images/card-img3.jpg')}})"></a>
                                                        <div
                                                            class="card-product__reviews-list-img card-product__reviews-list-img-all"
                                                            style="background-image: url({{asset('assets/images/card-img4.jpg')}})">
                                                            <span>еще 3</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-product__reviews-item">
                                                <div class="card-product__reviews-info">
                                                    <div class="card-product__reviews-title">Лариса Шинкаренко</div>
                                                    <div class="card-product__reviews-rating">
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating.svg')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="card-product__reviews-data">14.01.2021</div>
                                                </div>
                                                <div class="card-product__reviews-description">
                                                    <p>Хорошее и натуральное спелое манго, которое будет сочиться и
                                                        будет обладать неповторимымвкусом и ароматом, найти достаточно
                                                        сложно! Если приобрести манго в любом сетевом магазине,то Вы
                                                        сами в этом убедитесь. Их манго жесткие, незрелые, блестят</p>
                                                </div>
                                            </div>
                                            <div class="card-product__reviews-item">
                                                <div class="card-product__reviews-info">
                                                    <div class="card-product__reviews-title">Лариса Шинкаренко</div>
                                                    <div class="card-product__reviews-rating">
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating.svg')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="card-product__reviews-data">14.01.2021</div>
                                                </div>
                                                <div class="card-product__reviews-description">
                                                    <p>Хорошее и натуральное спелое манго, которое будет сочиться и
                                                        будет обладать неповторимымвкусом и ароматом, найти достаточно
                                                        сложно! Если приобрести манго в любом сетевом магазине,то Вы
                                                        сами в этом убедитесь. Их манго жесткие, незрелые, блестят</p>
                                                    <div class="card-product__reviews-list"><a
                                                            class="card-product__reviews-list-img"
                                                            href="{{asset('assets/images/card-img3.jpg')}}"
                                                            data-fancybox="rev2"
                                                            style="background-image: url({{asset('assets/images/card-img3.jpg')}})"></a>
                                                        <a class="card-product__reviews-list-img"
                                                           href="{{asset('assets/images/card-img4.jpg')}}"
                                                           data-fancybox="rev2"
                                                           style="background-image: url({{asset('assets/images/card-img4.jpg')}})"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-product__reviews-item">
                                                <div class="card-product__reviews-info">
                                                    <div class="card-product__reviews-title">Лариса Шинкаренко</div>
                                                    <div class="card-product__reviews-rating">
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating.svg')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="card-product__reviews-data">14.01.2021</div>
                                                </div>
                                                <div class="card-product__reviews-description">
                                                    <p>Хорошее и натуральное спелое манго, которое будет сочиться и
                                                        будет обладать неповторимымвкусом и ароматом, найти достаточно
                                                        сложно! Если приобрести манго в любом сетевом магазине,то Вы
                                                        сами в этом убедитесь. Их манго жесткие, незрелые, блестят</p>
                                                </div>
                                            </div>
                                            <div class="card-product__reviews-item">
                                                <div class="card-product__reviews-info">
                                                    <div class="card-product__reviews-title">Лариса Шинкаренко</div>
                                                    <div class="card-product__reviews-rating">
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating.svg')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="card-product__reviews-data">14.01.2021</div>
                                                </div>
                                                <div class="card-product__reviews-description">
                                                    <p>Хорошее и натуральное спелое манго, которое будет сочиться и
                                                        будет обладать неповторимымвкусом и ароматом, найти достаточно
                                                        сложно! Если приобрести манго в любом сетевом магазине,то Вы
                                                        сами в этом убедитесь. Их манго жесткие, незрелые, блестят</p>
                                                    <div class="card-product__reviews-list"><a
                                                            class="card-product__reviews-list-img"
                                                            href="{{asset('assets/images/card-img3.jpg')}}"
                                                            data-fancybox="rev3"
                                                            style="background-image: url({{asset('assets/images/card-img3.jpg')}})"></a><a
                                                            class="card-product__reviews-list-img"
                                                            href="{{asset('assets/images/card-img4.jpg')}}"
                                                            data-fancybox="rev3"
                                                            style="background-image: url({{asset('assets/images/card-img4.jpg')}})"></a><a
                                                            class="card-product__reviews-list-img"
                                                            href="{{asset('assets/images/card-img4.jpg')}}"
                                                            data-fancybox="rev3"
                                                            style="background-image: url({{asset('assets/images/card-img4.jpg')}})"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-product__reviews-item d-none">
                                                <div class="card-product__reviews-info">
                                                    <div class="card-product__reviews-title">Лариса Шинкаренко</div>
                                                    <div class="card-product__reviews-rating">
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating.svg')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="card-product__reviews-data">14.01.2021</div>
                                                </div>
                                                <div class="card-product__reviews-description">
                                                    <p>Хорошее и натуральное спелое манго, которое будет сочиться и
                                                        будет обладать неповторимымвкусом и ароматом, найти достаточно
                                                        сложно! Если приобрести манго в любом сетевом магазине,то Вы
                                                        сами в этом убедитесь. Их манго жесткие, незрелые, блестят</p>
                                                    <div class="card-product__reviews-list"><a
                                                            class="card-product__reviews-list-img"
                                                            href="{{asset('assets/images/card-img3.jpg')}}"
                                                            data-fancybox="rev3"
                                                            style="background-image: url({{asset('assets/images/card-img3.jpg')}})"></a><a
                                                            class="card-product__reviews-list-img"
                                                            href="{{asset('assets/images/card-img4.jpg')}}"
                                                            data-fancybox="rev3"
                                                            style="background-image: url({{asset('assets/images/card-img4.jpg')}})"></a><a
                                                            class="card-product__reviews-list-img"
                                                            href="{{asset('assets/images/card-img4.jpg')}}"
                                                            data-fancybox="rev3"
                                                            style="background-image: url({{asset('assets/images/card-img4.jpg')}})"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-product__reviews-item d-none">
                                                <div class="card-product__reviews-info">
                                                    <div class="card-product__reviews-title">Лариса Шинкаренко</div>
                                                    <div class="card-product__reviews-rating">
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                alt=""></div>
                                                        <div class="card-product__reviews-rating-item"><img
                                                                src="{{asset('assets/images/svg/rating.svg')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="card-product__reviews-data">14.01.2021</div>
                                                </div>
                                                <div class="card-product__reviews-description">
                                                    <p>Хорошее и натуральное спелое манго, которое будет сочиться и
                                                        будет обладать неповторимымвкусом и ароматом, найти достаточно
                                                        сложно! Если приобрести манго в любом сетевом магазине,то Вы
                                                        сами в этом убедитесь. Их манго жесткие, незрелые, блестят</p>
                                                    <div class="card-product__reviews-list"><a
                                                            class="card-product__reviews-list-img"
                                                            href="{{asset('assets/images/card-img3.jpg')}}"
                                                            data-fancybox="rev3"
                                                            style="background-image: url({{asset('assets/images/card-img3.jpg')}})"></a><a
                                                            class="card-product__reviews-list-img"
                                                            href="{{asset('assets/images/card-img4.jpg')}}"
                                                            data-fancybox="rev3"
                                                            style="background-image: url({{asset('assets/images/card-img4.jpg')}})"></a><a
                                                            class="card-product__reviews-list-img"
                                                            href="{{asset('assets/images/card-img4.jpg')}}"
                                                            data-fancybox="rev3"
                                                            style="background-image: url({{asset('assets/images/card-img4.jpg')}})"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-product__reviews-btn js-card-product-reviews">смотреть +75
                                                еще
                                            </div>
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
