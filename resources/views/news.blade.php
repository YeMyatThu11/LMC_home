@extends('layouts.app')

@section('content')
       
        <div class="wrapper marginTop">
        @foreach($weeklyNews as $weeklyNew)
        
            <div class="weeklyNewsCard">
                <div class="card-image">
                    @if($weeklyNew['urlToImage']===null)
                        <img src="https://i2.wp.com/wp.laravel-news.com/wp-content/uploads/2020/09/finance-app-featured.png?fit=2220%2C1125&ssl=1?w=600&h=304" alt=""> 
                    @else
                    <img src="{{$weeklyNew['urlToImage']}}" alt=""> 
                    @endif
                </div>
                <div class="card-title">
                    {{$weeklyNew['title']}}
                </div>
                <div class="card-text fontColorfaint">
                    
                    @if( strpos($weeklyNew['content'],'…')!==false)
                       
                            {{substr($weeklyNew['content'], 0, strpos($weeklyNew['content'], '…'))}} <span><a href="{{$weeklyNew['url']}}">See more...</a></span>
                    @else
                        @if($weeklyNew['content']==null)
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis accusamus ab vitae voluptates quisquam corrupti error dolores, voluptatibus odio, beatae architecto dolor, cupiditate tempora veniam ex natus sit facere ipsam.<span><a href="{{$weeklyNew['url']}}">See more...</a></span>
                        @else
                            {{$weeklyNew['content']}} <span><a href="{{$weeklyNew['url']}}">See more...</a></span>
                        @endif
                    @endif
                    
                </div>
                <div class="footer">
                    <div style="padding-top: 5px;">Date: {{ Carbon\Carbon::parse($weeklyNew['publishedAt'])->format('l jS \\of F Y ') }}</div>
                </div>
            </div>
        @endforeach
        </div>
    @endsection
