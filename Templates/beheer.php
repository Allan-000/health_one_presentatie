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

    ?>
    <h2 class="text-center">beheer apparaten</h2>
    <br>

    <table class="table table-striped">
        <tr class="">
            <th>Product Naam:</th>
            <th>Plaatje</th>
            <th>Category</th>
            <th>Details Aanpassen</th>
            <th>Verwijderen</th>
        </tr>
        <?php
        $products=getProductsAdmin();
        foreach ($products as $product){
            echo "<tr>";
            echo "<td>$product->product_name</td>";
            echo "<td><img class='card-img img-fluid admin-img' src='/img/categories/crosstrainer/$product->picture'></td>";
            echo "<td>$product->category</td>";
            echo "<td><a href='/admin/beheer/adjustitempage/$product->product_id'><img class='card-img img-fluid admin-icon' src='/img/adjusticon.png'></a></td>";
            echo "<td><a href='/admin/beheer/removeitem/$product->product_id'><img class='card-img img-fluid admin-icon' src='/img/trash-alt-regular.svg'></a></td>";
            echo "</tr>";
        }
        ?>
    </table>
    <hr>
    <h4>Voeg een nieuwe apparaat toe :</h4>
    <a href='/admin/beheer/additempage'><img class='add-item' src='/img/plus-square-regular.svg' alt=''></a>
    <br><br>
</div>
</body>
</html>