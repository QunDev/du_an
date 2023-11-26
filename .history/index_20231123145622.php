<?php
    include "./model/categories.php";
    $dataCategories = getAllCategories();
    if(isset($_GET["act"])) {
        $action = $_GET["act"];
        switch ($action) {
            case 'value':
                # code...
                break;
            
            default:
                include "./view/home.php";
                break;
        }
    }
    
?>