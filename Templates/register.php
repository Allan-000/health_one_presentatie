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
    if(isset($_GET['submit'])){
        var_dump($_GET);
    }
    ?>
    <section class="gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <?php
                    global $mssg;
                    if($mssg!=''){
                        echo $mssg;
                    }
                    ?>
                    <div class="card shadow-lg card-registration" style="border-radius: 15px;">
                        <h3 class="pt-5 text-center">Registreren</h3>
                        <div class="card-body p-4 p-md-5">
                            <form method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" name="name" class="form-control form-control-lg" required/>
                                            <label class="form-label">Naam</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <input type="email" name="email" class="form-control form-control-lg" required/>
                                            <label class="form-label">Email</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <input type="password" name="password" class="form-control form-control-lg" required/>
                                            <label class="form-label" for="emailAddress">Wachtword</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <select class="w-100 h-50" name="gender" required>
                                            <option value="male">Man</option>
                                            <option value="female">Vrouw</option>
                                            <option value="other">Anders</option>
                                        </select>
                                        <label class="form-label">Geslacht </label>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4 d-flex justify-content-center flex-column">
                                    <label class="text-center">Selecteer uw foto :</label><br>
                                    <input type="file" name="picture" class="d-flex m-auto">
                                </div>

                                <div>
                                    <input class="btn btn-primary btn-lg d-block mx-auto" name="submit" type="submit" value="Registreren" />
                                </div>
                            </form>
                                <p class="text-center py-4">Heb je al een account ? <a href="/inloggen">log in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <?php
    include ('../Templates/defaults/footer.php');
    ?>
</div>
</body>
</html>