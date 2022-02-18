<?php
require_once '../Modules/Database.php';
require_once '../Modules/Request.php';

$cookieName='mssg';
$cookieValue="<h5 class='alert alert-success text-center'>Bedankt, We gaan je feedback/aanvraag z.s.m behandelen</h5>";
setcookie($cookieName,$cookieValue,time() + 3600, "/");

$request=$_SERVER['REQUEST_URI'];
$params=explode('/',$request);

switch ($params[1]){
    case '':
        include_once '../Templates/customerhome.php';
        break;
    case 'customer':
        if($params[1]=='customer' && empty($params[2])){
            include_once '../Templates/customerhome.php';
        }
        else if($params[1]=='customer' && $params[2]=='customerhome'){
            include_once '../Templates/customerhome.php';
        }
        else if($params[1]=='customer' && !empty($params[2]) && $params[2]=='customerProfile'){
            $mssg='';
            if(isset($_POST['submit'])){
                $newUserName=filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
                $newUserEmail=filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
                $newPassword=filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
                $role=$_SESSION['role'];
                $userId=$_SESSION['userId'];
                $gender=filter_input(INPUT_POST,'gender',FILTER_SANITIZE_STRING);
                if(!empty($newUserName) && !empty($newUserEmail) && !empty($newPassword) && !empty($gender)){
                    $toApplyChanges=adjustUserData($newUserName,$newUserEmail,$newPassword,$role,$gender,$userId);
                    $mssg="<alert class='alert alert-success'>Je gegevens successvol gewijzigd</alert>";
                }
                else{
                    $mssg="<alert class='alert alert-warning'>Er ontbreken sommige velden, Vul ze In AUB</alert>";
                }
            }

            include_once '../Templates/customerProfile.php';
        }
        else if($params[1]=='customer' && !empty($params[2]) && $params[2]=='categories'){
            include_once '../Templates/customercategories.php';
        }
        else if($params[1]=='customer' && !empty($params[2]) && $params[2]=='category'){
            if(isset($params[3])){
                $categoryId=$params[3];
                $products=getProducts($categoryId);
                include_once '../Templates/customerproducts.php';
            }
        }
        else if($params[1]=='customer' && !empty($params[2]) && $params[2]=='product'){
            if(isset($params[3])){
                $productId=$params[3];
                $product=getProduct($productId);
            }
            include_once '../Templates/customerproduct.php';
        }
        else if($params[1]=='customer' && !empty($params[2]) && $params[2]=='review'){
            if(isset($params[3])){
                $productId=$params[3];
                $product=getProduct($productId);
                if(isset($_POST['submit'])){
                    $reviewerName=$_SESSION['username'];
                    $userId=$_SESSION['userId'];
                    $givenRating=filter_input(INPUT_POST,'rating');
                    $givenDescription=filter_input(INPUT_POST,'description',FILTER_SANITIZE_STRING);
                    $review=uplaodReview($reviewerName,$givenRating,$givenDescription,$productId,$userId);
                    header("Location: /customer/product/$productId");
                }
                include_once '../Templates/customerreview.php';
            }
        }
        else if($params[1]=='customer' && !empty($params[2]) && $params[2]=='openingstijden'){
            include_once '../Templates/customerOpeningTimes.php';
        }
        else if($params[1]=='customer' && !empty($params[2]) && $params[2]=='contact'){
            if (isset($_POST['submit'])){
                $errMssg='';
                $username=$_SESSION['username'];
                $userEmailAdress=$_SESSION['useremail'];
                $userId=$_SESSION['userId'];
                $userRequest=filter_input(INPUT_POST,'request',FILTER_SANITIZE_STRING);
                if(!empty($userRequest)){
                    $toUploadReq=uploadRequest($username,$userEmailAdress,$userRequest,$userId);

                    header("Location: /customer/customerhome");
                }
                else{
                    $errMssg="<h5 class='alert alert-danger text-center'>Je hebt geen aanvraag ingevuld...!</h5>";
                }
            }
            include_once '../Templates/customerContact.php';
        }
        break;

}