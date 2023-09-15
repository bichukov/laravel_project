@extends('main')
@section('content')
    <!-- Main content -->
    <main>


        <section class="swiper main-swiper">
            <ul class="swiper-wrapper">
                @foreach($slid as $slid)
                <li class="swiper-slide">


                    <h2>{{$slid->text}}</h2>
                    <picture>

                        <img src="{{$slid->path}}" alt="#">
                    </picture>
                </li>
                @endforeach
            </ul>
            <div class="swiper-pagination"></div>
        </section>

        <section class="main-announcement">
            @foreach($category as $category)

                <div class=@if($category->id ===1) "main-announcement__content_first" @else "main-announcement__content_second" @endif>
                    <div class="main-announcement__text">
                        <h2>{{$category->name}}</h2>
                        <a href="{{$category->url_path}}">Перейти в каталог</a>
                    </div>

                    <div class="main-announcement__imgContainer">
                        <picture>
                            <source srcset="{{$category->image}}" media="(max-width: 650px)">
                            <img src="{{$category->image}}" alt="#">
                        </picture>
                    </div>
                </div>
            @endforeach




        </section>

        <section class="main-recommendations">
            <h2>Мы рекомендуем</h2>

            <div class="swiper main-recommendations__swiper">
                <ul class="swiper-wrapper">
                    @foreach($section_product as $popular)
                        <li class="swiper-slide">
                            <div class="catalog-item">
                                @foreach($path as $path1)

                                <a href="{{route('decorations2', [ 'path'=> $path1->url_path, 'id'=> $popular->id])}}" class="catalog-item__content">
                                    @endforeach
                                    <div class="swiper changeColorSwiper">
                                        <div class="swiper-wrapper">

                                            <div class="swiper-slide">
                                                <div class="main-recommendations__imgContainer">
                                                    <img src="{{$popular->image}}" alt="#">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <p>{{$popular->title}}</p>

                                    <div class="main-recommendations__priceContainer">
                                        <div class="main-recommendations__oldPrice">
                                            {{$popular->price}} ₽
                                        </div>

                                        <div class="main-recommendations__actualPrice">
                                            {{$popular->sale_price}} ₽
                                        </div>
                                    </div>
                                </a>
                                <form action="{{ route('cart.add', ['product' => $popular->id]) }}" method="POST">
                                    @csrf
                                    <button style="    background: center;
    border: none;
    width: 10%;" href="#" class="main-recommendations__basketIco">
                                        <svg>
                                            <use href="#itemBasket"></use>
                                        </svg>
                                    </button>
                                </form>



                            </div>
                        </li>
                    @endforeach



                </ul>
                <div class="recommendations-swiper-pagination"></div>
            </div>
        </section>

        <section class="main-advantages">
            <h2>Почему нас выбирают</h2>

            <ul>
                @foreach($advantag as $advantag)

                <li>
                    <svg>

                        <use href="{{$advantag->tag}}"></use>
                    </svg>

                    <p>{{$advantag->text}}</p>
                </li>
                @endforeach
            </ul>
        </section>

        <section class="main-aboutUs">
            <div class="main-aboutUs__content">
                <div class="main-aboutUs__imgContainer">
                    <img src="/images/main/aboutUsImg.jpg" alt="#">
                </div>

                <div class="main-aboutUs__textContainer">
                    <h2>О нас</h2>

                    <p>Философия красоты «Novaya Ya», основанная на современных трендах, создаётся из исключительной основы:
                        австрийские кристаллы и стразы Swarovski, чешские Preciosa, медицинская сталь, родий (rhodium),
                        гальваническое покрытие из серебра и золота.</p>

                    <a href="{{route('aboutcompany')}}" class="main-aboutUs__arrowBtn">
                        Узнать подробнее
                        <svg>
                            <use href="#aboutUsArrow"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

    </main>

@endsection
