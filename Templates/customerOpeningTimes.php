<!doctype html>
<html lang="en">
<head>
    <?php
    include ('../Templates/defaults/head.php');
    require_once ('../Modules/OpeningTimes.php');
    ?>
    <style>
        table{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        tr, td {
            padding: 12px 20px;
        }
        .opening{
            color:green;
        }
        .sluiten{
            color: hotpink;
        }
    </style>
</head>
<body>
<div class="container">
    <?php
    include ('../Templates/defaults/header.php');
    include ('../Templates/defaults/customerpageMenu.php');
    include ('../Templates/defaults/pictures.php');
    $times=getTimes();
    ?>
    <div class="container">
        <div class="row">
            <div class="col container">
                <h3 class="text-center w-75 rounded-3 m-auto bg-dark text-light py-2 shadow-lg">Adres</h3>
                <br>
                <div class="d-flex justify-content-center"><div class="gmap_canvas"><iframe width="364" height="406" id="gmap_canvas" src="https://maps.google.com/maps?q=tinwerf%2016&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/"></a><br><style>.mapouter{position:relative;text-align:right;height:406px;width:364px;}</style><a href="https://www.embedgooglemap.net">embed google maps</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:406px;width:364px;}</style></div></div>            </div>
            <div class="col container">
                <h4 class="text-center w-75 rounded-3 m-auto bg-dark text-light py-2 shadow-lg">Openingstijden</h4>
                <br><br>
                <table>
                    <tr>
                        <td> </td>
                        <td>Open</td>
                        <td>Sluit</td>
                    </tr>
                    <?php
                    foreach ($times as $time){
                        echo"
                
                             <tr>
                                <td>$time->day</td>
                                <td class='opening'>$time->opening</td>
                                <td class='sluiten'>$time->closing</td>
                              </tr>
                                ";
                    }
                    ?>
                </table>
            </div>
        </div>
        <hr>
    <?php
    include ('../Templates/defaults/footer.php');
    ?>
</div>
</body>
</html>
