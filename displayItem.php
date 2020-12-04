<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
// Testons si le nom est complété ainsi que le prix et que le prix est supérieur à 0
if (!empty($_POST["nom"]) AND !empty($_POST["prix"]) AND $_POST["prix"]>0){
    echo "Le nom du produit est " . htmlspecialchars($_POST["nom"]) . " et il est au prix de ". htmlspecialchars($_POST["prix"]);
    }
else {
    echo 'Merci de completer tous les champs et/ou de mettre un prix supérieur à 0 !';
    }
?>
<br>
<?php
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0)
{
    // Testons si le fichier n'est pas trop gros
    if ($_FILES['image']['size'] <= 1000000)
    {
        // Testons si l'extension est autorisée
        $infosfichier = pathinfo($_FILES['image']['name']);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
        if (in_array($extension_upload, $extensions_autorisees))
        {
            // On peut valider le fichier et le stocker définitivement
            move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . basename($_FILES['image']['name']));
            echo "L'envoi a bien été effectué !";
        }
    }
}
?>
</body>

</html>
