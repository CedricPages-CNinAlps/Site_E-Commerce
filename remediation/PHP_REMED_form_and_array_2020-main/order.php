<?php
include_once('data.php'); // identique à include
global $ski_resorts; // "import" de la variable dans ce fichier

// var_dump($_POST['qt']);

foreach ($_POST['qt'] as $index => $quantity) {
    // var_dump($index); // On debug
    // var_dump($quantity); // On debug
    $ski_resort = $ski_resorts[$index];
    echo $ski_resort['name'] . ' : '. $quantity .'<br>';
    echo $ski_resort['skipass_price'] * $quantity. ' €';
    echo '<br>';
}
