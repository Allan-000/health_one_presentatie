<!doctype html>
<html lang="en">
<head>
    <?php
    include_once ('../Templates/defaults/head.php');
    ?>
</head>
<body>
<div class="container">
    <?php
    include_once ('../Templates/defaults/header.php');
    include_once ('../Templates/defaults/adminpageMenu.php');
    include_once ('../Templates/defaults/pictures.php');
    ?>

    <div class="container border mt-5 rounded-3 shadow-lg w-75">
        <h4 class="text-center p-4"> Een nieuwe apparaat toevogen</h4>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline d-block mx-auto w-75">
                <input type="text" name="product-name" class="form-control w-75 p-2 d-block mx-auto form-control-md" placeholder="Product Naam:"/>
                <br>
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <label>Bij welke categorie hoort de apparaat </label>
                    <select name="category" class="d-block mx-auto m-3">
                        <option value=""></option>
                        <option value="1">Loopband</option>
                        <option value="2">Hometrainer</option>
                        <option value="3">Crosstrainer</option>
                        <option value="4">Roeitrainer</option>
                    </select>
                </div>
                <br>
                <div class="d-flex flex-column align-items-center mb-3 justify-content-center">
                    <input type="file" name="photo">
                </div>
                <textarea name="description" class="d-block mx-auto w-75 p-2 mb-5" placeholder="Voer hier informatie over de apparaat"></textarea>

                <input class="btn-success rounded p-2 mb-4 d-block mx-auto text-light" type="submit" name="additem" value="Toevoegen">
            </div>
        </form>
    </div>
    <hr>
    <?php
    include_once ('../Templates/defaults/footer.php');
    ?>
</div>
</body>
</html>
