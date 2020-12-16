<?php
$Article_1 = [
    "Nom" => "Article_1",
    "Prix" => 10 . " €" ,
    "Photo" => "img/images.jpg"
];

$Article_2 = [
    "Nom" => "Article_2",
    "Prix" => 15 . " €",
    "Photo" => "img/102336.jpg"
];

$Article_3 = [
    "Nom" => "Article_3",
    "Prix" => 20 . " €",
    "Photo" => "img/Nain_medite.jpg"
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
<main role="main">
<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="<?php echo $Article_1["Photo"] ?>" class="card-img-top" height="225" alt=<?php echo $Article_1["Nom"] ?> >
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $Article_1["Nom"] ?></h5>

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="#" class="btn btn-primary"><?php echo $Article_1["Prix"] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="<?php echo $Article_2["Photo"] ?>" class="card-img-top" alt=<?php echo $Article_2["Nom"] ?> >
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $Article_2["Nom"] ?></h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="#" class="btn btn-primary"><?php echo $Article_2["Prix"] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="<?php echo $Article_3["Photo"] ?>" class="card-img-top" alt=<?php echo $Article_3["Nom"] ?> >
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $Article_3["Nom"] ?></h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="#" class="btn btn-primary"><?php echo $Article_3["Prix"] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</main>

<!--<div class="card" style="width: 18rem;">
    <img src="<?php echo $Article_1["Photo"] ?>" class="card-img-top" alt=<?php echo $Article_1["Nom"] ?>>
    <div class="card-body">
        <h5 class="card-title"><?php echo $Article_1["Nom"] ?></h5>
        <a href="#" class="btn btn-primary"><?php echo $Article_1["Prix"] ?></a>
    </div>
</div>


<div class="card" style="width: 18rem;">
    <img src="<?php echo $Article_2["Photo"] ?>" class="card-img-top" alt=<?php echo $Article_2["Nom"] ?>>
    <div class="card-body">
        <h5 class="card-title"><?php echo $Article_2["Nom"] ?></h5>
        <a href="#" class="btn btn-primary"><?php echo $Article_2["Prix"] ?></a>
    </div>
</div>

<div class="card" style="width: 18rem;">
    <img src="<?php echo $Article_3["Photo"] ?>" class="card-img-top" alt=<?php echo $Article_3["Nom"] ?>>
    <div class="card-body">
        <h5 class="card-title"><?php echo $Article_3["Nom"] ?></h5>
        <a href="#" class="btn btn-primary"><?php echo $Article_3["Prix"] ?></a>
    </div>
</div> -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>