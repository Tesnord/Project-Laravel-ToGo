@extends('layouts.layout')

@section('content')

    <div class="breadcrumb-block">
        <div class="container">
            {{--{{ \DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render('catalog.category') }}--}}
        </div>
    </div>
    <div class="title-main">
        <div class="container">
            <div class="title-main__inner">
                <h1>{{ $category->name }}</h1>
                <div class="title-main__numb">{{ $category->getProductsRcsv()->count() }}</div>
            </div>
        </div>
    </div>

    <div class="catalog">
        <div class="container">
            <div class="catalog__inner">
                <div class="catalog__top">
                    <div class="filter">
                        <div class="filter__btn">
                            <svg>
                                <use xlink:href="#filter"></use>
                            </svg>
                            фильтр
                        </div>
                        <div class="filter__top-close js-filter-close"><img
                                src="{{ asset('assets/images/svg/close2.svg') }}" alt=""></div>
                        <div class="filter-bl">
                            <div class="filter__top">
                                <div class="filter__top-title">Фильтр</div>
                                <div class="filter__top-close js-filter-close"><img
                                        src="{{ asset('assets/images/svg/close2.svg') }}" alt=""></div>
                            </div>
                            <div class="filter__item open">
                                <div class="filter__title open">цена</div>
                                <div class="filter__holder" style="display: block;">
                                    <div class="filter__container">
                                        <div class="filter__range polzunok-container-6">
                                            <div class="filter__range-item">
                                                <input class="polzunok-input-6-left" type="text" value="от">
                                            </div>
                                            <div class="filter__range-item">
                                                <input class="polzunok-input-6-right" type="text" value="до">
                                            </div>
                                            <div class="polzunok-6"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter__item filter__item-list open">
                                <div class="filter__title open">бренд</div>
                                <div class="filter__holder" style="display: block;">
                                    <div class="filter__container">
                                        <div class="filter__group-check">
                                            <div class="filter__check">
                                                <input type="checkbox" id="equipment-brand1" name="equipment-brand"
                                                       checked>
                                                <label for="equipment-brand1">Дары Кубани</label>
                                            </div>
                                        </div>
                                        <div class="filter__group-check">
                                            <div class="filter__check">
                                                <input type="checkbox" id="equipment-brand2" name="equipment-brand">
                                                <label for="equipment-brand2">Лукошко</label>
                                            </div>
                                        </div>
                                        <div class="filter__group-check">
                                            <div class="filter__check">
                                                <input type="checkbox" id="equipment-brand3" name="equipment-brand">
                                                <label for="equipment-brand3">Бабушкины рецепты</label>
                                            </div>
                                        </div>
                                        <div class="filter__group-check">
                                            <div class="filter__check">
                                                <input type="checkbox" id="equipment-brand4" name="equipment-brand">
                                                <label for="equipment-brand4">Маруся</label>
                                            </div>
                                        </div>
                                        <div class="filter__group-check">
                                            <div class="filter__check">
                                                <input type="checkbox" id="equipment-brand5" name="equipment-brand">
                                                <label for="equipment-brand5">Дары Кубани</label>
                                            </div>
                                        </div>
                                        <div class="filter__group-check">
                                            <div class="filter__check">
                                                <input type="checkbox" id="equipment-brand6" name="equipment-brand">
                                                <label for="equipment-brand6">Лукошко</label>
                                            </div>
                                        </div>
                                        <div class="filter__group-check">
                                            <div class="filter__check">
                                                <input type="checkbox" id="equipment-brand7" name="equipment-brand">
                                                <label for="equipment-brand7">Лукошко</label>
                                            </div>
                                        </div>
                                        <div class="filter__group-check">
                                            <div class="filter__check">
                                                <input type="checkbox" id="equipment-brand8" name="equipment-brand">
                                                <label for="equipment-brand8">Лукошко</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter__item open">
                                <div class="filter__title open">Дополнительно</div>
                                <div class="filter__holder" style="display: block;">
                                    <div class="filter__container">
                                        <div class="filter__group-check">
                                            <div class="filter__check">
                                                <input type="checkbox" id="dop1" name="dop" checked>
                                                <label for="dop1">Халяль</label>
                                            </div>
                                        </div>
                                        <div class="filter__group-check">
                                            <div class="filter__check">
                                                <input type="checkbox" id="dop2" name="dop">
                                                <label for="dop2">Эко</label>
                                            </div>
                                        </div>
                                        <div class="filter__group-check">
                                            <div class="filter__check">
                                                <input type="checkbox" id="dop3" name="dop">
                                                <label for="dop3">Веган</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter__item filter__item-bord open">
                                <div class="filter__holder">
                                    <div class="filter__container">
                                        <div class="filter__group-check">
                                            <div class="filter__check">
                                                <input type="checkbox" id="all1" name="all">
                                                <label for="al1">В наличии</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter__item filter__item-bord open">
                                <div class="filter__holder">
                                    <div class="filter__container">
                                        <div class="filter__group-check">
                                            <div class="filter__check">
                                                <input type="checkbox" id="act1" name="act">
                                                <label for="act1">Акции</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter__btn-b"><a class="button button-primary" href="#">Показать 40
                                    товаров</a><a class="button button-tx" href="#">Сбросить</a></div>
                        </div>
                    </div>
                    <div class="catalog__sorting">
                        <div class="catalog__sorting-title">сортировать:</div>
                        <ul class="catalog__sorting-list">
                            <li><a href="#">% скидки</a></li>
                            <li class="active"><a href="#">цене</a></li>
                        </ul>
                    </div>
                </div>
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
                                        <div class="catalog__item-label catalog__item-label-hit"><span>хит</span>
                                        </div>
                                    </div>
                                    <div class="catalog__item-tx"><a class="catalog__item-title"
                                                                     href="{{ route('catalog.product', ['slug_product' => $product->slug_product]) }}">{{ $product->title }}</a>
                                        <div class="catalog__item-numb">{{ $product->weight }}</div>
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
                    </div>
                    <div class="pagination-bl">
                        <ul class="pagination">
                            <li class="page-item prev"><a class="page-link" href="#"><span
                                        class="tx">Предыдущая</span><span class="arrow"><img
                                            src="{{ asset('assets/images/svg/arrow2.svg') }}" alt=""></span></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item mob"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><span class="page-link">...</span></li>
                            <li class="page-item"><a class="page-link" href="#">22</a></li>
                            <li class="page-item next"><a class="page-link" href="#"><span
                                        class="tx">следующая</span><span class="arrow"><img
                                            src="{{ asset('assets/images/svg/arrow2.svg') }}" alt=""></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
