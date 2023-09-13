@extends('main')
@section('content')
    <!-- Main content -->
    <x-breadcrumbs cur="Каталог" :pages="[
                 [
                   'href' => 'decorations',
                   'text' => 'Украшения',
                 ]
            ]" />
    <section class="productCard pageContainer">
        <div class="productCard-content__gallery">
            <div class="thumbnails swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="thumbnails-imgContainer">
                            <img src="./assets/images/productCard/productCardImg.jpg" alt="#">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="thumbnails-imgContainer">
                            <img src="./assets/images/productCard/productCardImg.jpg" alt="#">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="thumbnails-imgContainer">
                            <img src="./assets/images/productCard/productCardImg.jpg" alt="#">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="thumbnails-imgContainer">
                            <img src="./assets/images/productCard/productCardImg.jpg" alt="#">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="thumbnails-imgContainer">
                            <img src="./assets/images/productCard/productCardImg.jpg" alt="#">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="thumbnails-imgContainer">
                            <img src="./assets/images/productCard/productCardImg.jpg" alt="#">
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiperCard swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiperCard-imgContainer">
                            <img src="./assets/images/productCard/productCardImg.jpg" alt="#">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiperCard-imgContainer">
                            <img src="./assets/images/productCard/productCardImg.jpg" alt="#">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiperCard-imgContainer">
                            <img src="./assets/images/productCard/productCardImg.jpg" alt="#">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiperCard-imgContainer">
                            <img src="./assets/images/productCard/productCardImg.jpg" alt="#">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiperCard-imgContainer">
                            <img src="./assets/images/productCard/productCardImg.jpg" alt="#">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="swiperCard-imgContainer">
                            <img src="./assets/images/productCard/productCardImg.jpg" alt="#">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiperCard-imgContainer">
                            <img src="./assets/images/productCard/productCardImg.jpg" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="productCard-content__galleryDescription">
            <div class="productCard-content__text">
                <p class="productCard-content__title">
                    Авторские серьги
                </p>

                <div class="productCard-content__priceContainer">
                    <p class="productCard-content__actualPrice">1 200 ₽</p>
                    <p class="productCard-content__oldPrice">1 500 ₽</p>
                    <p class="productCard-content__salePrice">-20%</p>
                </div>
            </div>

            <div class="productCard-content__colorContainer">
                <div class="productCard-content__choiceContainer">
                    <div class="productCard-content__colorTitle">
                        Цвет: <span>Серебристый</span>
                    </div>

                    <div class="productCard-content__btnContainer">
                        <button>
                            <img src="./assets/images/productCard/productCardImg.jpg" alt="#">
                        </button>
                        <button>
                            <img src="./assets/images/productCard/productCardImg.jpg" alt="#">
                        </button>
                    </div>
                </div>

                <div class="productCard-content__countContainer">
                    <div class="productCard-content__coutn">
                        <button>-</button>
                        <p>1</p>
                        <button>+</button>
                    </div>

                    <p class="productCard-content__coutnDescription">комплект</p>
                </div>
            </div>

            <button class="productCard-content__addBtn">Добавить в корзину</button>

            <ul class="productCard-content__paramsContainer">
                <li>
                    <p class="productCard-content__param">Цвет камня</p>
                    <p class="productCard-content__paramDescription">Красный / синий / зеленый</p>
                </li>

                <li>
                    <p class="productCard-content__param">Артикул</p>
                    <p class="productCard-content__paramDescription">22072109</p>
                </li>

                <li>
                    <p class="productCard-content__param">Размер</p>
                    <p class="productCard-content__paramDescription">1,5x0,8 см</p>
                </li>

                <li>
                    <p class="productCard-content__param">Производитель</p>
                    <p class="productCard-content__paramDescription">Корея</p>
                </li>

                <li>
                    <p class="productCard-content__param">Состав</p>
                    <p class="productCard-content__paramDescription">Гипоалергенные бижутерный сплав, покрытый
                        родием, кристаллы Swarovski</p>
                </li>
            </ul>
        </div>
    </section>






    <div class="bottomMargin"></div>

@endsection
