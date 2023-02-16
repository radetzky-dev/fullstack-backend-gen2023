<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Show personal data</title>

    </head>
    <body class="antialiased">
    <p>{{$name}}</p>
    <p> {{$surname}}</p>

    <?php echo "Ciao ". $name;?>
    <?php echo "Ciao ". $surname;?>
    <?php echo "Abiti ". $address;?>
     
    </body>
</html>
