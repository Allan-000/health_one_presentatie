<?php
require_once ('../Modules/AddItem.php');
require_once ('../Modules/Beheer.php');
global $params;

if(isset($params[1]) && empty($params[2])){
    switch ($params[1]){
        case 'admin':
            include_once ('../Templates/adminhome.php');
            break;
    }
}
if(isset($params[2]) && empty($params[3])){
    switch ($params[2]){
        case 'beheer':
            include_once ('../Templates/beheer.php');
            break;
    }
}
if(isset($params[3])){
    switch ($params[3]){
        case 'additempage':
            $productAdded = false;
            if(isset($_POST['additem'])){
                $productName=filter_input(INPUT_POST,'product-name',FILTER_SANITIZE_STRING);
                $categoryId=filter_input(INPUT_POST,'category',FILTER_SANITIZE_NUMBER_INT);
                $productPic=filter_input(INPUT_POST,'photo');
                $productDiscription=filter_input(INPUT_POST,'description',FILTER_SANITIZE_STRING);
                $addedDevice=addDevice($productName,$productPic,$categoryId,$productDiscription);
                header("Location: /admin/beheer");
            }
            include_once ('../Templates/additempage.php');
        break;
        case 'removeitem':
            $itemRemoveMssg='';
            $toRemoveProductId='';
            if($params[4]){
                $toRemoveProductId=$params[4];
            }
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
        break;
        case 'adjustitempage':
            $toAdjustItemId='';
            if($params[4]){
                $toAdjustItemId=$params[4];
            }
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
        include_once ('../Templates/adjustitempage.php');
        break;
    }
}
