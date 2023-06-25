<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>test cooking_app</title>

    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
</head>
<body>
<div id="app">
    <router-view></router-view>
    <footer-component></footer-component>
</div>

<!-- Scripts -->
<script src="{{ mix('/js/app.js') }}" defer></script>
<script defer src="https://use.fontawesome.com/releases/v6.4.0/js/all.js"></script>

</body>
</html>