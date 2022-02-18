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
        <h2 class="text-center bg-dark text-light py-2">Openingstijden</h2>
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
    <hr>
    <?php
    include ('../Templates/defaults/footer.php');
    ?>
</div>
</body>
</html>
