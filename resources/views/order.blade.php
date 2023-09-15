@extends('main')
@section('content')
  <>  <!-- Main content -->
    <main>

        <section class="postOffice pageContainer">
            <h2>Оформление заказа</h2>

            <div class="postOffice-items">
                <div class="postOffice-items__container basket-items_width">
                    <div class="postOffice-items__deliveryList">
                        <p class="postOffice-items__title">Служба доставки</p>
                        <ul>
                            <li>
                                <div class="postOffice-items__radio">
                                    <input class="postOffice-items__custom-radio" type="radio" id="pochtaRoss" name="postOffice"
                                           value="Почта">
                                    <label for="pochtaRoss">

                                        <span>Почта </span>
                                    </label>
                                </div>

                                <div class="postOffice-items__radio_tabContent">
                                    <p class="postOffice-items__title">Способ доставки</p>
                                    <ul>
                                        <li>


                                            <div class="postOffice-items__radio_mob">
                                                <input class="postOffice-items__custom-radio" type="radio" id="pochta" name="shippingMethods" value="pochta">
                                                <label for="pochta">Отделение Почты</label>
                                            </div>

                                            <div class="postOffice-items__tabContent">
                                                <form action="#">
                                                    <input type="text" placeholder="Город" name="city">
                                                    <input type="text" placeholder="Улица" name="street">
                                                    <div class="postOffice-items__mobileHelper">
                                                        <input type="text" placeholder="Дом / Квартира" name="flat">
                                                        <input type="text" placeholder="Индекс" name="index">
                                                    </div>
                                                </form>
                                            </div>
                                        </li>


                                    </ul>

                                    <div class="postOffice-items__tabContainer">
                                        <div class="postOffice-items__helperContaiener"></div>

                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>

                    <div class="postOffice-items__shippingMethods">



                    </div>

                    <div class="postOffice-items__personalData">
                        <p class="postOffice-items__title">Личные данные</p>
                        <form action="#">
                            <input type="text" placeholder="Иван" name="name">
                            <input type="text" placeholder="Фамилия" name="secondName">
                            <input type="tel" placeholder="+7 (999) 999-99-99" name="phone">
                            <input type="email" placeholder="E-mail" name="email">
                            <textarea name="comment" placeholder="Комментарий"></textarea>
                        </form>
                    </div>
                </div>

                <div class="basket-order__container">
                    <div class="basket-order__stickyHelper">
                        <div class="basket-order__params">
                            <ul>

                                <li>
                                    <p>4 товара на сумму</p>
                                    <p>5 200 ₽</p>
                                </li>
                                <li>

                            </ul>

                            <div class="basket-order__finalPrice">
                                <p>Итого</p>
                                <p>4 000 ₽</p>
                            </div>

                            <button>
                                Оформить заказ
                            </button>


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

        <div class="bottomMargin"></div>

    </main>

@endsection
