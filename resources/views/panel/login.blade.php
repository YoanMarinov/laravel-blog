@extends('layouts.main')

@section('title')
    Login
@stop

@section('content')
    <h3 align="center">Login</h3>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            @if(Session::has('error'))
                <div class="alert alert-danger" style="padding:5px;">{{Session::get('error')}}</div>
            @endif
                <form method="post" action="{{url('login')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <strong>Email:</strong>
                    <input class="form-control" type="text" name="email"/>
                    <strong>Password:</strong>
                    <input class="form-control" type="password" name="password"/>
                    <br/>
                    <input type="submit" class="btn btn-primary" value="Login"/>
                </form>
        </div>
    </div>

@stop