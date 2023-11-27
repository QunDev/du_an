<?php
    include "./model/pdo.php";
    include "./model/categories.php";
    include "./model/products.php";
    $dataCategories = getAllCategories();
    if(isset($_GET["act"])) {
        $action = $_GET["act"];
        switch ($action) {
            case 'ho':
                # code...
                break;
            
            default:
                $dataProducts = getProducts();
                include "./view/home.php";
                break;
        }
    } else {
        include "./view/home.php";
    }
    
?>