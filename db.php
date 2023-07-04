<?php

require_once("./categoria.php");
require_once("./product.php");
require_once("./cibo.php");
require_once("./giochi.php");

$categoria1 = new Categoria("Cane");
$categoria2 = new Categoria("Gatto");

$productCibo = new Cibo(
    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQV2oP3PIZxQrrQD03wN_nsXQJOj68r9lFY9A&usqp=CAU",
    "CROCCANTINI",
    "Croccantini dolci per animali",
    21.50,
    $categoria1,
    "Pet Food",
    25,
    "Pollo e Tacchino"
);

echo "<br>";

$productGioco = new Giochi(
    "https://m.media-amazon.com/images/I/71oQNLRKcWL.jpg",
    "PALLINA",
    "Pallina di gomma per animali",
    347.28,
    $categoria2,
    "Plastica e Gomma",
    "Multicolore",
    1.5
);

// echo "<pre>";
// var_dump($productCibo);
// echo "</pre>";

// echo "<br>";

// echo "<pre>";
// var_dump($productGioco);
// echo "</pre>";