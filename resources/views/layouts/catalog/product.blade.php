<div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
    <div class="catalog__item {{ $product->isFavorite() ? 'catalog__item-favorites' : '' }}"
         data-product-id="{{ $product->id  }}">
        <div class="catalog__item-top">
            <a class="catalog__item-img"
               href="{{ route('catalog.product', ['slug_product' => $product->slug_product]) }}">
                @if($product->preview_picture !== null)
                    <img
                        src="{{ $product->preview_picture->src }}"
                        alt="">
                @else
                    <img
                        src="/assets/images/svg/logo.svg"
                        alt="">
                @endif
            </a>
            <div class="catalog__item-fav">
                <svg>
                    <use xlink:href="#like"></use>
                </svg>
            </div>
            {!! $product->labels() !!}
        </div>
        <div class="catalog__item-tx">
            <a class="catalog__item-title"
               href="{{ route('catalog.product', ['slug_product' => $product->slug_product]) }}">
                {{ $product->title }}
            </a>
            <div class="catalog__item-numb">{{ $product->weight }} г</div>
            <div class="catalog__item-bottom">
                <div class="catalog__item-info">
                    <div class="catalog__item-price">
                        <div class="catalog__item-price-now">
                            {{ $product->price->value }}
                            {{ $product->price->currency->value }}
                        </div>
                    </div>
                    <div class="catalog__item-button">
                        <a class="catalog__item-buy" style="color: #ffffff" data-product-id="{{ $product->id }}">
                            купить
                            <img src="{{ asset('assets/images/svg/cart.svg')}}" alt="">
                        </a>
                    </div>
{{--                    <div class="catalog__item-amount" data-product-id="{{ $product->id }}">--}}
{{--                        <input type="text" min="1" max="20" value="{{$count->quantityInBasket}}">--}}
{{--                        <span class="up">--}}
{{--                            <img src="{{ asset('assets/images/svg/plus.svg') }}" alt="">--}}
{{--                        </span>--}}
{{--                        <span class="down">--}}
{{--                            <img src="{{ asset('assets/images/svg/minus.svg') }}" alt="">--}}
{{--                        </span>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
