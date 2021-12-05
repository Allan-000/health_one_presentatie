<!doctype html>
<html lang="en">
<head>
    <?php
    include ('../Templates/defaults/head.php');
    ?>
</head>
<body>
<div class="container">
    <?php
    include ('../Templates/defaults/header.php');
    include ('../Templates/defaults/menu.php');
    include ('../Templates/defaults/pictures.php');
    ?>
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="shadow-lg card-body p-5 text-center">
                        <?php
                        global $loginMssg;
                        if (!empty($loginMssg)){
                            echo $loginMssg;
                        }
                        else{
                            echo $loginMssg;
                        }
                        ?>
                        <h3 class="mb-5">log in :</h3>
                        <form action="" method="post">
                            <div class="form-outline mb-4">
                                <input type="email" name="email" class="form-control form-control-lg" placeholder="JanKlaassen@Jan.nl" />
                            </div>
                            <div class="form-outline mb-4">
                                <input type="password" name="password" class="form-control form-control-lg" placeholder="Wachtword" />
                            </div>
                            <input name="submit" class="btn btn-primary btn-lg btn-block" type="submit" value="Inloggen">
                        </form>
                        <hr class="my-4">
                        <p>Nog geen account ? <a href="/registreren">registreer je nu !</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <?php
    include ('../Templates/defaults/footer.php');
    ?>
</div>

</body>
</html>