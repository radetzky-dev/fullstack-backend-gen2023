<?php
$record = 5;
$reco = '';
$emptyArray = [];

?>

<html>

<body>

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

    <hr>

    @auth
        Se sei un admin vedi questo codice <br>
    @endauth

    @guest
        Noi guest vediamo questo<br>
    @endguest

    @if (env('APP_ENV') == 'local')
        <?php var_dump($record); ?>
    @endif

    <?php
    $i = 3;
    ?>

    @switch($i)
        @case(1)
            First case...
        @break

        @case(2)
            Second case...
        @break

        @default
            Default case...
    @endswitch
    <hr>
    @for ($i = 0; $i < 10; $i++)
        The current value is {{ $i }}<br>
    @endfor

    <hr>
    @php
        $isActive = false;
        $hasError = true;
    @endphp

    <span @class([
        'p-4' => $isActive,
        'font-bold',
        'text-gray-500' => !$isActive,
        'bg-red' => $hasError,
    ])>La mia stringa</span>

    Qui sotto il mio componente<br>

    @php
        $message = 'Non funziona nulla!';
        $type = 'error';
        $kebab = 'tanta salsa';
    @endphp

    {{-- type glielo passo come variabile blade, message come variabile php --}}
    <x-alert type="{{ $type }}" :message="$message" alert-type="{{ $kebab }}" />





</body>

</html>
