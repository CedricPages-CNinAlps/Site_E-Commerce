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
    <form action="displayItem.php" method="POST">
        <label>Nom du produit : <input type="text" name="nom"></label>
        <label>Prix du produit : <input type="number" name="prix"></label>
        <input type="submit">
    </form>
</body>
</html>
