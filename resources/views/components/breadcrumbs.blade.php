
<div class="breadCrumbs">

    <a href="{{route('main')}}">Главная</a>
    @foreach ($pages as $page)
/
    <a href="{{route($page['href'])}}">{{$page['text']}}</a>
    @endforeach
    /
    <p>{{$cur}}</p>
</div>
