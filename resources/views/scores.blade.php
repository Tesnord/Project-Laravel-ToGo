@extends('layouts.layout')

@section('content')

<div class="breadcrumb-block">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Главная</a></li>
            <li class="breadcrumb-item active">Баланс баллов</li>
        </ol>
    </div>
</div>
<div class="title-main">
    <div class="container">
        <div class="title-main__inner">
            <h1>Баланс баллов</h1>
        </div>
    </div>
</div>
<div class="point">
    <div class="container">
        <div class="point__inner">
            <div class="point__table">
                <div class="point__table-row">
                    <div class="point__table-cell point__table-cell-title">Дата операции</div>
                    <div class="point__table-cell point__table-cell-title">Операция</div>
                    <div class="point__table-cell point__table-cell-title">Начислено баллов</div>
                </div>
                <div class="point__table-row">
                    <div class="point__table-cell">
                        <div class="point__data">22.02.2021</div>
                    </div>
                    <div class="point__table-cell">
                        <div class="point__title">Покупка в MARKET TO GO</div>
                    </div>
                    <div class="point__table-cell">
                        <div class="point__price">12</div>
                    </div>
                </div>
                <div class="point__table-row">
                    <div class="point__table-cell">
                        <div class="point__data">16.02.2021</div>
                    </div>
                    <div class="point__table-cell">
                        <div class="point__title">Баллы в подарок</div>
                    </div>
                    <div class="point__table-cell">
                        <div class="point__price">120</div>
                    </div>
                </div>
                <div class="point__table-row">
                    <div class="point__table-cell">
                        <div class="point__data">16.02.2021</div>
                    </div>
                    <div class="point__table-cell">
                        <div class="point__title">Покупка в MARKET TO GO</div>
                    </div>
                    <div class="point__table-cell">
                        <div class="point__price">54</div>
                    </div>
                </div>
                <div class="point__table-row">
                    <div class="point__table-cell">
                        <div class="point__data">16.02.2021</div>
                    </div>
                    <div class="point__table-cell">
                        <div class="point__title">Покупка в MARKET TO GO</div>
                    </div>
                    <div class="point__table-cell">
                        <div class="point__price">86</div>
                    </div>
                </div>
                <div class="point__table-row">
                    <div class="point__table-cell">
                        <div class="point__data">16.02.2021</div>
                    </div>
                    <div class="point__table-cell">
                        <div class="point__title">Баллы в подарок</div>
                    </div>
                    <div class="point__table-cell">
                        <div class="point__price">121</div>
                    </div>
                </div>
                <div class="point__table-row">
                    <div class="point__table-cell">
                        <div class="point__data">16.02.2021</div>
                    </div>
                    <div class="point__table-cell">
                        <div class="point__title">Покупка в MARKET TO GO</div>
                    </div>
                    <div class="point__table-cell">
                        <div class="point__price">54</div>
                    </div>
                </div>
                <div class="point__table-row">
                    <div class="point__table-cell">
                        <div class="point__data">16.02.2021</div>
                    </div>
                    <div class="point__table-cell">
                        <div class="point__title">Покупка в MARKET TO GO</div>
                    </div>
                    <div class="point__table-cell">
                        <div class="point__price">86</div>
                    </div>
                </div>
                <div class="point__table-row">
                    <div class="point__table-cell">
                        <div class="point__data">16.02.2021</div>
                    </div>
                    <div class="point__table-cell">
                        <div class="point__title">Баллы в подарок</div>
                    </div>
                    <div class="point__table-cell">
                        <div class="point__price">121</div>
                    </div>
                </div>
            </div><a class="button button-all" href="#">загрузить еще</a>
        </div>
    </div>
</div>

@endsection
