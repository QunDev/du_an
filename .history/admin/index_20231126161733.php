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
                $allCategories = getAllCategories();
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
                $allCategories = getAllCategories();
                include "./products/createProduct.php";
                break;
            case 'createProduct':
                if (isset($_POST["productName"])) {
                    $nameProduct = $_POST['productName'];
                    $desc = $_POST['description'];
                    $price = $_POST['price'];
                    $stock = $_POST['stock'];
                    $brand = $_POST['brand'];
                    $createAt = $_POST['createAt'];
                    $filename = $_FILES['image']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES['image']['name']);
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                        echo "The file ". htmlspecialchars( basename($_FILES['image']['name'])). "Upload file Success.";
                      } else {
                        echo "Sorry, there was an error uploading your file.";
                      }
                    addProduct($nameProduct,$desc, $price, $stock, $brand, $filename, $createAt);
                    header("location: ./?act=listProducts");
                }
                break;
            case 'loadOneProduct':
                if(isset($_GET["id"])) {
                    $allCategories = getAllCategories();
                    $dataProducts = getDataById($_GET["id"]);
                    include "./products/updateProduct.php";
                }
                break;
                case 'updateProduct':
                    if (isset($_POST["productName"])) {
                        $nameProduct = $_POST['productName'];
                        $desc = $_POST['description'];
                        $price = $_POST['price'];
                        $stock = $_POST['stock'];
                        $brand = $_POST['brand'];
                        $createAt = $_POST['createAt'];
                        $filename = $_FILES['image']['name'];
                        $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($_FILES['image']['name']);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            echo "The file ". htmlspecialchars( basename($_FILES['image']['name'])). "Upload file Success.";
                          } else {
                            echo "Sorry, there was an error uploading your file.";
                          }
                        if($_FILES['image']) {
                            $filename = "";
                            updateProductById($nameProduct, $desc, $price, $stock, $brand, $filename, $createAt, $_POST["id"]);
                        }
                        // addProduct($nameProduct,$desc, $price, $stock, $brand, $filename, $createAt);
                        // header("location: ./?act=listProducts");
                    }
                    break;
            default:
                break;
        }

    }
?>