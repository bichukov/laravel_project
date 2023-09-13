@extends('main')
@section('content')
    <!-- Main content -->
    <main>




            <section class="delivery">
                <h2>Оплата и Доставка</h2>
                <div class="delivery-description">
                    <div class="delivery-description__text">
                        <p class="delivery-description__title">Оплата</p>
                        <p class="delivery-description__subtitle">После оформления вами заказа, в течении того же дня мы проверяем его наличие на складе и связываемся с вами по выбору оплаты вашего заказа</p>
                    </div>

                    <div class="delivery-description__text">
                        <p class="delivery-description__title">Доставка</p>
                        <p class="delivery-description__subtitle">После получения оплаты мы отправим ваш заказ в течении 24 часов в рабочие дни по выбранному вами типу доставки</p>
                    </div>
                </div>

                <div class="delivery-waysOfDelivery">
                    <p class="delivery-description__title">Способы доставки</p>

                    <div class="delivery-waysOfDelivery__container">
                        <ul>
                            <li class="delivery-waysOfDelivery__listTitle">
                                <svg>
                                    <use href="#pochtaRossii"></use>
                                </svg>
                                Почта России
                            </li>
                            <li>- Бесплатно, при заказе от 10 000 ₽</li>
                            <li>- 299 ₽ до ближайшего к вам отделения Почты России. Высылаем трек номер, ориентировочные сроки 4–6 дней в зависимости от региона доставки</li>
                            <li>- 199 ₽ до ближайшего к Вам почтмата. Срок доставки 3-6 дней</li>
                            <li>- 699 ₽ службой EMS до двери срок доставки 2-4 дня. Высылается трек номер</li>
                        </ul>

                        <ul>
                            <li class="delivery-waysOfDelivery__listTitle">
                                <svg>
                                    <use href="#cdek"></use>
                                </svg>
                                Почта России
                            </li>
                            <li>- Бесплатно, при заказе от 10 000 ₽</li>
                            <li>- 299 ₽ до ближайшего к вам склада СДЭК. Высылается трек номер. Срок доставки 4-6 дней</li>
                            <li>- 450 ₽ до двери. Высылается трек номер. Срок доставки 4-6 дней</li>
                        </ul>
                    </div>
                </div>

                <p class="delivery-remark">* Если у вас есть свой предпочтительный способ доставки (другие Транспортные Компании, курьерские службы и т.д.) сообщите нам и мы доставим ваш заказ.</p>
            </section>

            <div class="bottomMargin"></div>

        </main>

@endsection
