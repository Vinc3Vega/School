<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Code - by Laravel</title>
    <meta name="description" content="codes - a DEV10 project">
    <meta name="author" content="Vincent DELETANG">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skeleton.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="nine columns" style="margin-top:100px">
            <div class="title">
                <h1 style="text-decoration:overline">{!! HTML::link('/', 'Code - Laravel') !!}</h1>
            </div>
            @yield('index')
        </div>
        <div class="three columns" style="margin-top:150px">
            @if(Auth::check())
                @include('partials.adminsidebar')
            @else
                @include('partials.sidebar')
            @endif
        </div>
    </div>
    @include('partials.footer')
</div>

</body>
</html>
