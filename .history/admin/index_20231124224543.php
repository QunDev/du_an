<?php
    include "../model/pdo.php";
    include "../model/categories.php";
    include "../model/products.php";

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
                    header("location: ./?act=listCategories");
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
                        updateCategory($_GET["id"], $_GET["name"], $_GET["desc"]);
                        header("location: ./?act=listCategories");
                    }
                    break;
                    // ==================================================================
            case 'listProducts':
                $dataProducts = getProducts();
                include './products/listProducts.php';
                break;
            case 'deleteOneProduct':
                if(isset($_GET["id"])) {
                    deleteOneProduct($_GET["id"]);
                    header("location: ../admin/?act=listProducts");
                }
                break;
            case 'formCreateProduct':
                include "./products/createProduct.php";
                break;
            case 'createProduct':
                if (isset($_GET['btnSubmit'])&&($_GET['btnSubmit'])) {
                    $nameProduct = $_GET['nameProduct'];
                    $price = $_GET['price'];
                    $desc = $_GET['desc'];
                    $idCategory = $_GET['idCategory'];
                    $filename = $_FILES['imgProduct']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES['imgProduct']['name']);
                    if (move_uploaded_file($_FILES["imgProduct"]["tmp_name"], $target_file)) {
                        echo "The file ". htmlspecialchars( basename($_FILES['imgProduct']['name'])). "Upload file Success.";
                      } else {
                        echo "Sorry, there was an error uploading your file.";
                      }
                    addProduct($nameProduct, $price, $filename,$desc, $idCategory);
                    $notification = "Success";
                }
                break;
            case 'loadOneProduct':

            default:
                break;
        }

    }
?>