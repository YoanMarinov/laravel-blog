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
            <form method="post" action="{{url('admin/post/'.$post->id)}}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <input type="hidden" name="_method" value="PUT"/>
                <strong>Title:</strong>
                <input class="form-control" type="text" name="title" value="{{$post->title}}"/>
                <strong>Post:</strong>
                <textarea class="form-control" name="post" rows="10">{{$post->content}}</textarea>
                <strong>Image:</strong>
                @if($post->image!="")
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="{{url('posts/'.$post->id.'/'.$post->image)}}"  class="img-responsive img-thumbnail"/>
                        </div>
                    </div>
                @endif
                <input type="file" name="image"/>
                <br/>
                <input type="submit" class="btn btn-primary" value="Update"/>
            </form>
        </div>
    </div>

@stop