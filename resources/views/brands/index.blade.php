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
            </div>
        </div>
    </div>
    <div class="actions">
        <div class="container">
            <div class="row">
                @foreach($brands as $brand)
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="actions__item">
                            <a class="actions__item-img" href="{{ route('brands.show') }}" style="background-image: url({{ asset('assets/images/action-img2.jpg') }})"></a>
                            <div class="actions__item-tx">
                                <a class="actions__item-title" href="{{ route('brands.show') }}">title</a>
                                <div class="actions__item-firm">ООО «Мир здоровья»</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pagination-bl">
                <ul class="pagination">
                    <li class="page-item prev"><a class="page-link" href="#"><span class="tx">Предыдущая</span><span class="arrow"><img src="assets/images/svg/arrow2.svg" alt=""></span></a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item mob"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><span class="page-link">...</span></li>
                    <li class="page-item"><a class="page-link" href="#">22</a></li>
                    <li class="page-item next"><a class="page-link" href="#"><span class="tx">следующая</span><span class="arrow"><img src="assets/images/svg/arrow2.svg" alt=""></span></a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
