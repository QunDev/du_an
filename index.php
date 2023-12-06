<?php
    session_start();

    include "./model/pdo.php";
    include "./model/categories.php";
    include "./model/products.php";
    include "./model/client.php";
    include "./model/cart.php";
    include "./templates/header.php";
    $dataCategories = getAllCategories();
    $quantity = countProduct();
    $countOrders = countOrder();
    $dataAddress = getShippingAddress();
    $dataProducts = getProducts();
    
    if(isset($_SESSION["email"])) {
        $dataUser = getUserByEmail($_SESSION["email"]);
        $dataOrderDetial = getOrder($_SESSION["email"]);
        include "./templates/header-logined.php";
    } else {
        include "./templates/header-not.php";
    }
    
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
            case 'logOut':
                if(isset($_SESSION["email"])) {
                    unset($_SESSION["email"]);
                }
                include "./view/home.php";
                break;
            case 'checkAccount':
                $email = $_POST["email"];
                $password = $_POST["password"];
                if(checkSignIn($email, $password)) {
                    $_SESSION["email"] = $email;
                    if(isset($_SESSION["email"])) {
                        $dataProducts = getProducts();
                        header("location: ./?act=logined");
                    }
                } else {
                    header("location: ./?act=signIn");
                }
                break;
            case 'checkSignUp':
                if(isset($_POST["email"])) {
                    $email = $_POST["email"];
                    $password = $_POST["password"];
                    createUser($email, md5($password),date("l jS \of F Y h:i:s A"), 0);
                    header("location: ./?act=signIn");
                }
                break;
            case 'logined':
                if(isset($_SESSION["email"])) {
                    $dataProducts = getProducts();
                    include "./view/home.php";
                } else {
                    header("location: ./");
                }
                break;
            case 'addProduct':
                $user = $_GET["userId"];
                $productId = $_GET["id"];
                $unitPrice = $_GET["price"];
                if(isset($_SESSION["email"])) {
                    foreach ($dataOrderDetial as $data) {
                        extract($data);
                        if($productId == $productID) {
                            $quantity++;
                            updateQuantity($productId, $quantity, $unitPrice, date("l jS \of F Y h:i:s A"));
                            exit;
                        }
                    }
                }
                $unitPrice = $_GET["price"];
                addProductToOrder($user, $productId, 1, $unitPrice, date("l jS \of F Y h:i:s A"));
                if(isset($_SESSION["email"])) {
                    $user = $_SESSION["email"];
                    $dataOrderDetial = getOrder($user);
                    include "./view/checkout.php";
                }
                $dataOrderDetial = getOrder($user);
                include "./view/checkout.php";
                break;
            case 'checkout':
                if(isset($_SESSION["email"])) {
                    $user = $_SESSION["email"];
                    $dataOrderDetial = getOrder($user);
                    include "./view/checkout.php";
                }
                break;
            case 'prev':
                prevProduct($_GET["quantity"], $_GET["id"]);
                if(isset($_SESSION["email"])) {
                    $user = $_SESSION["email"];
                    $dataOrderDetial = getOrder($user);
                    include "./view/checkout.php"; 
                }
                break;
            case 'next':
                nextProduct($_GET["quantity"], $_GET["id"]);
                if(isset($_SESSION["email"])) {
                    $user = $_SESSION["email"];
                    $dataOrderDetial = getOrder($user);
                    include "./view/checkout.php"; 
                }
                break;
            case 'deleteOrder':
                deleteOrder($_GET["id"]);
                if(isset($_SESSION["email"])) {
                    $user = $_SESSION["email"];
                    $dataOrderDetial = getOrder($user);
                    include "./view/checkout.php"; 
                }
                break;
            case 'shipping':
                $user = $_SESSION["email"];
                $dataOrderDetial = getOrder($user);
                
                include "./view/shipping.php";
                break;
            case 'addAddress':
                $id = $_GET["id"];
                $name = $_GET["name"];
                $phone = $_GET["phone"];
                $address = $_GET["address"];
                addAddress($id, $name, $phone, $address);
                include "./view/shipping.php";
                break;
            case 'payment':
                $dataAddressById = getAddressById($_GET["id"]);
                include "./view/payment.php";
                break;
            case 'buySuccess':
                if(isset($_SESSION["email"])) {
                    $pay = $_GET["paymentMethod"];
                    $address = $_GET["address"];
                    foreach (getOrder($_SESSION["email"]) as $value) {
                        extract($value);

                        buySuccess($productID, $userId, date("l jS \of F Y h:i:s A"), "Đợi xác nhận", $pay, $address, $unitPrice + 3, $quantity);
                    }
                    extract($dataUser);
                    $data = getBySuccess($userId);
                    include "./view/buy.php";
                }
                
                break;
            case 'profile':
                extract($dataUser);
                include "./view/profile.php";
                break;
            case 'buy':
                extract($dataUser);
                $data = getBySuccess($userId);
                include "./view/buy.php";
                break;
            case 'buyDetail':
                extract($dataUser);
                $id = $_GET["id"];
                $data = getByIdBuy($id);
                include "./view/buyDetail.php";
                break;
            case 'updateAddress':
                $value = $_GET["address"];
                $id = $_GET["id"];
                updateIn4($value, $id);
            default:
                
                include "./view/home.php";
                break;
        }
    } else {
        include "./view/home.php";
    }
    
?>