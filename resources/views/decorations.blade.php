@extends('main')
@section('content')
    <!-- Main content -->
    <main>
        <x-breadcrumbs cur="Украшения" :pages="[
                // [
                //   'href' => '#',
                //   'text' => 'Components',
                // ]
            ]" />
        <section class="categories pageContainer">
            <ul class="categories-content">

                @foreach($sections->section1 as $section1)

                <li class="categories-content__item">
                    <a href="{{route('decorations1', ['path'=> $section1->url_path])}}">
                        <img src="{{$section1->image}}" alt="#">
                        <h2>{{$section1->name}}</h2>
                    </a>
                </li>
                @endforeach
            </ul>
        </section>

        <div class="bottomMargin"></div>

    </main>

@endsection
