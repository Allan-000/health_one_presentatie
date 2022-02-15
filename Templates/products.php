<!doctype html>
<head>
    <?php
    global $products;
    include ('../Templates/defaults/head.php');
    ?>
</head>
<body>
<?php
echo "<div class='container'>";
include ('../Templates/defaults/header.php');
include ('../Templates/defaults/menu.php');
include ('../Templates/defaults/pictures.php');
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item"><a href="/categories">Categories</a></li>
        <li class="breadcrumb-item">products</li>
    </ol>
</nav>
<?php

echo "<div class='row'>";

foreach ($products as $product) {
    echo "<div class='col-lg-2'>";
    echo "<div class='card'>";
    echo "<a href='/product/$product->id'>";
    echo "<img class='card-img img-fluid' src='/img/$product->picture'>";
    echo "</a>";
    echo "<h3 class='text-center'><i>$product->name</i></h3>";
    echo "</div>";
    echo "</div>";
}
echo "</div>";
?>
<hr>
<?php
include ('../Templates/defaults/footer.php')
?>
</body>
</html>