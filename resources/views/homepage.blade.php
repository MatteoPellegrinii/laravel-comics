@extends('templates.base')

@section('pageTitle', 'DCcomics-homepage')

@section('mainPage')
    <main>
        @foreach ($arrLibri as $comics)
            <li>{{ $comics['title'] }} </li>
        @endforeach
    </main>
@endsection