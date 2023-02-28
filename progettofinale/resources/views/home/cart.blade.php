@extends('layouts.app-master')

@section('content')
    @auth
        <h1>Carrello</h1>
        <p class="lead">Sei un utente autenticato con ID {{ Auth::id() }}</p>
    @endauth
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">

     <?php
     var_dump(session('cart'));
     echo '<hr>';

        $cart = session('cart');
        echo  $cart['quantity']. ' '.$cart['name']. ' '.$cart['price'].'<br>';
?>

    </div>
@endsection
