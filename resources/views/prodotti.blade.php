@section('pageTitle', 'fumetto')

@extends('templates.base')

@section('mainPage')

<?php
$arrlibri  = config('comics')
?>

    <div class="jumbo">
        <img src="{{$comics['thumb']}}">
    </div>
@endsection