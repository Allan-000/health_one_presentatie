<!doctype html>
<html lang="en">
<head>
    <?php
    include_once '../Templates/defaults/head.php';
    ?>
</head>
<body>
<div class="container">
    <?php
    include_once '../Templates/defaults/header.php';
    include_once '../Templates/defaults/pictures.php';
    include_once '../Templates/defaults/customerpageMenu.php';
    $customerName=$_SESSION['username'];
    echo "<h1 class='text-center py-5'>Welkom terug $customerName</h1>";
    echo "<hr>";
    include_once '../Templates/defaults/footer.php';
    ?>
</div>
</body>
</html>

