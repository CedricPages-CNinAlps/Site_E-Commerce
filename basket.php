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
        <h2>Votre panier</h2>
        <p class="lead">Retrouvez tous vos articles, il ne vous reste plus qu'a selectionné la quantité voulu</p>
    </div>

    <div class="row">
        <div class="col-md-4 shadow-sm">

            <?php
            include ("functions.php");
            // var_dump($_POST);   //-----------> Affiche le table des données post
            // var_dump($_POST["add"]);   //-----------> Affiche le table des données post qui sont ajouter au panier
             var_dump($list_products);   //-----------> Affiche le table des données produits


            if (isset($_POST['add'])) {
                ?>
                <form action="basket.php" method="POST">
                    <?php
                    for ($i = 0; $i < count($_POST['add']); $i++) {
                        // On veut remonter les clés/valeurs du tableau product par rapport aux valeur présent dans le tableau add (index)
                        // Dans $_POST['add'][$i], j'ai l'index d'une produit
                        // echo "Ajouter au panier " . $_POST['add'][$i] . " checked";
                        // Pour accèder à un produit à l'index "y" de tableau $list_products alors je dois taper $list_products["y"];
                        // var_dump($list_products[$_POST['add'][$i]]);   //-----------> Affiche le table des données produit par rapport au tableau post add
                        ?>
                        <div class="album py-5 bg-light">
                            <div class="container">

                                <div class="row">
                                    <div class="card mb-4 shadow-sm">
                                        <img src="<?= $list_products[$_POST['add'][$i]]['photo'] ?>" class="card-img-top" width="100%" height="225" alt=<?= $list_products[$_POST['add'][$i]]['nom'] ?> >
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $list_products[$_POST['add'][$i]]['nom'] ?></h5>
                                            <h5 class="card-title"><?= (int)$list_products[$_POST['add'][$i]]['prix'] * $_POST['qt'][$i] . '€' ?></h5>
                                            <input type="checkbox" hidden checked name="add[]" value="<?= $_POST['add'][$i] ?>">
                                            <br><label for="">Ajouter la quantité</label><input type="number" name="qt[]" value="<?= $_POST[['qt'][$i]] ?>"><br>
                                            <?= 'Vous avez une quantité de '. $_POST['qt'][$i] .' produits.<br>'; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    } ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button class="btn btn-primary" type="submit">Valider mon panier</button>
                        </div>
                    </div>
                    <?php
                    for ($i = 0; $i < count($_POST['add']); $i++) {
                        //var_dump($list_products[$_POST['add'][$i]]['prix']);
                        basketTotal($_POST[['qt'][$i]], $list_products[$_POST['add'][$i]]['prix']);
                    }
                     ?>
                </form>
            <?php }

            function basketTotal($quantite, $price){
                $total = 0;
                var_dump($quantite);
                var_dump($price);
                for($i=0; $i < count($quantite); $i++){
                    $total += $quantite[$i] * $price[$i];
                    echo "Le montant total de votre panier est de " . $total;
                }
                return $total;
            }




            /*if(array_key_exists('nom', $_POST)) {
                echo $_POST['nom'];
            }

            if(array_key_exists('prix', $_POST)) {
                echo $_POST['prix'];
            }

            if(array_key_exists('photo', $_POST)) {
                echo $_POST['photo'];
            }

            */
            ?>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>


