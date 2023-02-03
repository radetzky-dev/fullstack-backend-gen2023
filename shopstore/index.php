<?php
require_once "inc/functions.php";
require_once "inc/header.php";
require_once "inc/navbar.php";
?>
<div class="container px-4 py-5" id="custom-cards">
    <p>
        <?php if (isset($_SESSION["isAdmin"])) {
            echo "<span class='text-danger'>ADMIN: </span>";
        } else {
            echo "Ciao, ";
        }
        echo $_SESSION["userInfo"]; ?>
    </p>
    <h2 class="pb-2 border-bottom">Le nostre offerte </h2>

    <p>TODO<br> 1)creare un utente admin che possa inserire \modifcare il catalogo (GESTISCI)
        <br> 2)il catalogo va portato in json e non come ora.
        <br> 3) salvare tutti i dati inseriti nell'anagrafica (ora solo 4)
        <br> 4) un login e un anagrafica per gli amministratori che possono modifcare\insirire prodotti e vedere anagrfiche dei customers e creare altri utenti admin
        <br> 5) una login e una procedura d'iscrizione per customers che vogliono acquistare.
        / backend / login possono fare
        <br> 6) Cosa può vedere utente non loggato? Lista prodotti ecc...
        <br> 7) Admin può gestire le categorie e i prodotti
        <br> 8) Admin vede la lista degli ordini
        <br> 9) Admin vede le anagrifche degli utenti
        <br> 9) Registrati lo vede solo utente che deve comprare

    </p>
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h2>
                    <ul class="d-flex list-unstyled mt-auto">

                        <li class="d-flex align-items-center me-3">
                            <svg class="bi me-2" width="1em" height="1em">
                                <use xlink:href="#geo-fill"></use>
                            </svg>
                            <small>Earth</small>
                        </li>
                        <li class="d-flex align-items-center">
                            <svg class="bi me-2" width="1em" height="1em">
                                <use xlink:href="#calendar3"></use>
                            </svg>
                            <small>3d</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h2>
                    <ul class="d-flex list-unstyled mt-auto">

                        <li class="d-flex align-items-center me-3">
                            <svg class="bi me-2" width="1em" height="1em">
                                <use xlink:href="#geo-fill"></use>
                            </svg>
                            <small>Pakistan</small>
                        </li>
                        <li class="d-flex align-items-center">
                            <svg class="bi me-2" width="1em" height="1em">
                                <use xlink:href="#calendar3"></use>
                            </svg>
                            <small>4d</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h2>
                    <ul class="d-flex list-unstyled mt-auto">

                        <li class="d-flex align-items-center me-3">
                            <svg class="bi me-2" width="1em" height="1em">
                                <use xlink:href="#geo-fill"></use>
                            </svg>
                            <small>California</small>
                        </li>
                        <li class="d-flex align-items-center">
                            <svg class="bi me-2" width="1em" height="1em">
                                <use xlink:href="#calendar3"></use>
                            </svg>
                            <small>5d</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

foreach ($catalogo as $catName => $categorie) {
    foreach ($catalogo[$catName] as $key => $prodotti) {
        if (is_array($prodotti)) {
            if ($prodotti['qta'] == 1) {
                //TODO visualizzare immagine, shuffle e slice per i primi 2, visualizzare bene
                echo "In " . strtoupper($catName) . " " . $prodotti['nome'] . " <img src='assets/" .
                    $prodotti['image'] . "'><br>";
            }
        }
    }
}


require_once "inc/footer.php";
