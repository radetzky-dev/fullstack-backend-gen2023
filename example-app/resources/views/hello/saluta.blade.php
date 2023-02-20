<?php
use App\Services\HelloService;
use App\Services\SendMailService;

$mail = new SendMailService();

$record = 5;

$array = ['nome' => 'Mario', 'cognome' => 'Rossi'];
?>

<html>

<body>
    <p>{{ $francese }}</p>
    <p>{{ $italiano }}</p>
    <p>Solo le ore UNIX {{ time() }}</p>
    <p>Saluta {{ sayHi() }}</p>
    <p>Oggi {{ date('F j, Y, g:i a') }}</p>
    {{ HelloService::sayHello() }}
    {{ $mail->send() }}

    <script>
        var app = {{ Illuminate\Support\Js::from($array) }};
        console.log(app);
        var app2 = {{ Js::from($array) }};
        console.log(app2);
    </script>

    {{-- commento in blade: quello dentro verbatim è ignorato --}}
    @verbatim
        <script>
            function hello() {
                alert("Ciao");
            }
        </script>
        <div class="container">
            <button onclick="hello()">Saluta</button>
        </div>
    @endverbatim

    <hr>
    @if (count($array) === 1)
        I have one record!
    @elseif (count($array) > 1)
        I have multiple records!
    @else
        I don't have any records!
    @endif

    @if ($record === 0)
        Vuoto<br>
    @elseif ($record > 1 && $record <= 3)
        Tra uno e tre<br>
    @elseif ($record <0 )
        Negativo! <br>
    @else
        Maggiore di 3<br>
    @endif

    <hr>

    <?php echo 'PHP francese ' . $francese; ?>
    <?php echo 'PHP italiano ' . $italiano; ?>

    <?php
    function sayHi()
    {
        return 'Ciao mondo';
    }
    ?>

</body>

</html>
