<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <style>
        .wrapper{
            
            display:flex;
            flex-wrap:wrap; 
        }
       .weeklyNewsCard{
            margin:0 auto;
            box-shadow:5px 5px 3px 3px rgba(0,0,0,0.1);
            background:#fafafa;
            margin:20;
            display:flex;
            flex-direction:column;
            width: 80%;
            box-sizing: border-box;
            position:relative;
            margin-bottom:50px;
        }
        .card-image{
            width: 100%;
            height: 400px;

        }
        .card-image img{
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
        .card-text{
            box-sizing:border-box;
            width:100%;
            font-size: 25px;
            padding:10px 30px 100px 30px;
        }
        .footer{
            position:absolute;
            bottom:2%;
            padding:20px;
            font-size: 10px;
            color: #333;
        }
    </style>
    <body>
       
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
    </body>
</html>
