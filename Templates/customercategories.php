<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>
<body>
<div class="container">
    <?php
    include_once '../Templates/defaults/header.php';
    include_once '../Templates/defaults/customerpageMenu.php';
    include_once '../Templates/defaults/pictures.php';
    ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/customer">Home</a></li>
            <li class="breadcrumb-item"><span> Categories</span></li>
        </ol>
    </nav>
    <?php
    $categories=getCategories();
    echo "<div class='container m-auto row'>";
    global $categories;
    foreach ($categories as $category){
        echo "<div class='card col-lg-3'>";
        echo "<a href='/customer/category/$category->id'>";
        echo "<img class='card-img' src='../$category->picture'>";
        echo "</a>";
        echo "<h4 class='text-center'>$category->category_name</h4>";
        echo "</div>";
    }
    echo "</div>";
    ?>
    <hr>
    <?php
    include_once('defaults/footer.php');
    ?>
</div>
</body>