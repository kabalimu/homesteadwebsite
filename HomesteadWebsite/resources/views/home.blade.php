@extends('layouts.app')

@section('title','- Creating memories, one experience at a time')

@section('content')
<h4 class="intro">Creating memories, one experience at a time</h4>               
            <p>
                Homestead website is about showing different house architectural design.
            </p>
            <img src="/images/homestead1.jpg" class="home">
            <div class="menu-categories">
                @foreach  ($categories as $cat)
                <article>
                    <a href="/menu#{{ str_slug($cat->name) }}"><img src="/images/{{ $cat->image }}"></a>
                    <h2><a href="/menu#{{ str_slug($cat->name) }}"></a>{{$cat->name}}</h2>
                </article>
                @endforeach                
                         
            </div>
            <div class="social">
                <div>
                    <h4>What our customers say</h4>
                    <p>
                        This place is without a where you can get houses design .
                        It’s definitely a good place <br>
                        <br>
                        Shad Cayden
                    </p>
                </div>    
                <div class="networks">
                    <a href="#"><img src="/images/twitter.png"></a>
                    <a href="#"><img src="/images/fb.png"></a>
                    <a href="#"><img src="/images/ig.png"></a>    
                </div>
            </div>
@endsection
