@extends('main')
@section('content')
    <!-- Main content -->
    <main>


        <x-breadcrumbs cur="О компании" :pages="[
                // [
                //   'href' => '#',
                //   'text' => 'Components',
                // ]
            ]" />
        <div class="aboutCompany">
            <section class="main-aboutUs">
                <div class="main-aboutUs__content">
                    <div class="main-aboutUs__imgContainer">
                        <img src="/images/main/aboutUsImg.jpg" alt="#">
                    </div>

                    <div class="main-aboutUs__textContainer">
                        <h2>О нас</h2>

                        <p>Философия красоты «Novaya Ya», основанная на современных трендах, создаётся из исключительной основы: австрийские кристаллы и стразы Swarovski, чешские Preciosa, медицинская сталь, родий (rhodium), гальваническое покрытие из серебра и золота.</p>

                    </div>
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
                <div class="main-aboutUs__content main-aboutUs_material">
                    <div class="main-aboutUs__imgContainer">
                        <img src="/images/aboutCompany/materialImg.jpg" alt="#">
                    </div>

                    <div class="main-aboutUs__textContainer">
                        <h2>Материал</h2>

                        <p>Все Серьги, браслеты, подвески и броши, представленные в интернет магазине бижутерии «Novaya ya» создаются вручную лучшими мастерами авторских студий Чехии, Испании и Южной Кореи. При создании аксессуаров для волос особое внимание уделяется качеству сопутствующей фурнитуры и основе изделий. </p>

                        <p>В большинстве представленных моделей заколок «автомат для волос» и заколок «краб для волос» используется ацетат целлюлозы. Это органический и экологичный материал, сырьём для которого является древесная целлюлоза и хлопок идеально подходит для материала аксессуаров для волос. Безопасный и прочный, не источает вредных паров и не вызывает аллергических реакций — главные отличия от более дешёвой пластмассы.</p>

                    </div>
                </div>
            </section>
        </div>

    </main>

@endsection
