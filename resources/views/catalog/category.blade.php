@extends('layouts.layout')

@section('content')

    <div class="breadcrumb-block">
        <div class="container">
            {{ \DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render('catalog.index', $category) }}

        </div>
    </div>
    <div class="title-main">
        <div class="container">
            <div class="title-main__inner">
                <h1>{{ $category->name }}</h1>
                <div class="title-main__numb">{{ $category->qProductsRcsv()->get()->count() }}</div>
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
