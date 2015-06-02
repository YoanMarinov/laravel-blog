@extends('layouts.panel')

@section('title')
    New Post
@stop

@section('content')
    <h3 align="center">New Post</h3>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" style="padding:5px;">{{$error}}</div>
            @endforeach
            <form method="post" action="{{url('admin/post')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <strong>Title:</strong>
                <input class="form-control" type="text" name="title"/>
                <strong>Post:</strong>
                <textarea class="form-control" name="post" rows="10"></textarea>
                <br/>
                <input type="submit" class="btn btn-primary" value="Create"/>
            </form>
        </div>
    </div>

@stop