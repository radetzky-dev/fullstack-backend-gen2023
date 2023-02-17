<!doctype html>

<head>
    <title>Mostra anagrafica</title>

    @if (env('APP_ENV') == "local")
    <!-- //npm run dev -->
    @vite('resources/js/app.js')
    @else
    <link rel="stylesheet" type="text/css" href="<?php echo env('ASSET_URL'); ?>app.css" />
    <script src="{{env('ASSET_URL')}}app.js"></script>
    @endif


</head>

<body class="show">

    <h2>Anagrafica</h2>
    <p>{{$name}}</p>
    <p>{{$surname}}</p>
    <p>{{$address}}</p>


    <?php
    $url = route('show', ['name' => $name, 'surname' => $surname, 'address' => $address]);
    ?>
    <a href="<?php echo $url ?>">Modifica</a>
    <button onclick="ciao()">Saluta</button>


</body>

</html>