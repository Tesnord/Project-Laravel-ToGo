@extends('layouts.layout')

@section('content')

    <div class="breadcrumb-block">
        <div class="container">
            {{ \DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render('brands.index') }}
        </div>
    </div>
            <div class="title-main">
                <div class="container">
                    <div class="title-main__inner">
                        <h1>Бренды</h1>
                        <div class="title-main__numb">{{ $brands->count() }}</div>
                    </div>
                </div>
            </div>
            <div class="brands">
                <div class="container">
                    <div class="brands__inner">
                        <div class="brands__list">
                            <a class="brands__list-item brands__list-item-main" href="{{ route('brands.index') }}">Все</a>
                            @foreach($letters->slice(0, 25) as $letter)
                                    <a class="brands__list-item" href="{{ route('brands.show', $letter->value) }}">
                                        {{ $letter->letter }}
                                    </a>
                            @endforeach
                            <a class="brands__list-item" href="#">0 - 9</a>
                        </div>
                        <div class="brands__list">
                            @foreach($letters->slice(26) as $letter)
                                <a class="brands__list-item" href="{{ route('brands.show', $letter->value) }}">
                                    {{ $letter->letter }}
                                </a>
                            @endforeach
                        </div>

                        <div class="brands__all">
                            <div class="brands__all-title">{{ $letterBrand }}</div>
                            <div class="brands__all-inner">
                                @foreach($brands as $brand)
                                    <a class="brands__all-item" href="{{ route('catalog.brand', $brand->slug_brand) }}">
                                        <span>{{ $brand->name }}</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
@endsection
