<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');

?>

<body>

<div class="container">
    <?php
    include_once('defaults/header.php');
    include_once('defaults/menu.php');
    include_once('defaults/pictures.php');
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/categories">Categories</a></li>
        </ol>
    </nav>
    <?php
    $categories=getCategories();
    echo "<div class='container m-auto row'>";
    global $categories;
    foreach ($categories as $category){
        echo "<div class='card col-lg-3'>";
        echo "<a href='/category/$category->id'>";
        echo "<img class='card-img' src='$category->picture'>";
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
</html>

