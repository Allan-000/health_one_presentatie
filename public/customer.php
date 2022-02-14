<?php
require_once '../Modules/Database.php';

$request=$_SERVER['REQUEST_URI'];
$params=explode('/',$request);

switch ($params[1]){
    case '':
        include_once '../Templates/customerhome.php';
        break;
    case 'customer':
        if($params[1]=='customer' && !empty($params[2]) && $params[2]=='customerProfile'){
            $mssg='';
            if(isset($_POST['submit'])){
                $newUserName=filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
                $newUserEmail=filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
                $newPassword=filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
                $role=$_SESSION['role'];
                $gender=filter_input(INPUT_POST,'gender',FILTER_SANITIZE_STRING);
                if(!empty($newUserName) && !empty($newUserEmail) && !empty($newPassword) && !empty($gender)){
                    $toApplyChanges=adjustUserData($newUserName,$newUserEmail,$newPassword,$role,$gender);
                    $mssg="<alert class='alert alert-success'>Je gegevens successvol gewijzigd</alert>";
                }
                else{
                    $mssg="<alert class='alert alert-warning'>Er ontbreken sommige velden, Vul ze In AUB</alert>";
                }
            }

            include_once '../Templates/customerProfile.php';
        }
        else{
            include_once '../Templates/customerhome.php';
        }

        break;

}