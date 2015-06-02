@extends('layouts.panel')

@section('title')
    Posts
@stop

@section('content')
    <div class="container">
        <a href="{{url('admin/post/create')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> New Post</a>
        <table class="table table-hover table-responsive">
            <thead>
            <tr>
                <th class="col-md-6">Title</th>
                <th class="col-md-4">Creation date</th>
                <th>Options</th>
            </tr>
            </thead>
            <tbody>
            @forelse($posts as $post)
                <tr>
                    <td>{{$post->title}}</td>
                    <td>{{$post->created_at}}</td>
                    <td><a href="{{url('admin/post/'.$post->id.'/edit')}}" class="btn btn-success btn-sm">Edit</a><a href="{{url('admin/post/'.$post->id.'/delete')}}" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
                @empty
                <tr>
                    <td colspan="3"><span class="glyphicon glyphicon-info-sign"></span> There are no posts</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@stop