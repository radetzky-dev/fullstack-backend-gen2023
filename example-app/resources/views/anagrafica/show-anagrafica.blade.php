<!doctype html>

<head>
    <title>Mostra angrafica</title>

    @vite('resources/js/app.js')
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