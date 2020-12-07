<?php
if (isset($_GET['isError']) && $_GET['isError']==true){
    echo 'Merci de completer tous les champs et/ou de mettre un prix supérieur à 0 !';
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Formulaire</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    </head>

    <body class="bg-light">
        <div class="container">
            <div class="py-5 text-center">
                <h2>Ajouter un nouveau produit au catalogue</h2>
                <p class="lead">Pour ajouter un nouveau produit merci de suivre les étape suivantes :</p>
            </div>

            <div class="row">

                <div class="col-md-8 order-md-1">
                    <form action="displayItem_V2.php" method="POST" enctype="multipart/form-data">
                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label for="firstName">Nom du produit : </label>
                                <input type="text" class="form-control" id="nomProduit">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="lastName">Prix du produit : </label>
                                <input type="number" class="form-control" id="prixProduit">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Photo du produit : <input type="file" name="imageProduit"/></label>
                            </div>
                </div>

                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Envoyer le formulaire avec l'image</button>
                </form>
            </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
        </footer>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>

</html>