<!doctype html>
<html lang="en">
<head>
    <?php
    include_once ('../Templates/defaults/head.php');
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
    include_once ('defaults/header.php');
    include_once ('defaults/adminpageMenu.php');
    include_once ('defaults/pictures.php');
    $times=getTimes();
    if(isset($_POST['submit'])){
        $toUpdateTime=adjustItem();
    }
    ?>
    <div class="container">
        <h2 class="text-center text-secondary py-2">Openingstijden aanpassen:</h2>
        <br>
        <?php
        if (!empty($_SESSION['dayMssg'])) {
            echo $_SESSION['dayMssg'];
        }
        ?><br>
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
                <td>
                <a class='btn btn-success' href='openingstijden-detail-page/$time->id'>tijden aanpassen</a>
                </td>
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