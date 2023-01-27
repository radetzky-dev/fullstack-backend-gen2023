<?php
$catalogo = array(
    "utensili" => array(
        array(
            "nome" => "martello",
            "prezzo" => 7.99,
            "qta" => 5,
        ),
        array(
            "nome" => "pinza",
            "prezzo" => 5.99,
            "qta" => 0,
        )
    ),
    "casalinghi" => array(
        array(
            "nome" => "scolapasta",
            "prezzo" => 1.99,
            "qta" => 1,
            "image" => "scolapasta.jpeg"
        )
    ),
    "giardinaggio" => array(
        array(
            "nome" => "rastrello",
            "prezzo" => 22.75,
            "qta" => 0
        )
    ),
);
$catalogo["utensili"][] = array("nome" => "pala", "prezzo" => 14.99, "qta" => 5);
$catalogo["casalinghi"][] = array("nome" => "tegame", "prezzo" => 35.99, "qta" => 2);
$catalogo["casalinghi"][] = array("nome" => "pentola", "prezzo" => 45.99, "qta" => 0);
$catalogo["giardinaggio"][] = array("nome" => "vaso", "prezzo" => 9.99, "qta" => 0);
$catalogo["giardinaggio"][] = array("nome" => "zappa", "prezzo" => 12.99, "qta" => 1, "image" => "");
