@extends('layouts.app')

@section('content')
       
        <div class="wrapper">
        @foreach($weeklyNews as $weeklyNew)
        
            <div class="weeklyNewsCard">
                <div class="card-image">
                    @if($weeklyNew['urlToImage']===null)
                        <img src="https://i2.wp.com/wp.laravel-news.com/wp-content/uploads/2020/09/finance-app-featured.png?fit=2220%2C1125&ssl=1?w=600&h=304" alt=""> 
                    @else
                    <img src="{{$weeklyNew['urlToImage']}}" alt=""> 
                    @endif
                </div>
                <div class="card-text">
                    {{$weeklyNew['content']}}
                </div>
                <div class="footer">
                    {{$weeklyNew['publishedAt']}}
                </div>
            </div>
        @endforeach
        </div>
    @endsection
