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
    $requests=getRequsets();
    ?>
    <div class="container">
        <table class="table table-hover "
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Gebruiker naam</th>
                <th class="text-center">email adress</th>
                <th class="text-center">datum</th>
                <th class="text-center">Aanvraag</th>
                <th></th>
            </tr>
        <?php
        $i=0;
        foreach ($requests as $request){
            $i++;
            echo"
            <tr>
            <td class='text-center'>$i</td>
            <td class='text-center'>$request->user_name</td>
            <td class='text-center'>$request->email_adres</td>
            <td class='text-center'>$request->date</td>
            <td class='text-center px-5 lh-lg'>$request->request</td>
            <td class='text-center'>
            <a href='/admin/requests/deleteRequest/$request->id' type='button' class='border-0'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-x-lg' viewBox='0 0 16 16'>
                  <path fill-rule='evenodd' d='M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z'/>
                  <path fill-rule='evenodd' d='M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z'/>
                </svg>
            </a>
            </td>
            </tr>
            ";
        }
        ?>
        </table>
    </div>
    <hr>
    <?php
    include_once '../Templates/defaults/footer.php';
    ?>
</div>
</body>
</html>