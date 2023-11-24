<?php
    include "../model/pdo.php";
    include "../model/categories.php";

    include "../templates/header.php";

    if(isset($_GET["act"])) {
        $action = $_GET["act"];
        switch ($action) {
            case 'listCategories':
                $allCategories = getAllCategories();
                include "./categories/listCategories.php";
                break;
            case 'deleteOne':
                if(isset($_GET["id"])) {
                    deleteOne($_GET["id"]);
                    header("location: ../admin/?act=listCategories");
                }
            case 'createCategory'    
            
            default:
                break;
        }

    }
?>