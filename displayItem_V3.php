<?php
$valide = " ";
if (!empty($_POST["nom"]) AND !empty($_POST["prix"]) AND $_POST["prix"]>0) {
    $valide = "le produit est bon " . htmlspecialchars($_POST["nom"]) . " " .  htmlspecialchars($_POST["prix"]) . " € " . "<br>" . "<img src=".$_POST['photo']." >" ;
}
else {
    header("Location: http://localhost/php5/addItem.php?iserror=true%22);
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
    <?php echo $valide; ?>
</body>
</html>