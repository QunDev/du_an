<?php
    include "./model/categories.php";
    if(isset($_GET["act"])) {
        $action = $_GET["act"];
        switch ($action) {
            case 'value':
                # code...
                break;
            
            default:
                $data = getAllCategories();
                include "./view/home.php";
                break;
        }
    }
    
?>