@extends('main')
@section('content')
    <!-- Main content -->
    <main>

        <div>
            <div class="modal-content">

                <p class="modal-content__title">Регистрация</p>
                <p class="modal-content__subtitle">
                    Уже есть аккаунт?
                    <a href="{{route('login')}}">Войти</a>
                </p>

                <form action="{{route('getRegisterPage')}}" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="Имя*">
                    <input type="email" name="email" placeholder="E-mail*">
                    <input type="tel" name="phone" placeholder="Телефон">

                    <input type="text" name="password" placeholder="Пароль">



                    <input type="submit" class="modal-content__submit" value="Регистрация">
                </form>
            </div>
        </div>


    </main>

@endsection
