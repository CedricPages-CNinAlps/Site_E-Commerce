<?php
require('data/cities.php');
?>
<html>
<body>
    <form method="POST" action="cities-result.php">
        <?php foreach ($cities as $key => $city) { ?>
            <div>
                #<?php echo $key; ?> <?php echo $city; ?>
                <input type="checkbox" name="" value="...">
            </div>
        <?php } ?>
        <button type="submit">submit</button>
    </form>
</body>
</html>