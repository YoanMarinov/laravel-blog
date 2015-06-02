@extends('layouts.panel')

@section('title')
    New Post
@stop

@section('content')
    <h3 align="center">Edit Post</h3>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" style="padding:5px;">{{$error}}</div>
            @endforeach
            <form method="post" action="{{url('admin/post/'.$post->id)}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <input type="hidden" name="_method" value="PUT"/>
                <strong>Title:</strong>
                <input class="form-control" type="text" name="title" value="{{$post->title}}"/>
                <strong>Post:</strong>
                <textarea class="form-control" name="post" rows="10">{{$post->content}}</textarea>
                <br/>
                <input type="submit" class="btn btn-primary" value="Update"/>
            </form>
        </div>
    </div>

@stop