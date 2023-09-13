@extends('main')
@section('content')
    <!-- Main content -->
    <main>


        <x-breadcrumbs cur="Контакты" :pages="[
                // [
                //   'href' => '#',
                //   'text' => 'Components',
                // ]
            ]" />
        <section class="contacts">
            <div class="contacts-content pageContainer">
                <h2>Контакты</h2>
                <p>По любым вопросам, связанным с продукцией Novaya Ya, связывайтесь с нами</p>
                <ul>
                    <li>
                        <a href="mailto:novayaya.store@mail.ru">E-mail: novayaya.store@mail.ru</a>
                    </li>

                    <li>
                        <a href="tel:+79187666209">Телефон: +7 (918) 766-62-09</a>
                        <a href="https://wa.me/+79187666209">
                            <svg>
                                <use href="#whatsAppIco"></use>
                            </svg>
                            <span>Написать в WhatsApp</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="contacts-imgContainer">
                <img src="/images/contacts/contacts.jpg" alt="#">
            </div>
        </section>

    </main>

@endsection
