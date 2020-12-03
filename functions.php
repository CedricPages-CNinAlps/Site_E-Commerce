<?php
function displayItem1(){
    $Nom = "Article_1";
    $Prix = 10 . " €";
    $Photo = "img/images.jpg";
?>
    <div class="card" style="width: 18rem;">
    <img src="<?= $Photo ?>" class="card-img-top" alt=<?= $Nom ?> >
    <div class="card-body">
        <h5 class="card-title"><?=  $Nom ?></h5>
        <a href="#" class="btn btn-primary"><?= $Prix ?></a>
    </div>
</div>
<?php
}
?>

<?php
function displayItem2() {
    $Nom = "Article_2";
    $Prix = 15 . " €";
    $Photo = "img/102336.jpg";
?>
    <div class="card" style="width: 18rem;">
        <img src="<?= $Photo ?>" class="card-img-top" alt=<?= $Nom ?> >
        <div class="card-body">
            <h5 class="card-title"><?=  $Nom ?></h5>
            <a href="#" class="btn btn-primary"><?= $Prix ?></a>
        </div>
    </div>
<?php
}
?>

<?php
function displayItem3(){
    $Nom = "Article_3";
    $Prix = 20 . " €";
    $Photo = "img/Nain_medite.jpg";
    ?>
    <div class="card" style="width: 18rem;">
        <img src="<?= $Photo ?>" class="card-img-top" alt=<?= $Nom ?> >
        <div class="card-body">
            <h5 class="card-title"><?=  $Nom ?></h5>
            <a href="#" class="btn btn-primary"><?= $Prix ?></a>
        </div>
    </div>
    <?php
}
?>

<?php
function displayItem($Nom,$Prix,$Photo){
?>
        <div class="card" style="width: 18rem;">
            <img src="<?= $Photo ?>" class="card-img-top" alt="<?= $Nom?>">
            <div class="card-body">
                <h5 class="card-title"><?= $Nom?></h5>
                <a href="#" class="btn btn-primary"><?= $Prix ?></a>
            </div>
        </div>
<?php
}
?>
