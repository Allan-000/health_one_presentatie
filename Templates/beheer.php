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
    <table class="w-100 ">
        <tr>
            <th><h6>Product Naam:</h6></th>
            <th><h6>Aanpassen</h6></th>
            <th><h6>Verwijderen</h6></th>
        </tr>
        <hr>
    <?php
    $products=getProductsAdmin();
    foreach ($products as $product){
        echo "<tr class='beheer-tr'>";
        echo "<td class='p-2'>$product->name</td>";
        echo "<td class='p-2'><a href=''><img class='adjust-icon' src='../public/img/adjusticon.png'></a></td>";
        echo "<td class='p-2'><a href=''><img class='trash-can' src='../public/img/trash-alt-regular.svg'></a></td>";
        echo "</tr>";
    }
    ?>
    </table>
    <hr>
    <h4>Voeg een nieuwe apparaat toe :</h4>
    <a href='beheer/additempage'><img class='add-item' src='../public/img/plus-square-regular.svg' alt=''></a>
    <br><br>
</div>
</body>
</html>