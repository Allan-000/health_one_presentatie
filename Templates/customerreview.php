<!doctype html>
<html lang="en">
<head>
    <?php
    include_once '../Templates/defaults/head.php';
    require_once ('../Modules/Products.php');
    global $product;
    ?>
</head>
<body>
<div class="container">
    <?php
    include_once '../Templates/defaults/header.php';
    include_once '../Templates/defaults/customerpageMenu.php';
    include_once '../Templates/defaults/pictures.php';
    ?>
    <div class="container border mt-5 rounded-3 shadow-lg w-75">
        <h4 class="text-center p-4"> Voeg een review toe:</h4>
        <form method="post">
            <div class="form-outline d-block mx-auto w-75">
                <p class="text-center m-auto w-25 border border-2 border-secondary rounded-3 text-black"><b><?php echo $_SESSION['username'] ?></b></p>
                <div class="row review-area">
                    <label for="" class="col-lg-6 col-sm-12 text-center"> Geef rating op de aparaat:</label>
                    <select class="d-block mx-auto mt-2 col-lg-6 col-sm-12" name="rating" required>
                        <option value=""></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <textarea name="description" class="d-block mx-auto w-75 p-2 mb-5" placeholder="Wat vind je van dit aparaat ?" required></textarea>
                <input type="hidden" name="productId" value="<?= $product->id?>">
                <input class="btn-success rounded p-2 mb-4 d-block mx-auto text-light" type="submit" name="submit" value="review plaatsen">
            </div>
        </form>
    </div>
    <hr>

<?php
include_once '../Templates/defaults/footer.php';
?>
</div>
</body>
</html>
