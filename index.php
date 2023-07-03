<?php

require_once("./categoria.php");
require_once("./product.php");

$categoria1 = new Categoria("Cane");
$categoria2 = new Categoria("Gatto");
$product1 = new Product(
    "Immagine",
    "Palla",
    "Palla di gomma",
    55,
    $categoria1
);

echo "<br>";

$product2 = new Product(
    "Imm",
    "Pallottola",
    "Palla di gomma ahahahahah",
    81,
    $categoria2
);

var_dump($product1);
echo "<br>";
var_dump($product2);