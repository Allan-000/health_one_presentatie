<?php
require '../Modules/Categories.php';
require '../Modules/Products.php';
require '../Modules/Database.php';
require '../Modules/Review.php';
require '../Modules/User.php';
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
    case 'registreren':
        $titleSuffix = ' | Registreren';
        if(isset($_POST['submit'])){
            $mssg='';
            $toRegisterName=filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
            $toRegisterEmail=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
            $toRegisterPassword=filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
            $toRegisterGender=filter_input(INPUT_POST,'gender');
            $toRegisterPictureName=$_FILES['picture']['name'];
            $toRegisterPictureTempName=$_FILES['picture']['tmp_name'];
            //the following lines of code check if the registerd user does realy exist
            $excitingUser=doesUserExist($toRegisterEmail);
            if($excitingUser != true){
                if(!empty($toRegisterName) && !empty($toRegisterEmail) && !empty($toRegisterPassword) && !empty($toRegisterGender) && !empty($toRegisterPictureName)){
                    $toRegisterUser=addUser($toRegisterName,$toRegisterEmail,$toRegisterPassword,$toRegisterGender,$toRegisterPictureName,'customer');
                    move_uploaded_file($toRegisterPictureTempName,'img/'.$toRegisterPictureName);
                    $mssg="<h5 class='alert alert-success text-center'>U bent succesvol geregistreed in de systeem, U kunt nu <a href='/inloggen'>inloggen</a></h5>";
                }
                else{
                    $mssg="<h5 class='alert alert-danger text-center'>Niet alle velden zijn ingevuld ... !</h5>";
                }
            }
            else {
                $mssg="<h5 class='alert alert-warning text-center'>De ingevoerde email bestaat in onze systeem, <a href='/inloggen'>U kunt daarmee inloggen</a></h5>";
            }
        }
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
    require_once('../Modules/User.php');
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
                $_SESSION['password']=$user->password;
                $_SESSION['gender']=$user->gender;
                $_SESSION['userId']=$user->id;
                $_SESSION['picture']=$user->picture;
                header("Location: /".$_SESSION['role']);
            }
        }
        include_once ('../Templates/login.php');
        break;
    case 'admin':
        if($_SESSION['role']=='admin'){
            include_once ('admin.php');
        }
        else{
            header("Location: /inloggen");
        }
        break;
    case 'customer':
        if($_SESSION['role']=='customer'){
            include_once ('customer.php');
        }
        else{
            header("Location: /inloggen");
        }
        break;

    default:
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
}

function getTitle() {
    global $title, $titleSuffix;
    return $title . $titleSuffix;
}
