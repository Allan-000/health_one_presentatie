<!doctype html>
<html lang="en">
<head>
    <?php
    include ('../Templates/defaults/head.php');
    ?>
</head>
<body>
<?php
echo "<div class='container'>";
include ('../Templates/defaults/header.php');
include ('../Templates/defaults/customerpageMenu.php');
include ('../Templates/defaults/pictures.php');
global $errMssg;
if($errMssg!==''){
    echo $errMssg;
}
?>

<form method="post" class="container">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Naam:</label>
        <div class="border border-2 rounded-3">
            <h5 class="px-2">
                <?php
                echo $_SESSION['username'];
                ?>
            </h5>
        </div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <div class="border border-2 rounded-3">
            <h5 class="px-2">
                <?php
                echo $_SESSION['useremail'];
                ?>
            </h5>
        </div>
        <div id="emailHelp" class="form-text">We delen uw contact gegevens nooit met anderen.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Uw vraag:</label>
        <textarea name="request" class="form-control" id="textareaInput"></textarea>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<hr>
<?php
include ('../Templates/defaults/footer.php');
echo "</div>";
?>
</body>
</html>