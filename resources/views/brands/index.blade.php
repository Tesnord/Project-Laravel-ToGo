@extends('layouts.layout')

@section('content')

    <div class="container">
        {{ \DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render('brands.index') }}
        <p>Допустим это станица Брендов</p>
        <a href="{{ route('brands.show') }}">Страница бренда</a>
    </div>
@endsection
