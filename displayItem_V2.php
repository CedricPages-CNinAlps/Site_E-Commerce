<?php
$valider = '';
// Testons si le nom est complété ainsi que le prix et que le prix est supérieur à 0
if (!empty($_POST["nom"]) AND !empty($_POST["prix"]) AND ($_POST["prix"]>0)){
    $valider = ("Le nom du produit est " . htmlspecialchars($_POST["nom"]) . " et il est au prix de ". htmlspecialchars($_POST["prix"]));
}
else {
    header('Location:http://localhost/catalogue.php?isError=true');
    exit();
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
<?= $valider ?>
<br>
<?php
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0)
{

    // Testons si le fichier n'est pas trop gros
    if ($_FILES['image']['size'] <= 10000000)
    {
        // Testons si l'extension est autorisée
        $infosfichier = pathinfo($_FILES['image']['name']);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
        if (in_array($extension_upload, $extensions_autorisees))
        {
            // On peut valider le fichier et le stocker définitivement
            move_uploaded_file($_FILES['image']['tmp_name'], "img/" . basename($_FILES['image']['name']));
            echo "L'envoi a bien été effectué !";

        }
    }
}
?>

<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $Nom ?></h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="#" class="btn btn-primary"><?php echo $Prix ?></a>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card" style="width: 18rem;">
    <img src="<?php echo $Photo ?>" class="card-img-top" alt=<?php echo $Nom ?> >
    <div class="card-body">
        <h5 class="card-title"><?php echo $Nom ?></h5>
        <a href="#" class="btn btn-primary"><?php echo $Prix ?></a>
    </div>
</div>
</body>

</html>
