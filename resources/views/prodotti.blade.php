@section('pageTitle', 'fumetto')

@extends('templates.base')

@section('mainPage')

<?php
$arrlibri  = config('comics')
?>

    <div class="jumbo">
        <img class="imgJumbo" src="{{$comics['thumb']}}">
    </div>
    <div class="fumetto">
        <h1>{{$comics['title']}}</h1>
        <h2>{{$comics['price']}}</h2>
        <div class="text">{{$comics['description']}}</div>
        <div class="right"><img src="/images/adv.jpg" ></div>
    </div>
    <div class="info">
        <div class="talent">
            <h5>Art by: </h5>
            @foreach ($comics['artists'] as $item)
                    <span>{{$item}},</span>
            @endforeach
            <h5>Written by: </h5>
            @foreach ($comics['writers'] as $item)
                    <span>{{$item}},</span>
            @endforeach
        </div>
        <div class="specs">
            <h5>series: {{$comics['series']}} </h5>
            <h5>price: {{$comics['price']}} </h5>
            <h5>sale date: {{$comics['sale_date']}} </h5>
        </div>
    </div>
@endsection