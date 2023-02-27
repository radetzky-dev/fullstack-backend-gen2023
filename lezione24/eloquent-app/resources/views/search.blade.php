
<h3 class="text-center page-title">User found: {{ $user->name }}</h3>
<b>Email</b>: {{ $user->email }}
<br>
<b>Registered on</b>: {{ $user->created_at }}
<br>
Dati salvati nella sessione:
<?php echo session('username');

$tempArray = session('amici');
var_dump($tempArray);

if (session()->has('username')) {
    echo "<br>presente";
}

if (session()->has('amici')) {
    $myArray = session()->pull('amici');  //recupera i dati e li cancella dalla sessione
    var_dump($myArray);
}

if (session()->missing('amici')) {
    echo "<br>Amici è stato cancellato dalla sessione";
}
