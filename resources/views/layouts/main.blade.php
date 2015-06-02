<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{\Config::get('site_configs.title')}} - @yield('title')</title>
    <meta charset="UTF-8">
    <meta name=description content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://bootswatch.com/superhero/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{url('/')}}">{{\Config::get('site_configs.title')}}</a>
    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{url('/')}}">Home</a></li>
            @if(!\Auth::check())
                <li><a href="{{url('login')}}">Login</a></li>
                <li><a href="{{url('register')}}">Register</a></li>
            @else
                <li><a href="{{url('admin/dashboard')}}">Back To Admin Panel</a></li>
            @endif
        </ul>
    </div>
    </div>
</nav>
@yield('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>