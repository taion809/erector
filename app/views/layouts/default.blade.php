<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Do stuff!">
    <meta name="author" content="Nicholas J">
    <title>
        @yield('title')
        - {{ Config::get('app.name') }}</title>
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <!-- Add custom CSS here -->
    <style>
        body {margin-top: 75px;}
    </style>
</head>
<body>
    @include('layouts.partials.header.navigation')
    <div class="container">
        @include('layouts.partials.status')
        @yield('content')
    </div><!-- /.container -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    @yield('inline_javascript')
</body>
</html>