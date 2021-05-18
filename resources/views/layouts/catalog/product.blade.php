<div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
    <div class="catalog__item catalog__item-bt">
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
            @foreach($product->labels as $labels)
                @foreach($labels->getLabel() as $label)
                    {!! $label->value !!}
                @endforeach
            @endforeach
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
                        <div class="catalog__item-price-old"></div>
                        <div
                            class="catalog__item-price-now">{{ $product->price->value }} {{ $product->price->currency->value }}</div>
                    </div>
                    <form action="{{ route('basket.add', ['id' => $product->id]) }}"
                          method="post" class="form-inline">
                        <button class="button button-primary">купить<img
                                src="{{ asset('assets/images/svg/cart.svg') }}" alt="">
                        </button>
                        @csrf
                    </form>

                </div>
                {{--@if()
                    <a class="catalog__item-offer" href="#">5 предложений</a>
                @endif--}}
            </div>
        </div>
    </div>
</div>
