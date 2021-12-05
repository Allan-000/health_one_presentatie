<?php
require '../Modules/Categories.php';
require '../Modules/Products.php';
require '../Modules/Database.php';
require '../Modules/Review.php';
require '../Modules/Login.php';
session_start();
global $dsn;
$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "HealthOne";
$titleSuffix = "";
$loginMssg="";
$logedInUser="";
switch ($params[1]) {
    case 'categories':
        $titleSuffix = ' | Categories';
        $categories=getCategories();
        include_once ('../Templates/categories.php');
        break;
    case 'category';
        $titleSuffix=' | category';
        if(isset($_GET['id'])){
            $categoryId=$_GET['id'];
            $products=getProducts($categoryId);
            $name=getCategoryName($categoryId);
            include_once ("../Templates/products.php");
        }
        else{
            $titleSuffix=' | Home';
            include_once ('../Templates/home.php');
        }
        break;
    case 'product';
        if(isset($_GET['id'])){
            $productId=$_GET['id'];
            $product=getProduct($productId);
            $name=getCategoryName($product->category_id);
            $titleSuffix=' | '.$product->name;
            include_once ('../Templates/product.php');
            require_once ('../Modules/Review.php');
        }
        else{
            $titleSuffix=' | Home';
            include_once ('../Templates/home.php');
        }
        break;
    case 'review';
        include_once ('../Templates/review.php');
        if(isset($_POST['submit'])){
            $reviewerName=$_POST['name'];
            $givenRating=$_POST['rating'];
            $givenDescription=$_POST['description'];
            $reviewedProductId=$_POST['productId'];
            $review=saveReviews($reviewerName,$givenRating,$givenDescription,$reviewedProductId);
            header("Location: /product/$reviewedProductId",true);
            $_POST=[];
        }
        break;
    case 'registreren':
        $titleSuffix = ' | Registreren';
        include('../Templates/register.php');
        break;
    case 'contact':
        $titleSuffix = ' | Contact';
        include ('../Templates/contact.php');
        break;
    case 'openingstijden':
        $titleSuffix = ' | openingstijden';
        include ('../Templates/openingstijden.php');
        break;
    case 'inloggen';
    require_once ('../Modules/Login.php');
        $loginMssg="";
        $user="";
        $titleSuffix=' | inloggen';
        if(isset($_POST['submit'])){
            $userEmail=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
            $userPass=filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
            $user=getUser($userEmail,$userPass);
            if(empty($userEmail) && empty($userPass)){
                $loginMssg='<p class="alert alert-danger">Je mist nog een veld</p>';
            }
            else if(!empty($userEmail) && empty($userPass)){
                $loginMssg='<p class="alert alert-danger">Je mist nog een veld</p>';
            }
            else if(empty($userEmail) && !empty($userPass)){
                $loginMssg='<p class="alert alert-danger">Je mist nog een veld</p>';
            }
            else if(empty($user->email) && empty($user->password)){
                $loginMssg='<p class="alert alert-danger">Je gegevens zij niet correct</p>';
            }
            else{
                //save user information in session
                $_SESSION['username']=$user->name;
                $_SESSION['useremail']=$user->email;
                $_SESSION['role']=$user->role;
                if($user->role=="admin"){
                    header("Location: admin");

                }
                if($user->role=="customer"){
                    header("Location: customer");
                }
            }
        }
        include_once ('../Templates/login.php');
        break;
    case 'admin':
        include_once ('../Templates/adminhome.php');
        echo "dit is admin pagina";
        if(isset($params[2]) && $params[2]=='adminhome'){
            include_once ('../Templates/adminhome.php');
        }
        if(isset($params[2]) && $params[2]=='beheer'){
            include_once ('../Templates/beheer.php');
        }
        break;
    case 'customer':
        echo "dit is klant pagina";

        break;
//    case 'additempage';
//        $addItemErrorMessege="";
//        $titleSuffix= ' | apparaat toevoegen';
//        require_once ('../Modules/AddItem.php');
//        if(isset($_POST['submit'])){
//            $deviceName=filter_input(INPUT_POST,'product-name',FILTER_SANITIZE_STRING);
//            $deviceCategory=filter_input(INPUT_POST,'category');
//            $devicePicture=filter_input(INPUT_POST,'photo');
//            $deviceDescription=filter_input(INPUT_POST,'description',FILTER_SANITIZE_STRING);
//            if(empty($deviceName)||empty($deviceCategory)||empty($devicePicture)||empty($deviceDescription)){
//                $addItemErrorMessege="Niet alle velden ingevuld";
//            }
//            else{
//                $newDevice=addDevice($deviceName,$devicePicture,$deviceCategory,$deviceDescription);
//            }
//        }
//        include_once ('../Templates/additempage.php');
//        break;
    default:
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
}

function getTitle() {
    global $title, $titleSuffix;
    return $title . $titleSuffix;
}
