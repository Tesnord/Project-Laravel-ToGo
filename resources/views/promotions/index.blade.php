@extends('layouts.layout')

@section('content')

    <div class="breadcrumb-block">
        <div class="container">
            {{ \DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render('promotions.index') }}
        </div>
    </div>
    <div class="title-main">
        <div class="container">
            <div class="title-main__inner">
                <h1>Акции</h1>
            </div>
        </div>
    </div>
    <div class="actions">
        <div class="container">
            <div class="row">
                @foreach($promotions as $promotion)
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="actions__item">
                            @foreach($promotion->getImages() as $image)
                                <a class="actions__item-img" href="{{ route('promotions.show', $promotion->slug_promotion) }}" style="background-image: url({{ asset($image->src) }})">
                                    <span class="actions__item-label">еще 7 дней</span>
                                </a>
                            @endforeach
                            <div class="actions__item-tx">
                                <div class="actions__item-data">с {{ $start }} по {{ $finish }}</div>
                                <a class="actions__item-title" href="{{ route('promotions.show', $promotion->slug_promotion) }}">{{ $promotion->name }}</a>
                                <div class="actions__item-firm">{{ $brand->firm }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $promotions->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>

@endsection
