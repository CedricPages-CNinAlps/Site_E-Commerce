<?php
include_once('data.php'); // identique à include
global $ski_resorts; // "import" de la variable dans ce fichier

// var_dump($_POST);

$checked_resorts_index = $_POST['check']; // récupération des index

foreach ($checked_resorts_index as $resort_index) {
     $ski_resort = $ski_resorts[$resort_index];
    echo $ski_resort['name'] . '<br>';
}