<?php
    session_start();

    include "./model/pdo.php";
    include "./model/categories.php";
    include "./model/products.php";
    include "./model/client.php";
    include "./templates/header.php";
    $dataCategories = getAllCategories();
    $quantity = countProduct();
    if(isset($_GET["act"])) {
        $action = $_GET["act"];
        switch ($action) {
            case 'product-detail':
                if(isset($_GET["id"])) {
                    $dataProduct = getDataById($_GET["id"]);
                    include "./view/product-detail.php";
                }
                break;
            case 'filterProduct':
                if(isset($_GET["id"])) {
                    $dataProducts = filterProductByCategory($_GET["id"]);
                    include "./view/home.php";
                }
                break;
            case 'signIn':
                include "./view/signIn.php";
                break;
            case 'signUp':
                include "./view/signUp.php";
                break;
            case 'checkAccount':
                $email = $_POST["email"];
                $password = $_POST["password"];
                if(isset($_POST["checkbox"])) {
                    $_SESSION["email"] = $email;
                } else {
                    setcookie("email", $email, time() + 60, "/");
                }
                if(checkSignIn($email, $password)) {
                    header("location: ./?act=logined");
                } else {
                    header("location: ./?act=signIn");
                }
                break;
            case 'checkSignUp':
                if(isset($_POST["email"])) {
                    $email = $_POST["email"];
                    $password = $_POST["password"];
                    createUser($email, md5($password),date("l jS \of F Y h:i:s A"), 0);
                    
                }
                break;
            case 'logined':
                if(isset($_SESSION["email"]) || $_COOKIE["email"]) {
                    $dataProducts = getProducts();
                    include "./view/home-logined.php";
                } else {
                    header("location: ./");
                }
                break;
            case 'checkout':
                include "./view/checkout.php";
                break;
            default:
                $dataProducts = getProducts();
                include "./view/home.php";
                break;
        }
    } else {
        $dataProducts = getProducts();
        include "./view/home.php";
    }
    
?>