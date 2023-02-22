@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">


        @guest
            <h1>Chi siamo</h1>
            <p class="lead">Crea un negozio online, qualunque sia il tuo settore

                Crea un sito web di ecommerce supportato da potenti strumenti che ti aiutano a trovare clienti, generare vendite
                e gestire la tua routine.</p>
        @endguest

        @auth
            <h1>I nostri contatti (ONLY FOR LOGGED)</h1>
            <p class="lead">URP – Uffici Territoriali Regionali (UTR)

                Regione Lombardia è presente in ogni capoluogo di Provincia con gli Uffici Territoriali Regionali (UTR). Negli
                UTR sono presenti:

                - Uffici Relazioni con il Pubblico (URP), gli sportelli informativi per i cittadini

                - Protocollo

                - Spazio Disabilità per informazioni per i cittadini diversamente abili

                - Uffici della Struttura Agricoltura, Foreste, Caccia e Pesca


                Causa Covid-19, gli UTR sono aperti al pubblico su appuntamento e con orario ridotto da lunedì a venerdì
                9.00-12.30.

                A Milano il Protocollo è in Via Restelli 2 (e non presso L’UTR) e riceve senza appuntamento. Per gli orari
                consulta questa pagina.</p>
        @endauth
    </div>
@endsection
