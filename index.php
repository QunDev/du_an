<?php
    include "./model/pdo.php";
    include "./model/categories.php";
    include "./model/products.php";
    include "./templates/header.php";
    $dataCategories = getAllCategories();
    if(isset($_GET["act"])) {
        $action = $_GET["act"];
        switch ($action) {
            case 'product-detail':
                if(isset($_GET["id"])) {
                    $dataProduct = getDataById($_GET["id"]);
                    include "./view/product-detail.php";
                }
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