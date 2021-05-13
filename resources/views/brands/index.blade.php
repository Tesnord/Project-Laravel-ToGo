@extends('layouts.layout')

@section('content')

    <div class="container">
        <p>Допустим это станица Брендов</p>
        <a href="{{ route('brands.show') }}">Страница бренда</a>
    </div>
@endsection
