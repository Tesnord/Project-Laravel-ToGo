@extends('layouts.layout')

@section('content')

    <div class="catalog-brand-title" style="background-image: url('{{ asset('assets/images/bg-top.jpg') }}')">
        <div class="container">
            <div class="catalog-brand-title__inner">
                {{ \DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render('brands.show', $brand) }}
            </div>
            <div class="catalog-brand-title__holder">
                <div class="catalog-brand-title__main">
                    <div class="catalog-brand-title__logo">
                        @foreach($brand->getImagesLabel() as $img)
                            <img src="{{ asset($img->src) }}" alt="">
                        @endforeach
                    </div>
                    <h1>{{ $brand->name }}</h1>
                    <div class="title-main__numb">{{$products->count()}} товаров</div>
                </div>
                <a class="button button-bord" href="#">Поделиться</a>
            </div>
        </div>
    </div>
    <div class="actions-slider">
        <div class="container">
            <div class="actions-slider__inner">
                <div class="title-main-tw">
                    <h2>Акции магазина</h2><a class="button button-all" href="{{ route('promotions.index') }}">смотреть все</a>
                </div>
                <div class="actions-slider__sldr js-actions-slider">
                    @foreach($brand->promotions as $promotion)
                        <div class="actions-slider__item">
                            <div class="actions__item">
                                @foreach ($promotion->getImages() as $image)
                                    <a class="actions__item-img" href="{{ route('promotions.show', $promotion->slug_promotion) }}" style="background-image: url({{ asset($image->src) }})"></a>
                                @endforeach
                                <div class="actions__item-tx">
                                    <div class="actions__item-data">с {{date('d F', strtotime($promotion->start))}} по {{ date('d F', strtotime($promotion->finish)) }}</div>
                                    <a class="actions__item-title" href="#">{{ $promotion->name }}</a>
                                    <div class="actions__item-firm">{{ $brand->firm }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="catalog">
        <div class="container">
            <div class="catalog__inner">
                @include('layouts.catalog.filter')
                @include('layouts.catalog.product_list')
            </div>
        </div>
    </div>

@endsection
