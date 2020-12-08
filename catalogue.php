<?php
include("functions.php"); //Appel le fichier Functions.php
$list_products = [
    [
        "Nom" => "Article_1",
        "Prix" => 10 . " €" ,
        "Photo" => "img/images.jpg"
    ],
    [
        "Nom" => "Article_2",
        "Prix" => 15 . " €" ,
        "Photo" => "img/102336.jpg"
    ],
    [
        "Nom" => "Article_3",
        "Prix" => 20 . " €" ,
        "Photo" => "img/Nain_medite.jpg"
    ]
];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body class="bg-light">
<div class="container">
    <div class="py-5 text-center">
        <h2>Notre nouveau catalogue</h2>
        <p class="lead">Retrouvez tous nos meilleurs produits</p>
    </div>

    <div class="row">
        <div class="col-md-4 shadow-sm">

<?php
foreach ($list_products as $product){ //Boucle faisant appel au tableau et lui disant qu'il contient des produits
displayItem($product["Nom"],$product["Prix"],$product["Photo"]); //Nous appelons la fonction avec les paramètres des produits
}
?>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>

