<?php
if (isset($_GET['isError']) && $_GET['isError']==true){
    echo 'Merci de completer tous les champs et/ou de mettre un prix supérieur à 0 !';
}

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
    <form action="displayItem.php" method="POST" enctype="multipart/form-data">
        <p>
            Formulaire d'envoi d'une photo :<br />
            <label>Nom du produit : <input type="text" name="nom"></label>
            <label>Prix du produit : <input type="number" name="prix"></label>
            <input type="file" name="image" /><br />
            <input type="submit" value="Envoyer le formulaire avec l'image" />
        </p>
    </form>
</body>
</html>
