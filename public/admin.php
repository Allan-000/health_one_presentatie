<?php
require_once ('../Modules/AddItem.php');
require_once ('../Modules/Beheer.php');
require_once ('../Modules/OpeningTimes.php');
require_once ('../Modules/Request.php');
global $params;
if(isset($params[1]) && empty($params[2])){
    include_once '../Templates/adminhome.php';
}
elseif (isset($params[1]) && !empty($params[2])){
    switch ($params[2]){
        case 'beheer':
            if(empty($params[3])){
                include_once '../Templates/beheer.php';
            }
            elseif (!empty($params[3]) && $params[3]=='additempage'){
                            $productAdded = false;
            if(isset($_POST['additem'])){
                $productName=filter_input(INPUT_POST,'product-name',FILTER_SANITIZE_STRING);
                $categoryId=filter_input(INPUT_POST,'category',FILTER_SANITIZE_NUMBER_INT);
                $productPic=$_FILES['photo']['name'];
                $productTmpName = $_FILES['photo']['tmp_name'];
                $productDiscription=filter_input(INPUT_POST,'description',FILTER_SANITIZE_STRING);
                if(!empty($productName && !empty($categoryId)) && !empty($productPic) && !empty($productPic)){
                    move_uploaded_file($productTmpName,'img/'.$productPic);
                    $addedDevice=addDevice($productName,$productPic,$categoryId,$productDiscription);
                    header("Location: /admin/beheer");
                }
            }
            include_once ('../Templates/additempage.php');
            }
            elseif (!empty($params[3]) && $params[3]=='adjustitempage'){
                    $toAdjustItemId=$_GET['id'];
                    $product=getProduct($toAdjustItemId);
                    if(isset($_POST['adjust'])){
                        $newProductName=filter_input(INPUT_POST,'product-name',FILTER_SANITIZE_STRING);
                        $newCategoryId=filter_input(INPUT_POST,'category',FILTER_SANITIZE_NUMBER_INT);
                        $newProductDescription=filter_input(INPUT_POST,'description',FILTER_SANITIZE_STRING);
                        $adjustItem=adjustItem($newProductName,$newCategoryId,$newProductDescription,$toAdjustItemId);
                        header("Location: /admin/beheer");
                    }
                    else if(isset($_POST['cancelAdjust'])){
                        header("Location: /admin/beheer");
                    }
                include_once '../Templates/adjustitempage.php';
            }
            elseif (!empty($params[3]) && $params[3]=='removeitem'){
                $itemRemoveMssg='';
                $toRemoveProductId=$_GET['id'];
                $product=getProduct($toRemoveProductId);
                if(isset($_POST['remove'])){
                    $removedItem=removeItem($toRemoveProductId);
                    $itemRemoveMssg="<h5 class='alert alert-success'>Toestel successvol verwijderd</h5>";
                    header("Location: /admin/beheer");
                }
                else if(isset($_POST['cancelRemove'])){
                    header("Location: /admin/beheer");
                }
                include_once ('../Templates/removeitem.php');
            }
            break;
        case 'openingstijden-aanpassen':
            include_once '../Templates/openingstijden-master-page.php';
            if(isset($_SESSION['dayMssg']))
                unset($_SESSION['dayMssg']);
            break;
        case 'openingstijden-detail-page':
            if (isset($_POST['submit'])){
                $dayMssg='';
                $dayId=$_GET['id'];
                $openingTime=filter_input(INPUT_POST,'opening');
                $closingTime=filter_input(INPUT_POST,'closing');
                $updatedDay=adjustTime($openingTime,$closingTime,$dayId);
                $_SESSION['dayMssg']  = "<h4 class='text-center alert alert-success m-auto w-50'>De tijden zijn succesvol aangepast</h4>";
                header("Location:/admin/openingstijden-aanpassen");
            }
            else if(isset($_POST['cancel'])){
                header("Location:/admin/openingstijden-aanpassen");
            }
            include_once ('../Templates/openingstijden-detail-page.php');
            break;
        case 'requests':
            if($params[2]=='requests' && empty($params[3])){
                include_once '../Templates/requests.php';
            }
            elseif ($params[2]=='requests' && !empty($params[3])){
                if(isset($_POST['apply'])){
                    $requestId=$_GET['id'];
                    $toRemoveRequest=deleteRequest($requestId);
                    header("Location: /admin/requests");
                }
                elseif (isset($_POST['cancel'])){
                    header("Location: /admin/requests");
                }
                include_once '../Templates/deleteRequest.php';
            }
            break;
    }
}
