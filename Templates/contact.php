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
include ('../Templates/defaults/menu.php');
include ('../Templates/defaults/pictures.php');

?>
<form class="container">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Naam:</label>
        <input type="text" class="form-control" id="Name" ">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We delen uw contact gegevens nooit met anderen.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Uw vraag:</label>
        <textarea class="form-control" id="textareaInput"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<hr>
<?php
include ('../Templates/defaults/footer.php');
echo "</div>";
?>
</body>
</html>