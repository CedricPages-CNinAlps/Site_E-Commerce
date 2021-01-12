<?php
$list_products = [
    [
        "nom" => "Article_1",
        "prix" => 10 . " €" ,
        "photo" => "img/images.jpg"
    ],
    [
        "nom" => "Article_2",
        "prix" => 15 . " €" ,
        "photo" => "img/102336.jpg"
    ],
    [
        "nom" => "Article_3",
        "prix" => 20 . " €" ,
        "photo" => "img/Nain_medite.jpg"
    ],
    [
        "nom" => "Article_1",
        "prix" => 10 . " €" ,
        "photo" => "img/images.jpg"
    ],
    [
        "nom" => "Article_2",
        "prix" => 15 . " €" ,
        "photo" => "img/102336.jpg"
    ],
    [
        "nom" => "Article_3",
        "prix" => 20 . " €" ,
        "photo" => "img/Nain_medite.jpg"
    ]
];

function displayItem($nom,$prix,$photo,$index){ //fonction avec les 3 paramètres
    ?>
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <div class="card mb-4 shadow-sm">
                    <img src="<?php echo $photo ?>" class="card-img-top" width="100%" height="225" alt=<?php echo $nom ?> >
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $nom ?></h5>
                        <h5 class="card-title"><?php echo $prix ?></h5>
                        <input type="checkbox" name="add[]" value="<?= $index ?>"> <label for="">Ajouter au panier</label>
                        <br><input type="number" hidden name="qt[]" value="1">
                        <div class="d-flex justify-content-between align-items-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
} //fermeture de la fonction en incluant l'HTML

/*include_once('basket.php'); // identique à include
global $sum; // "import" de la variable dans ce fichier

function basketTotal($total){
    foreach ($sum as $total){
}
            }*/
?>

