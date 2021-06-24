@extends('layouts.layout')

@section('content')
    <div class="breadcrumb-block">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Главная</a></li>
                <li class="breadcrumb-item active">Доставка и оплата</li>
            </ol>
        </div>
    </div>
    <div class="container">
        <div class="text">
            <h1>Страница Доставка и оплата</h1>
        </div>
    </div>
    @include('layouts.error.notpage')

@endsection
