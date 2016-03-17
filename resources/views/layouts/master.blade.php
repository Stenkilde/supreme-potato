<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    {!! Html::style('styles/bootstrap.min.css') !!}
    {!! Html::style('styles/main.css') !!}
</head>
<body>
<div class="flex-row">
    <div class="sidebar">
        <ul class="sidebar__menu">
            <li><a href={!! route('weather.view') !!}>View your weathers</a></li>
            <li><a href={!! route('weather.add') !!}>Create new weather</a></li>
            <li><a href={!! route('pages.compliments') !!}>View your compliments</a></li>
            <li><a href={!! route('home.dashboard') !!}>Dashboard</a></li>
        </ul>
    </div>
    <div class="container dashboard">
        @yield('content')
    </div>
</div>
</body>
</html>
