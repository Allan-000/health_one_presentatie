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
    include_once '../Templates/defaults/customerpageMenu.php';
    include_once '../Templates/defaults/pictures.php';
    
    if(isset($_SESSION['contactMssg'])){
        echo $_SESSION['contactMssg'];
    }
    
    $customerName=$_SESSION['username'];
    echo "<h2 class='text-center py-5'>Welkom terug $customerName</h2>";
    
    echo "<hr>";
    include_once '../Templates/defaults/footer.php';
    ?>
</div>
</body>
</html>

