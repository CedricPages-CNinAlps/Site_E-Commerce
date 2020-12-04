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
if (!empty($_POST["nom"]) AND !empty($_POST["prix"]) AND $_POST["prix"]>0){
    echo "Le nom du produit est " . htmlspecialchars($_POST["nom"]) . " et il est au prix de ". htmlspecialchars($_POST["prix"]);
    }
else {
    echo 'Merci de completer tous les champs et/ou de mettre un prix supérieur à 0 !';
    }
?>
</body>

</html>
