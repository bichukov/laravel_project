@extends('main')
@section('content')
    <!-- Main content -->
    <x-breadcrumbs cur="{{$path }}  /  {{ $id}}" :pages="[
                 [
                   'href' => 'decorations',
                   'text' => 'Украшения',

                 ]
            ]" />
    <section class="productCard pageContainer">
        @foreach($element_product as $element)
        <div class="productCard-content__gallery">
            <div class="thumbnails swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="thumbnails-imgContainer">
                            <img src="{{$element->image}}" alt="#">
                        </div>
                    </div>

                </div>
            </div>
            <div class="swiperCard swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiperCard-imgContainer">
                            <img src="{{$element->image}}" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @foreach($element_product as $element)

        <div class="productCard-content__galleryDescription">
            <div class="productCard-content__text">
                <p class="productCard-content__title">
                    {{$element->title}}
                </p>

                <div class="productCard-content__priceContainer">
                    <p class="productCard-content__actualPrice">{{$element->price}} ₽</p>
                    <p class="productCard-content__oldPrice">{{$element->sale_price}} ₽</p>

                </div>
            </div>
            <form action="{{ route('cart.add', ['product' => $element->id]) }}" method="POST">
                @csrf
                <button type="submit" class="productCard-content__addBtn">Добавить в корзину</button>
            </form>


            <ul class="productCard-content__paramsContainer">
                <li>
                    <p class="productCard-content__param">Артикул</p>
                    <p class="productCard-content__paramDescription">{{$element->articles}}</p>
                </li>
                <li>
                    <p class="productCard-content__param">Производитель</p>
                    <p class="productCard-content__paramDescription">{{$element->manufacturer}}</p>
                </li>

                <li>
                    <p class="productCard-content__param">Состав</p>
                    <p class="productCard-content__paramDescription">{{$element->composition}}</p>
                </li>
            </ul>
        </div>
        @endforeach
    </section>






    <div class="bottomMargin"></div>

@endsection
