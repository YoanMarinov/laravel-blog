@extends('layouts.main')

@section('title')
    Home
@stop

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <h3><a href="{{url('post/'.$post->id)}}">{{$post->title}}</a></h3>
            <small><span class="glyphicon glyphicon-comment"></span> {{$post->comments()->count()}} Comments</small>
            <p>{{$post->content}}</p>
            <hr/>
        @endforeach
    </div>
@stop