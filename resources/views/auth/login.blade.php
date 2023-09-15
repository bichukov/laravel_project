@extends('main')
@section('content')
    <!-- Main content -->
    <main>

        <div  >
            <div class="modal-content">

                <p class="modal-content__title">Вход</p>
                <p class="modal-content__subtitle">
                    Еще нет аккаунта?
                    <a href="{{route('register')}}">Регистрация</a>
                </p>
                <form action="{{route('getLoginPage')}}" method="POST">
                    @csrf
                    <input type="email" name="email" placeholder="E-mail*">
                    <div class="passwordRecovery-content__input">
                        <input type="password" name="password" placeholder="Пароль">

                    </div>

                    <input class="modal-content__submit" type="submit" name="Login" value="Вход" wfd-id="id15">


                </form>
            </div>
        </div>


    </main>

@endsection
