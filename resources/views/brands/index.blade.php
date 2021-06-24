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
                <div class="title-main__numb">1500</div>
            </div>
        </div>
    </div>
    <div class="brands">
        <div class="container">
            <div class="brands__inner">
                <div class="brands__list">
                    <a class="brands__list-item brands__list-item-main" href="{{ route('brands.index') }}" data-order="all">Все</a>
                    @foreach ($en as $key => $value)
                        <a class="brands__list-item" href="/brands/en-{{$value}}" data-order="en-{{$value}}">{{$key}}</a>
                    @endforeach
                    <a class="brands__list-item" data-order="number">0-9</a>
                </div>
                <div class="brands__list">
                    @foreach ($ru as $key => $value)
                        <a class="brands__list-item" href="/brands/ru-{{$value}}" data-order="ru-{{$value}}">{{$key}}</a>
                    @endforeach
                </div>
                <div class="brands__all">
                    @foreach($brands as $letter => $letterBrand)
                        @if(!empty($letterBrand))
                            <div class="brands__all-title">{{ $letter }}</div>
                            <div class="brands__all-inner">
                                @foreach($letterBrand as $brand)
                                    <a class="brands__all-item" href="/brands/{{ $brand->id}}">
                                        <span>{{ $brand->name }}</span>
                                    </a>
                                @endforeach
                                @foreach($en as $key)
                                    @if($letter == $key)
                                        <a class="brands__all-item brands__all-item-link" data-order="en-{{ $letter }}">
                                            <span>Все бренды на {{ $letter }}</span>
                                        </a>
                                    @endif
                                @endforeach
                                @foreach($ru as $key => $value)
                                    @if($letter == $key)
                                        <a class="brands__all-item brands__all-item-link" data-order="ru-{{ $value }}">
                                            <span>Все бренды на {{ $key }}</span>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
