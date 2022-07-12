@extends('templates.base')

@section('pageTitle', 'DCcomics-homepage')

@section('mainPage')
    <main>
        <div>
            <div class="jumbo">
                <div class="bottonejumbo"><a href="#">CURRENT SERIES</a></div>
            </div>
            <div class="upPart">
            <div class="bottone">
                <a href="#">LOAD MORE</a>
            </div>
            </div>
            <div class="botPart">
                
            </div>
        </div>
        <ul>
        @foreach ($arrLibri as $comics)
            <li>{{ $comics['title'] }} </li>
        @endforeach
        </ul>
    </main>
@endsection