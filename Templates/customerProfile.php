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
    ?>
    <h2 class="text-center my-4"><?php echo $_SESSION['username']; ?>'s profiel </h2>
    <div class="container">
        <?php
        global $mssg;
        if($mssg != ''){
            echo "<div class='d-flex justify-content-center'>";
            echo $mssg;
            echo "</div>";
        }
        ?>
        <br>
        <div class="d-flex flex-column align-items-center">
            <?php
            echo "<h5>Naam : ";
            echo $_SESSION['username'];
            echo "</h5>";
            echo "<h5>E-mail adress : ";
            echo $_SESSION['useremail'];
            echo "</h5>";
            $password=$_SESSION['password'];
            echo "<h5>Wachtwoord :  <span class='custom-password'>$password</span></h5>";
            ?>
            <button type="button" class="btn btn-primary my-2" data-bs-toggle="modal" data-bs-target="#data-reset">gegevens aanpassen</button>
            <form action="" method="post">
                <div class="modal fade" id="data-reset" tabindex="-1" aria-hidden="true" aria-labelledby="data-reset">
                    <div class="modal-dialog modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title" id="data-reset">Gegevens aanpassen</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <lable>Nieuwe naam :</lable>
                            <input type="text" name="name" value="<?php echo $_SESSION['username'];?>">
                            <br><br>
                            <lable>Nieuwe e-mail adress :</lable>
                            <input type="text" name="email" value="<?php echo $_SESSION['useremail'];?>">
                            <br><br>
                            <lable>Nieuwe wachtwoord :</lable>
                            <input  type="text" name="password" value="<?php echo $_SESSION['password']?>">
                            <br><br>
                            <lable>Geslacht :</lable>
                            <select name="gender">
                                <option value="<?php echo $_SESSION['gender']?>"><?php echo $_SESSION['gender']?></option>
                                <option value="male">man</option>
                                <option value="female">vrouw</option>
                                <option value="other">anders</option>
                            </select>
                        </div>

                        <div class="modal-footer d-flex align-items-center">
                            <input class="btn btn-success" type="submit" name="submit" value="Wijzigen">
                            <input class="btn btn-warning" type="submit" name="cancel" value="afbreken">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
    echo "<hr>";
    include_once '../Templates/defaults/footer.php';
    ?>
</div>
<script src="../public/js/custom.js"></script>
</body>
</html>
