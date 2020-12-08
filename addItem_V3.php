<html>
<body>
<form method="post" action="displayItem.php" >

    <p> Choisissez votre article :
    </p>
    <p> Nom de l'article : </p>
    <input type="text" name="nom" />

    <?php if (isset($_GET["iserror"]) AND $_GET["iserror"] == true){
        echo "Veuillez remplir le champ manquant ! ";
    }?>

    <p>Prix de l'article : </p>
    <input type="text" name="prix" />

    <p>La photo de mon article : </p>
    <input type="text" name="photo" />

    <input type="submit" value="Valider" />

</form>
</body>
</html>