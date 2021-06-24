@foreach($brands as $letter => $letterBrand)
    @if(!empty($letterBrand))
        <div class="brands__all-title">{{ $letter }}</div>
        <div class="brands__all-inner">
            @foreach($letterBrand as $brand)
                <a class="brands__all-item" href="/brands/{{ $brand->id}}">
                    <span>{{ $brand->name }}</span>
                </a>
            @endforeach
            @foreach($en as $key)
                @if($letter == $key)
                    <a class="brands__all-item brands__all-item-link" data-order="en-{{ $letter }}">
                        <span>Все бренды на {{ $letter }}</span>
                    </a>
                @endif
            @endforeach
            @foreach($ru as $key => $value)
                @if($letter == $key)
                    <a class="brands__all-item brands__all-item-link" data-order="ru-{{ $value }}">
                        <span>Все бренды на {{ $key }}</span>
                    </a>
                @endif
            @endforeach
        </div>
    @endif
@endforeach
