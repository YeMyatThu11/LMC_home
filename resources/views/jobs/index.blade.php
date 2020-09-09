@extends('layouts.app')

@section('content')

<div class="container marginTop bg-gray">
    
        @foreach($jobs as $job)
            <div class="row job-row">
                 <div class="col-md-7 col-sm-5 col-xs-12">
                     <a href="{{route('jobs.show',$job['job_id'])}}" class='job-title'>
                        <span class="titleBold">{{$job['title']}}</span>
                        <span class="titleBold">({{$job['salary']}})</span>
                     </a>
                 </div>
                 <div class="col-md-3 col-sm-4 col-xs-12">
                     <a href="{{route('jobs.show',$job['job_id'])}}" class='company-name'>
                        <span>{{$job['companyName']}}</span>
                     </a>
                     
                 </div>
                 <div class="col-md-2 col-sm-3 col-xs-12">
                     <a href="{{route('jobs.show',$job['job_id'])}}" class='job-category'>
                        <span>{{$job['category']}}</span><br>
                        <span style='font-size:10px;color:#000'>{{date('M j',strtotime($job['created_at']))}}</span>
                     </a>
                 </div>
            </div>
        @endforeach
  
   
</div>