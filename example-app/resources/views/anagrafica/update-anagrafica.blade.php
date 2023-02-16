<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show personal data</title>
</head>

<body class="antialiased">

    <form method="post" action="<?php echo url('update-personal'); ?>">
        @csrf
        <input type="text" id="name" name="name" value="{{$name}}" required>
        <input type="text" id="surname" name="surname" value="{{$surname}}" required>
        <input type="text" id="address" name="address" value="{{$address}}" required>
        <input type="submit" value="Modifica">
    </form>
    <hr>
    <h2>Test metodo PUT inverte Nome/Cognome</h2>
    <form method="post" action="<?php echo url('update-personal'); ?>">
        @csrf
        @method('PUT')
        <input type="text" id="name" name="name" value="{{$name}}" required>
        <input type="text" id="surname" name="surname" value="{{$surname}}" required>
        <input type="text" id="address" name="address" value="{{$address}}" required>
        <input type="submit" value="Modifica">
    </form>

    <?php

    use Illuminate\Support\Facades\Route;

    echo "Log info: <br>" . Route::currentRouteName(); // string
    echo "<br>" . Route::currentRouteAction(); // string
    ?>

</body>

</html>