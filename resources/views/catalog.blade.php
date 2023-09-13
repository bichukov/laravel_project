@extends('main')
@section('content')
    <!-- Main content -->
    <x-breadcrumbs cur="Каталог" :pages="[
                 [
                   'href' => 'decorations',
                   'text' => 'Украшения',
                 ]
            ]" />
    <section class="catalog pageContainer">


        <ul>

            @foreach($section_product as $product)

                <li>
                    <div class="catalog-item">
                        <a href="{{route('decorations2', [ 'path'=> $path, 'id'=> $product->id])}}" class="catalog-item__content">
                            <div class="swiper changeColorSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="main-recommendations__imgContainer">
                                            <img src="{{$product->image}}" alt="#">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <p>{{$product->title}}</p>

                            <div class="main-recommendations__priceContainer">
                                <div class="main-recommendations__oldPrice">
                                    {{$product->price}} ₽
                                </div>

                                <div class="main-recommendations__actualPrice">
                                    {{$product->sale_price}} ₽
                                </div>
                            </div>
                        </a>

                        <a href="#" class="main-recommendations__basketIco">
                            <svg>
                                <use href="#itemBasket"></use>
                            </svg>
                        </a>


                    </div>
                </li>


            @endforeach


        </ul>
    </section>

    <div class="bottomMargin"></div>

@endsection
