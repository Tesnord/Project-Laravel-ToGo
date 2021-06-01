@extends('layouts.layout')

@section('content')

    <div class="breadcrumb-block">
        <div class="container">
            {{ \DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render('promotions.show', $promotion) }}
        </div>
    </div>
    <div class="title-main">
        <div class="container">
            <div class="title-main__inner">
                <h1>{{ $promotion->name }}</h1>
            </div>
        </div>
    </div>
    <div class="actions-item">
        <div class="container">
            <div class="actions-item__inner">
                <div class="actions-item__left">
                    @foreach($promotion->getImages() as $image)
                        <div class="actions-item__img"><img class="img-fluid" src="{{ asset($image->src) }}" alt=""></div>
                    @endforeach
                    <div class="actions-item__info">
                        <div class="actions-item__info-item">
                            <div class="actions-item__info-title">дата публикации</div>
                            <div class="actions-item__info-tx">18 января</div>
                        </div>
                        <div class="actions-item__info-item">
                            <div class="actions-item__info-title">срок действия акции</div>
                            <div class="actions-item__info-tx">{{ $start }} - {{ $finish }}</div>
                        </div>
                    </div>
                </div>
                <div class="actions-item__right">
                    <div class="actions-item__top">
                        <div class="actions-item__logo">
                            @foreach($brand->getImagesLabel() as $img)
                            <img class="img-fluid" src="{{ asset($img->src) }}" alt="">
                            @endforeach
                        </div>
                        <div class="actions-item__title">{{ $brand->name }}</div>
                    </div>
                    {!! $promotion->description !!}
                </div>
            </div>
        </div>
    </div>
    <div class="title-main tw">
        <div class="container">
            <div class="title-main__inner">
                <h1>Товары</h1>
                <div class="title-main__numb">{{ $products->count() }} товаров</div>
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
