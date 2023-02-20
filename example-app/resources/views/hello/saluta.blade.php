<html>

<?php
$array = ['nome' => 'Mario', 'cognome' => 'Rossi'];
?>

<body>
    <p>{{ $francese }}</p>
    <p>{{ $italiano }}</p>
    <p>Solo le ore UNIX {{ time() }}</p>
    <p>Saluta {{ sayHi() }}</p>
    <p>Oggi {{ date('F j, Y, g:i a') }}</p>

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
