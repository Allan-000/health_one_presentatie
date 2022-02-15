<!doctype html>
<head>
    <?php
    global $products;
    include ('../Templates/defaults/head.php');
    ?>
</head>
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
            <li class="breadcrumb-item"><a href="/customer/categories">Categories</a></li>
        </ol>
    </nav>
    <?php
    echo "<div class='row'>";
    foreach ($products as $product) {
        echo "<div class='col-lg-2'>";
        echo "<div class='card'>";
        echo "<a href='/customer/product/$product->id'>";
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
</div>
</body>
