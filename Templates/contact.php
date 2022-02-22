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
<div class="container">
    <div class="d-flex justify-content-center">
        <h5 class="alert alert-warning">Je moet ingelogd zijn om contact op te kunnen nemen</h5>
    </div>
</div>
<form action="/contact/" class="container">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Naam:</label>
        <input type="text" class="form-control" disabled>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" disabled>
        <div id="emailHelp" class="form-text">We delen uw contact gegevens nooit met anderen.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Uw vraag:</label>
        <textarea class="form-control" id="textareaInput" disabled></textarea>
    </div>
    <button type="submit" class="btn btn-primary disabled" disabled>Submit</button>
</form>
<hr>
<?php
include ('../Templates/defaults/footer.php');
echo "</div>";
?>
</body>
</html>