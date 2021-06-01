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
                            <a class="actions__item-img" href="{{ route('brands.show', $brand->slug_brand) }}" style="background-image: url({{ asset('assets/images/action-img2.jpg') }})"></a>
                            <div class="actions__item-tx">
                                <a class="actions__item-title" href="{{ route('brands.show', $brand->slug_brand) }}">title</a>
                                <div class="actions__item-firm">ООО «Мир здоровья»</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $brands->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>
@endsection
