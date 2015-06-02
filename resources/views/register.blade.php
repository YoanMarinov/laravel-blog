@extends('layouts.main')

@section('title')
    Login
@stop

@section('content')
    <h3 align="center">Register</h3>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" style="padding:5px;">{{$error}}</div>
            @endforeach
            <form method="post" action="{{url('register')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <strong>Email:</strong>
                <input class="form-control" type="text" name="email"/>
                <strong>Password:</strong>
                <input class="form-control" type="password" name="password"/>
                <strong>Confirm Password:</strong>
                <input class="form-control" type="password" name="cpassword"/>
                <br/>
                <input type="submit" class="btn btn-primary" value="Register"/>
            </form>
        </div>
    </div>

@stop