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
            <div class="main-announcement__content_first">
                <div class="main-announcement__text">
                    <h2>Украшения</h2>
                    <a href="#">Перейти в каталог</a>
                </div>

                <div class="main-announcement__imgContainer">
                    <picture>
                        <source srcset="/images/main/mainImg1Mobile.jpg" media="(max-width: 650px)">
                        <img src="/images/main/mainImg1.jpg" alt="#">
                    </picture>
                </div>
            </div>

            <div class="main-announcement__content_second">
                <div class="main-announcement__imgContainer">
                    <picture>
                        <source srcset="/images/main/mainImg2Mobile.jpg" media="(max-width: 650px)">
                        <img src="/images/main/mainImg2.jpg" alt="#">
                    </picture>
                </div>

                <div class="main-announcement__text">
                    <h2>Аксессуары для волос</h2>
                    <a href="#">Перейти в каталог</a>
                </div>
            </div>

            <div class="main-announcement__content_third">
                <div class="main-announcement__text">
                    <h2>коллекции</h2>
                    <a href="#">Перейти в каталог</a>
                </div>

                <div class="main-announcement__imgContainer">
                    <picture>
                        <source srcset="/images/main/mainImg3Mobile.jpg" media="(max-width: 650px)">
                        <img src="/images/main/mainImg3.jpg" alt="#">
                    </picture>
                </div>
            </div>
        </section>

        <section class="main-recommendations">
            <h2>Мы рекомендуем</h2>

            <div class="swiper main-recommendations__swiper">
                <ul class="swiper-wrapper">
                    <li class="swiper-slide">
                        <div class="catalog-item">
                            <a href="#" class="catalog-item__content">
                                <div class="swiper changeColorSwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="main-recommendations__imgContainer">
                                                <img src="/images/main/item1.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="main-recommendations__imgContainer">
                                                <img src="/images/main/item2.jpg" alt="#">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p>Авторское кольцо безразмерное с посеребрением</p>

                                <div class="main-recommendations__priceContainer">
                                    <div class="main-recommendations__oldPrice">
                                        1 850 ₽
                                    </div>

                                    <div class="main-recommendations__actualPrice">
                                        1 500 ₽
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="main-recommendations__basketIco">
                                <svg>
                                    <use href="#itemBasket"></use>
                                </svg>
                            </a>

                            <div class="main-recommendations__btnContainer">
                                <button class="main-recommendations__silverBtn"></button>
                                <button class="main-recommendations__goldBtn"></button>
                            </div>
                        </div>
                    </li>

                    <li class="swiper-slide">
                        <div class="catalog-item">
                            <a href="#" class="catalog-item__content">
                                <div class="swiper changeColorSwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="main-recommendations__imgContainer">
                                                <img src="/images/main/item1.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="main-recommendations__imgContainer">
                                                <img src="/images/main/item2.jpg" alt="#">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p>Авторское кольцо безразмерное с посеребрением</p>

                                <div class="main-recommendations__priceContainer">
                                    <div class="main-recommendations__oldPrice">
                                        1 850 ₽
                                    </div>

                                    <div class="main-recommendations__actualPrice">
                                        1 500 ₽
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="main-recommendations__basketIco">
                                <svg>
                                    <use href="#itemBasket"></use>
                                </svg>
                            </a>

                            <div class="main-recommendations__btnContainer">
                                <button class="main-recommendations__silverBtn"></button>
                                <button class="main-recommendations__goldBtn"></button>
                            </div>
                        </div>
                    </li>

                    <li class="swiper-slide">
                        <div class="catalog-item">
                            <a href="#" class="catalog-item__content">
                                <div class="swiper changeColorSwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="main-recommendations__imgContainer">
                                                <img src="/images/main/item1.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="main-recommendations__imgContainer">
                                                <img src="/images/main/item2.jpg" alt="#">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p>Авторское кольцо безразмерное с посеребрением</p>

                                <div class="main-recommendations__priceContainer">
                                    <div class="main-recommendations__oldPrice">
                                        1 850 ₽
                                    </div>

                                    <div class="main-recommendations__actualPrice">
                                        1 500 ₽
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="main-recommendations__basketIco">
                                <svg>
                                    <use href="#itemBasket"></use>
                                </svg>
                            </a>

                            <div class="main-recommendations__btnContainer">
                                <button class="main-recommendations__silverBtn"></button>
                                <button class="main-recommendations__goldBtn"></button>
                            </div>
                        </div>
                    </li>

                    <li class="swiper-slide">
                        <div class="catalog-item">
                            <a href="#" class="catalog-item__content">
                                <div class="swiper changeColorSwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="main-recommendations__imgContainer">
                                                <img src="/images/main/item1.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="main-recommendations__imgContainer">
                                                <img src="/images/main/item2.jpg" alt="#">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p>Авторское кольцо безразмерное с посеребрением</p>

                                <div class="main-recommendations__priceContainer">
                                    <div class="main-recommendations__oldPrice">
                                        1 850 ₽
                                    </div>

                                    <div class="main-recommendations__actualPrice">
                                        1 500 ₽
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="main-recommendations__basketIco">
                                <svg>
                                    <use href="#itemBasket"></use>
                                </svg>
                            </a>

                            <div class="main-recommendations__btnContainer">
                                <button class="main-recommendations__silverBtn"></button>
                                <button class="main-recommendations__goldBtn"></button>
                            </div>
                        </div>
                    </li>

                    <li class="swiper-slide">
                        <div class="catalog-item">
                            <a href="#" class="catalog-item__content">
                                <div class="swiper changeColorSwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="main-recommendations__imgContainer">
                                                <img src="/images/main/item1.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="main-recommendations__imgContainer">
                                                <img src="/images/main/item2.jpg" alt="#">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p>Авторское кольцо безразмерное с посеребрением</p>

                                <div class="main-recommendations__priceContainer">
                                    <div class="main-recommendations__oldPrice">
                                        1 850 ₽
                                    </div>

                                    <div class="main-recommendations__actualPrice">
                                        1 500 ₽
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="main-recommendations__basketIco">
                                <svg>
                                    <use href="#itemBasket"></use>
                                </svg>
                            </a>

                            <div class="main-recommendations__btnContainer">
                                <button class="main-recommendations__silverBtn"></button>
                                <button class="main-recommendations__goldBtn"></button>
                            </div>
                        </div>
                    </li>

                    <li class="swiper-slide">
                        <div class="catalog-item">
                            <a href="#" class="catalog-item__content">
                                <div class="swiper changeColorSwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="main-recommendations__imgContainer">
                                                <img src="/images/main/item1.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="main-recommendations__imgContainer">
                                                <img src="/images/main/item2.jpg" alt="#">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p>Авторское кольцо безразмерное с посеребрением</p>

                                <div class="main-recommendations__priceContainer">
                                    <div class="main-recommendations__oldPrice">
                                        1 850 ₽
                                    </div>

                                    <div class="main-recommendations__actualPrice">
                                        1 500 ₽
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="main-recommendations__basketIco">
                                <svg>
                                    <use href="#itemBasket"></use>
                                </svg>
                            </a>

                            <div class="main-recommendations__btnContainer">
                                <button class="main-recommendations__silverBtn"></button>
                                <button class="main-recommendations__goldBtn"></button>
                            </div>
                        </div>
                    </li>

                    <li class="swiper-slide">
                        <div class="catalog-item">
                            <a href="#" class="catalog-item__content">
                                <div class="swiper changeColorSwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="main-recommendations__imgContainer">
                                                <img src="/images/main/item1.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="main-recommendations__imgContainer">
                                                <img src="/images/main/item2.jpg" alt="#">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p>Авторское кольцо безразмерное с посеребрением</p>

                                <div class="main-recommendations__priceContainer">
                                    <div class="main-recommendations__oldPrice">
                                        1 850 ₽
                                    </div>

                                    <div class="main-recommendations__actualPrice">
                                        1 500 ₽
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="main-recommendations__basketIco">
                                <svg>
                                    <use href="#itemBasket"></use>
                                </svg>
                            </a>

                            <div class="main-recommendations__btnContainer">
                                <button class="main-recommendations__silverBtn"></button>
                                <button class="main-recommendations__goldBtn"></button>
                            </div>
                        </div>
                    </li>

                    <li class="swiper-slide">
                        <div class="catalog-item">
                            <a href="#" class="catalog-item__content">
                                <div class="swiper changeColorSwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="main-recommendations__imgContainer">
                                                <img src="/images/main/item1.jpg" alt="#">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="main-recommendations__imgContainer">
                                                <img src="/images/main/item2.jpg" alt="#">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p>Авторское кольцо безразмерное с посеребрением</p>

                                <div class="main-recommendations__priceContainer">
                                    <div class="main-recommendations__oldPrice">
                                        1 850 ₽
                                    </div>

                                    <div class="main-recommendations__actualPrice">
                                        1 500 ₽
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="main-recommendations__basketIco">
                                <svg>
                                    <use href="#itemBasket"></use>
                                </svg>
                            </a>

                            <div class="main-recommendations__btnContainer">
                                <button class="main-recommendations__silverBtn"></button>
                                <button class="main-recommendations__goldBtn"></button>
                            </div>
                        </div>
                    </li>
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

                    <a href="#" class="main-aboutUs__arrowBtn">
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
