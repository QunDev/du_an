<?php
    include "./model/categories.php";
    $action = $_GET["act"];
    switch ($action) {
        case 'value':
            # code...
            break;
        
        default:
    include "./view/home.php";
            
            break;
    }
?>