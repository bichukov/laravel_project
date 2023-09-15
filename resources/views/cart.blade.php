@extends('main')
@section('content')
  <>  <!-- Main content -->
    <main>

        <x-breadcrumbs cur="Корзина" :pages="[
                // [
                //   'href' => '#',
                //   'text' => 'Components',
                // ]
            ]" />
        <section class="basket">
            <h2>Корзина</h2>

            <div class="basket-items pageContainer">
                <div class="basket-items__container basket-items_width">
                    @foreach($products as $element)

                    <div class="basket-items__item">
                        <div class="basket-items__item_upperContainer">
                            <div class="basket-items__imgContainer">
                                <img src="{{$element->image}}" >
                            </div>

                            <div class="basket-items__text">
                                <p class="basket-items__itemName">{{$element->title}}</p>
                                <p class="basket-items__itemCode">{{$element->article}}</p>
                            </div>
                        </div>

                        <div class="basket-items__item_downContainer">
                            <div class="productCard-content__countContainer">
                                <div class="productCard-content__coutn">

                                    <p>{{ $cart[$element->id]['quantity'] }}</p>

                                </div>


                            </div>

                            <div class="productCard-content__priceContainer">
                                <p class="productCard-content__actualPrice">{{$cart[$element->id]['quantity'] *$element->price}} ₽</p>
                                <p class="productCard-content__oldPrice">{{$cart[$element->id]['quantity'] *$element->sale_price}} ₽</p>
                            </div>
                        </div>

                        <div class="productCard-content__trashBtnContainer">
                            <form action="{{ route('cart.remove', ['product' => $element->id]) }}" method="POST">
                                @csrf
                                <button class="productCard-content__trashBtn">
                                    <svg>
                                        <use href="#trashIco"></use>
                                    </svg>
                                </button>
                            </form>

                        </div>
                    </div>

                    @endforeach

                </div>

                <div class="basket-order__container">
                    <div class="basket-order__stickyHelper">
                        <div class="basket-order__params">


                            <div class="basket-order__finalPrice">
                                <p>Итого</p>
                                <p>{{ $totalSum }} ₽</p>
                            </div>
                            <form action="{{route('order')}}" target="_blank">
                                <button @if(count($products) < 1)disabled @endif  class="www">
                                    Оформить заказ
                                </button>
                            </form>





                        </div>

                        <div class="basket-order__delivery">
                            <svg>
                                <use href="#deliveryIco"></use>
                            </svg>

                            <p>Бесплатная доставка при заказе от 10 000 ₽</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bottomMargin"></div>

    </main>

@endsection
