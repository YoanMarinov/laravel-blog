@extends('layouts.main')

@section('title')
    Home
@stop

@section('content')
    <div class="container">
        @forelse($posts as $post)
            <h3><a href="{{url('post/'.$post->id)}}">{{$post->title}}</a></h3>
            <small><span class="glyphicon glyphicon-comment"></span> {{$post->comments()->count()}} Comments | <span
                        class="glyphicon glyphicon-time"></span> {{$post->created_at}}</small><br/><br/>
            <div class="row">
                @if($post->image!="")
                    <div class="col-sm-2">
                        <a href="{{url('post/'.$post->id)}}">
                        <img src="{{url('posts/'.$post->id.'/'.$post->image)}}" class="img-responsive img-thumbnail"/>
                        </a>
                    </div>
                @endif
                <div class="col-sm-10">
                    <p>{{$post->content}}</p>
                </div>
            </div>
            <hr/>
        @empty
            <h4 class="text-center"><span class="glyphicon glyphicon-info-sign"></span> The blog is empty!</h4>
        @endforelse
    </div>
@stop