<?php
    include "../model/pdo.php";

    if(isset($_GET["act"])) {
        $action = $_GET["act"];
        switch ($action) {
            case 'listCategories':
                include "./categories/listCategories"
                break;
            
            default:
                # code...
                break;
        }

    }
?>