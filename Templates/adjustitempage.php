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
    include_once ('../Templates/defaults/header.php');
    include_once ('../Templates/defaults/adminpageMenu.php');
    include_once ('../Templates/defaults/pictures.php');
    global $product;
    ?>
    <div class="container border mt-5 rounded-3 shadow-lg w-75">
        <h4 class="text-center p-4"><?=$product->name ?></h4>
        <form action="" method="post">
            <div class="form-outline d-block mx-auto w-75">
                <div class="d-flex flex-column">
                    <label class="text-center py-2"><b>Nieuwe naam van de apparaat</b></label>
                    <input type="text" name="product-name" class="form-control w-75 p-2 d-block mx-auto form-control-md" value="<?= $product->name ?>" required/>
                    <br>
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <label class="text-center py-2"><b>De category aanpassen</b></label>
                        <select name="category" class="d-block mx-auto m-3">
                            <option value="<?=$product->category_id ?>"><?= $product->category_name ?></option>
                            <option value="1">Loopband</option>
                            <option value="2">Hometrainer</option>
                            <option value="3">Crosstrainer</option>
                            <option value="4">Roeitrainer</option>
                        </select>
                    </div>
                    <br>
                    <img class="card-img product-img m-auto" src="/img/categories/crosstrainer/<?=$product->picture ?>">

                    <textarea name="description" class="d-block mx-auto w-75 p-2 mb-5" required><?=$product->description ?></textarea>
                    <div class="d-flex justify-content-center pb-3">
                        <input class="btn btn-success mx-2" type="submit" name="adjust" value="aanpassen">
                        <input class="btn btn-primary mx-2" type="submit" name="cancelAdjust" value="annuleren">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <hr>
    <?php
    include_once ('../Templates/defaults/footer.php');
    ?>
</div>
</body>
