<?php


if (!isset($_POST['input_text']) || empty($_POST['input_text'])) {

    // ici je sais que $_POST['input_text'] n'existe pas
    header("Location: http://campus.test/formulaire/gestion-erreurs.php"); /* Redirection du navigateur */


}

echo " TOut EST OK";