@extends('layouts.app')

@section('content')

    @foreach($job as $j)
        <p class="margin-top">{{$j['title']}}</p>
    @endforeach

@endsection