<?php
$arrLink  = config('links')
?>
<header>
    <div class="whiteHeader">
        <div class="logo">
            <img src="{{asset('images/dc-logo.png')}} " alt="">
        </div>
        <div class="navbar">
            <ul>
                @foreach ($arrLink as $links)
                    <li><a href="{{$links['url']}} ">{{$links['text']}} </a></li>
                @endforeach
            </ul>
        </div>
    </div>
</header>

