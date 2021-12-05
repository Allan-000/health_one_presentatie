<?php
global $product;
global $category;
?>
<!doctype html>
<html lang="en">
<head>
    <?php
    include ('../Templates/defaults/head.php');
    require_once ('../Modules/Review.php');
    ?>
</head>
<body>
    <div class="container">
    <?php
    include ('../Templates/defaults/header.php');
    include ('../Templates/defaults/menu.php');
    include ('../Templates/defaults/pictures.php');
    ?>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <li class="breadcrumb-item"><a href="/categories">Categories</a></li>
                <li class="breadcrumb-item"><a href="/categories">products</a></li>
                <li class="breadcrumb-item"><?php echo "$product->name" ?></li>
            </ol>
        </nav>
    <?php

    echo "<card class='d-flex flex-column align-items-center'>";
    echo "<h3 class='card-title text-center'>$product->name</h3>";
    echo"<img class='mx-auto d-block w-25' src='/img/categories/crosstrainer/$product->picture'>";
    echo "<h4 class='text-center mx-5 mt-5'>over dit aparaat:</h4>";
    echo "<p class='text-center rounded m-3 p-3 mx-5 lh-lg bg-secondary text-light'>$product->description</p>";
    echo "<a href='/review/$product->id' class='btn btn-success rounded'>Review achterlaten</a>";
    echo "</card>";
    ?>
        <hr>
        <h4 class="text-center">Recente reviews</h4>
        <div class="container">
            <?php
            $reviews=getReviews($product->id);
            foreach ($reviews as $review){
                echo "<div class='card border-1 p-3 m-3 shadow-lg'>";
                echo "<p class='text-center'>$review->date</p>";
                echo "<h5 class='card-title'>$review->reviewer_name</h5>";
                echo "<h6>$review->rating sterren gegeven</h6>";
                echo "<p class='card-text'>$review->description</>";
                echo "</div class='card'>";
            }
            ?>
        </div>
        <hr>
    <?php
    include ('../Templates/defaults/footer.php')
    ?>
    </div>
</body>
</html>
