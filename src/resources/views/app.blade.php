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
</head>
<body>
<div>
    <h3>テスト用ボタン</h3>
    <?php
        if(isset($_POST['button'])){
            $arr =array("大吉","中吉","小吉","吉","末吉","区","大区");
            $key = array_rand($arr, 1);
            echo ($arr[$key]);
        }
    ?>
    <form method="post">
        <input type="submit" name="button" value="占う"/>

    </form>
</div>

<div id="app">
    <header-component></header-component>
    <router-view></router-view>
</div>
<!-- Scripts -->
<script src="{{ mix('/js/app.js') }}" defer></script>
</body>
</html>