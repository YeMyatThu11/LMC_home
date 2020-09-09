@extends('layouts.app')

@section('content')
    <div class="container-fluid faint-bg">
        <div class="container pt-3 pb-3 marginTop job-show ">
            <div class="row ">
                <div class="col-md-8" col-md-offset-2>
                    <div class="col-md-12">
                        <p class="fontColorfaint">
                            <small pr-2> Posted On : {{date('M j',strtotime($job['created_at']))}} </small> &nbsp |
                            <i class='fa fa-eye pl-1'></i> <small class='pl-2'> {{$job['views']}} total views</small>
                        </p>
                    </div>
                    <h2 class="title-font">
                        {{$job['title']}}
                    </h2>
                    <div class="col-md-12 pt-2">
                        <small> <a href="{{$job['companyWebsite']}}"><i class='fa fa-building'></i>{{$job['companyName']}}</a> </small>
                        <small class='pl-4 '> <a href="{{$job['companyWebsite']}}"><i class='fa fa-link'></i> {{$job['companyWebsite']}}</a></small>
                        <small class='pl-4 ' style='font-size:13px'> <i class='fa fa-money '></i> <b>{{$job['salary']}}</b> </small>
                        <small class='pl-4 ' style='font-size:13px'> <i class='fa fa-clock-o '></i> <b>{{$job['category']}}</b> </small>                                                 
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid">
        <div class="container pt-3 pb-3">
            <div class="row">
                <div class="col-md-8 pt-5">
                    <h5>Job Desription</h5>
                    <div class="fontColorfaint">
                        {{ltrim( str_replace('*','..',$job['full_description']),'.')}}
                    </div>
                </div>
               
                <div class="col-md-8 pt-5 ">
                    <h5>Requirements</h5>
                    <div class="fontColorfaint">
                        {{$job['requirement']}}
                    </div>
                </div>
                <div class="col-md-8  pt-5">
                    <h5>Office Location</h5>
                    <div class="fontColorfaint">
                        {{$job['location']}}
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    

@endsection