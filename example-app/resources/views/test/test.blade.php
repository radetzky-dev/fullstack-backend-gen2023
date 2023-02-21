<?php
$record = 5;
$reco = '';
$emptyArray = [];

?>

<html>
<body>
    <p>{{ $nome }}</p>
    @if ($cognome != '')
        Il cognome è <p>{{ $cognome }}</p>
    @endif

    @unless($nome == '')
        {{--  inverso di if --}}
        {{ $nome }}
    @endunless

    @isset($nome)
        nome è settato
    @endisset

    @isset($xxx)
        xxx è settato //non lo mostra non settato
    @endisset

    @empty($reco)
        reco è vuoto
    @endempty

    @empty($emptyArray)
        array è vuoto
    @endempty

</body>

</html>
