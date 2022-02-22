<!doctype html>
<html lang="en">
<head>
    <?php
    include_once ('../Templates/defaults/head.php');
    require_once ('../Modules/OpeningTimes.php');
    ?>
</head>
<body>
<div class="container">
    <?php
    include_once ('defaults/header.php');
    include_once ('defaults/adminpageMenu.php');
    include_once ('defaults/pictures.php');
    $openingTime=getSingleOpningTime($_GET['id']);
    ?>
    <h2 class="text-center my-3">De tijden van <?=$openingTime[0]->day?> aanpassen:</h2>
    <div class="container d-flex flex-column align-items-center">
        <form method="post">
            <span>
                <label>Gewenste opening tijd invoeren  :</label>
                <input name="opening" type="time" value="<?=$openingTime[0]->opening?>">
            </span>
            <br><br>
            <span>
                <label>Gewenste sluiting tijd invoeren  :</label>
                <input name="closing" type="time" value="<?=$openingTime[0]->closing?>">
            </span>
            <div class="d-flex justify-content-center my-3">
                <input name="submit" type="submit" class="btn btn-success mx-2" value="Aanpassen">
                <input name="cancel" type="submit" class="btn btn-secondary mx-2" value="annuleren">
            </div>
        </form>
    </div>

    <hr>
    <?php
    include_once ('defaults/footer.php')
    ?>
</div>

