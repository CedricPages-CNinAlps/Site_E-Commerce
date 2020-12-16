<?php
include_once('data.php'); // identique à include
global $ski_resorts; // "import" de la variable dans ce fichier

// var_dump($ski_resorts); pour savoir ce qu'il y a dans la variable
?>

<h2>Check</h2>
<form action="checked.php" method="post">
    <?php foreach ($ski_resorts as  $index => $ski_resort) { ?>
        <?php // var_dump($index); ?>
        <?php // https://www.php.net/manual/fr/control-structures.foreach.php ?>
        <?php // var_dump($ski_resort); // pour savoir ce qu'il y a dans la variable ?>
        <?php echo $ski_resort["name"]; ?><br>
        <?php echo $ski_resort["elevation"]; ?> m<br>
        <?php echo $ski_resort["skipass_price"]; ?> €<br>

        <input type="checkbox" name="check[]" value="<?php echo $index ?>">
        <!-- on utilise les [] car on veut soumettre un table de valeurs
            https://stackoverflow.com/questions/3314567/how-to-get-form-input-array-into-php-array
            https://www.php.net/manual/fr/faq.html.php : Comment créer un tableau dans une balise <form> HTML ?
         -->
        <hr>
    <?php } ?>

    <button type="submit">Submit checked ski resorts</button>
</form>

<h2>Quantity</h2>
<form action="order.php" method="post">
    <?php foreach ($ski_resorts as  $index => $ski_resort) { ?>
        <?php echo $ski_resort["name"]; ?><br>
        <?php echo $ski_resort["elevation"]; ?> m<br>
        <?php echo $ski_resort["skipass_price"]; ?> €<br>
        <input type="number" name="qt[<?php echo $index; ?>]" value="">
        <!-- ici on a pas le droit de fixer la value -->
        <hr>
    <?php } ?>

    <button type="submit">Order ski resorts</button>
</form>