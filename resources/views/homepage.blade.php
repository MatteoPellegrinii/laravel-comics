@extends('templates.base')

@section('pageTitle', 'DCcomics-homepage')

@section('mainPage')

<?php
$arrObject  = config('objects')
?>
    <main>
        <div>
            <div class="jumbo">
                <div class="bottonejumbo"><a href="#">CURRENT SERIES</a></div>
            </div>
            <div class="upPart">
                <div class="slides">
                    @foreach ($arrLibri as $comics)
                    <div class="slide">
                        <a href="{{route('prodotti', ['id' => $comics['id']])}}">
                            <img src="{{$comics['thumb']}} ">
                            <h5>{{$comics['series']}} </h5>
                            <h6 class="hoveronly">{{$comics['price']}} </h6>
                        </a>
                    </div> 
                    @endforeach
                </div>
            <div class="bottone">
                <a href="#">LOAD MORE</a>
            </div>
            </div>
            <div class="botPart">
                <div class="objects">
                    @foreach ($arrObject as $objects)
                    <div class="object">
                        <img src="{{$objects['urlimg']}}" alt="">
                        <div class="testomain"><a href="{{$objects['url']}}">{{$objects['text']}}</a> </div>
                    </div>
                    @endforeach
                </div>
                
            </div>
        </div>
    </main>
@endsection