<!doctype html>
<html lang="en">
<?php
include_once '../Templates/defaults/head.php';
require_once '../Modules/Request.php';
?>
<body>
<div class="container">
    <?php
    include_once '../Templates/defaults/header.php';
    include_once '../Templates/defaults/adminpageMenu.php';
    include_once '../Templates/defaults/pictures.php';
    $request=getRequest($_GET['id']);
    echo "<h5 class='alert alert-warning w-50 m-auto text-center'>De aanvraag van $request->user_name verwerken en verwijderen.</h5>";
    echo "<div class='container d-flex flex-column justify-content-center px-5'>
                            <h6 class='text-center lh-lg'>Deze aanvraag is ingediend door : $request->user_name</h6>
                            <h6 class='text-center lh-lg'>$request->user_name is te bereiken via <i> $request->email_adres</i></h6>
                            <h6 class='text-center lh-lg'>De aanvraag is ingediend op : $request->date</h6>
                            <h5 class='text-center lh-lg'>$request->request</h5>
                </div>";
    ?>
    <form class="d-flex justify-content-center" method="post">
        <input class="btn btn-success mx-2" type="submit" name="apply" value="verwerken en verwijderen">
        <input class="btn btn-primary mx-2" type="submit" name="cancel" value="annuleren">
    </form>
    <hr>
    <?php
    include_once '../Templates/defaults/footer.php';
    ?>
</div>
</body>
</html>