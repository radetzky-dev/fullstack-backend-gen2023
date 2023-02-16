<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Show anagrafica</title>

    </head>
    <body class="antialiased">
 
    <h2>Anagrafica</h2>
    <p>{{$name}}</p>
    <p>{{$surname}}</p>
    <p>{{$address}}</p>


    <?php
$url = route('show', ['name' => $name, 'surname' => $surname, 'address' => $address ]);
?>
    <a href="<?php echo $url ?>">Modifica</a>

     
    </body>
</html>
