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
            case 'formCreateCategory':
                include "./categories/createCategory.php";
                break;
            case 'createCategory':
                if(isset($_GET['name'])) {
                    createCategory($_GET['name'],$_GET['desc']);
                    header("location: ../?act=listCategories");
                }
                break;
            case 'loadOneCategory':
                if(isset($_GET["id"])) {
                    $data = getCategoryById($_GET["id"]);
                    include "./categories/updateCategory.php";
                }
                break;
            case 'update':
                    if(isset($_GET["id"])){
                        updateCategory($_GET["id"], $_GET["name"], $_GET["desc"])
                    }
            default:
                break;
        }

    }
?>