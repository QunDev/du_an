<?php
    include "../model/pdo.php";
    include "../model/categories.php";

    if(isset($_GET["act"])) {
        $action = $_GET["act"];
        switch ($action) {
            case 'listCategories':
                include "./categories/listCategories";
                break;
            
            default:
                # code...
                break;
        }

    }
?>