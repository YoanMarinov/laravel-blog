@extends('layouts.panel')

@section('title')
    Posts
@stop

@section('content')
    <a href="{{url('admin/post/create')}}" class="btn btn-success">New Post</a>
    <table class="table table-hover table-responsive">
    	<thead>
    		<tr>
    			<th class="col-md-6">Title</th>
    			<th class="col-md-4">Creation date</th>
    			<th>Options</th>
    		</tr>
    	</thead>
    	<tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->created_at}}</td>
                <td><a href="{{url('admin/post/'.$post->id.'/edit')}}" class="btn btn-success btn-sm">Edit</a><a href="{{url('admin/post/'.$post->id.'/delete')}}" class="btn btn-danger btn-sm">Delete</a></td>
            </tr>
        @endforeach
    	</tbody>
    </table>

@stop