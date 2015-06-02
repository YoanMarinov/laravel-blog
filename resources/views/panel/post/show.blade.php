@extends('layouts.main')

@section('title')
    {{$post->title}}
@stop

@section('content')
    <div class="container">
        <h3>{{$post->title}}</h3>
        @if($post->image!="")
            <img src="{{url('posts/'.$post->id.'/'.$post->image)}}" class="img-thumbnail"/><br/><br/>
        @endif
        <p>{{$post->content}}</p>

        <h3><span class="glyphicon glyphicon-comment"></span> Comments</h3>
        <hr/>
        <div class="row">
            <div class="col-sm-6">
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" style="padding:5px;">{{$error}}</div>
                @endforeach
                @if(Session::has('success'))
                    <div class="alert alert-success" style="padding:5px;">{{Session::get('success')}}</div>
                @endif
                @foreach($post->comments as $comment)
                    <div class="well" style="padding:5px;">
                        <strong>{{$comment->author}}</strong> - {{$comment->created_at}}
                        <hr/>
                        <p>{{$comment->comment}}</p>
                    </div>
                @endforeach
                <form method="post" action="{{url('comment/create')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <input type="hidden" name="post_id" value="{{$post->id}}"/>
                    <strong>Your Name:</strong>
                    <input type="text" name="name" class="form-control" maxlength="50"/><br>
                    <strong>Comment:</strong>
                    <textarea name="comment" class="form-control" rows="4"></textarea>
                    <br/>
                    <button type="submit" class="btn btn-primary btn-sm"/>
                    <span class="glyphicon glyphicon-comment"></span> Comment</button>
                </form>
            </div>
        </div>
    </div>
@stop