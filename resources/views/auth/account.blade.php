@extends('main')
@section('content')
    <!-- Main content -->
    <main>

        <section class="personalArea">
            <h2>Личный кабинет</h2>
            <form action="{{route('account.update')}}" method="POST">
                @csrf

                <div class="personalArea-content">
                    <input type="text" name="name" value="{{ $user->information?->first_name }}" placeholder="Иван">
                    <input type="text" name="secondName" value="{{ $user->information?->last_name }}" placeholder="Фамилия">
                    <input type="tel" name="phone" value="{{ $user->information?->phone }}" placeholder="+7 (999) 999-99-99">
                    <button class="personalArea-content__saveBtn" type="submit">Сохранить изменения</button>
                </div>

                <a href="{{ route('auth.logout') }}">Выйти</a>


            </form>
        </section>
        <div class="bottomMargin"></div>

    </main>

@endsection
