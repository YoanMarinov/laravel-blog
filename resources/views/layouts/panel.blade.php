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
                <li><a href="{{url('/')}}">Back To The Site</a></li>
                <li><a href="{{url('admin/post')}}">Manage Posts</a></li>
                <li><a href="{{url('admin/logout')}}">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    @if(Session::has('success'))
        <div class="alert alert-success" style="padding:5px;"><span class="glyphicon glyphicon-check"></span> {{Session::get('success')}}</div>
    @endif
</div>
@yield('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>