<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        if (!isset($_COOKIE['lang'])) {
            setcookie('lang', 'ru');
        }


        $path = substr($_SERVER['REQUEST_URI'], strrpos($_SERVER['REQUEST_URI'], '/') + 1);
        $path .= strrpos($path, '.php') ? '' : '.php';
        if (file_exists($path)) {
            require_once $path;
        } else {
            require_once 'home.php';
        }
    ?>
</body>
</html>