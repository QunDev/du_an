<?php
    include "./model/categories.php";
    $action = $_GET["act"];
    switch ($action) {
        case 'value':
            # code...
            break;
        
        default:
            getAllCategories();
            include "./view/home.php";
            
            break;
    }
?>