<?php
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
    <body>

    <?php
    for ($i = 0; $i < count($list_products); $i++) {
        $list = $list_products[$i];
        ?>

        <div class="card" style="width: 18rem;">
            <img src="<?= $list["Photo"]?>" class="card-img-top" alt="<?= $list["Nom"]?>">
            <div class="card-body">
                <h5 class="card-title"><?= $list["Nom"]?></h5>
                <a href="#" class="btn btn-primary"><?= $list["Prix"]?></a>
            </div>
        </div>

        <?php
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
    </html>


