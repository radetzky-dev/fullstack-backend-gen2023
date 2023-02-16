<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TESTTTTTTTT</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

</head>

<body class="antialiased">
    <p>Questa è la mia pagina di test</p>
    <a href="<?php echo url('/ciao'); ?>">Vai alla pagina ciao</a> |
    <a href="<?php echo url('/'); ?>">Vai alla home</a>
    <a href="<?php echo route('profile'); ?>">Vai a profile</a>
    <a href="<?php echo url('/user/profile'); ?>">Vai sempre al profile</a>
    <a href="<?php echo route('user', ['id'=> 81]); ?>">Vai a user con param</a>
<?php
$url = route('user', ['id' => 1, 'photos' => 'yes']);
?>
<a href="<?php echo $url ?>">Vai a user con doppio param</a>

</body>

</html>
