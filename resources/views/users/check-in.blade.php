@extends('layouts.layout')

@section('content')

    <div class="check-in">
        <div class="container">
            <div class="check-in__inner">
                <div class="check-in__tx">
                    <h1>Войти или зарегистрироваться</h1>
                    <p>Чтобы сохранять корзину, получать промокоды и следить за своей историей покупок</p>
                    <div class="check-in__input">
                        <div class="order__input-cell">
                            <input class="form__input-effect" type="text" id="tl">
                            <label for="tl">Телефон *</label>
                        </div>
                        <a class="button button-secondary w-100" href="#">Получить код из SMS</a>
                    </div>
                    <div class="check-in__soc">
                        <a class="check-in__soc-item" href="#">С помощью Facebook
                            <img src="{{ asset('assets/images/svg/fc.svg') }}" alt="">
                        </a>
                        <a class="check-in__soc-item" href="#">С помощью Google
                            <img src="{{ asset('assets/images/svg/gm.svg') }}" alt="">
                        </a>
                        <a class="check-in__soc-item" href="#">С помощью ВКонтакте
                            <img src="{{ asset('assets/images/svg/vk2.svg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="check-in__img">
                    <img src="{{ asset('assets/images/svg/check-in-img.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>

@endsection
