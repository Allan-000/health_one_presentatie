<!doctype html>
<html lang="en">
<head>
    <?php
    include_once ('../Templates/defaults/head.php');
    require_once ('../Modules/Beheer.php');
    ?>
</head>
<body>
<div class="container">
    <?php
    global $product;

    include_once ('../Templates/defaults/header.php');
    include_once ('../Templates/defaults/adminpageMenu.php');
    include_once ('../Templates/defaults/pictures.php');
    ?>
    <div>
        <card class="d-flex flex-column align-items-center">
            <h3 class="card-title text-center"><?= $product->name ?></h3>
            <img class='mx-auto d-block w-25' src="/img/categories/crosstrainer/<?=$product->picture?>">
        </card>
        <h5 class="alert alert-warning text-center">Weet je zeker dat je deze toestel wil verwijderen ?</h5>
    </div>
    <form class="d-flex justify-content-center" action="" method="post">
        <input class="btn btn-secondary mx-2" type="submit" name="remove" value="verwijderen">
        <input class="btn btn-primary mx-2" type="submit" name="cancelRemove" value="annuleren">
    </form>
    <hr>
    <?php
    include_once ('../Templates/defaults/footer.php');
    ?>
</div>
</body>