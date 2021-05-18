@extends('layouts.layout')

@section('content')

    <div class="breadcrumb-block">
        <div class="container">
            {{ \DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render('search') }}
        </div>
    </div>
    @if(count($products))
    <div class="title-main">
        <div class="container">
            <div class="title-main__inner">
                <h1>Результаты поиска</h1>
            </div>
        </div>
    </div>
    <div class="subscription-tx">
        <div class="container">
            <div class="subscription-tx__inner">
                <p>Результаты поиска по запросу «{{ $search ?? 'пусто' }}»</p>
            </div>
        </div>
    </div>
    <div class="catalog">
        <div class="container">
            <div class="catalog__inner">
                <div class="catalog__list">

                        <div class="row">
                            @foreach($products as $product)
                                @include('layouts.catalog.product')
                            @endforeach
                            @else
                                <div class="tx">
                                    <div class="container">
                                        <div class="tx__inner">
                                            <div class="tx__img"><img src="{{ asset('assets/images/svg/img3.svg') }}" alt=""></div>
                                            <div class="tx__text">
                                                <div class="tx__title">Товар не найден</div>
                                                <p>Простите, по вашему запросу товаров сейчас нет</p><a
                                                    class="button button-secondary" href="{{ route('home') }}">вернуться на главную</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @include('layouts.catalog-min')
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
