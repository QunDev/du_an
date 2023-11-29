<?php
// Lấy data products
    function getProducts() {
        $sql = "select * FROM `products` WHERE 1 order by productID desc";
        return pdo_query($sql);
    }

// Xóa 1 dữ liệu 
    function deleteOneProduct($id) {
        $sql = "delete FROM `products` WHERE productID =".$id;
        pdo_execute($sql);
    }

// Thêm danh mục
    function addProduct($nameProduct, $desc, $price, $stock, $brand, $filename, $date) {
        $sql = "insert INTO `products` (`productName`, `description`, `price`, `stock`, `brand`, `imageURL`, `createdAt`) VALUES ('".$nameProduct."', '".$desc."', ".$price.", ".$stock.", ".$brand.", '".$filename."', '".$date."')";
        pdo_execute($sql);
    }

// Get data product theo id
    function getDataById($id) {
        $sql = "select * from `products` where productId =".$id;
        return pdo_query_one($sql);
    }

// Update data product by id
    function updateProductById($name, $desc, $price, $stock, $brand, $filename, $date, $id) {
        if( $filename == "") {
            $sql = "update `products` SET `productName`='".$name."',`description`='".$desc."',`price`='".$price."',`stock`='".$stock."',`brand`='".$brand."',`createdAt`='".$date."' WHERE productID =".$id;
            pdo_execute($sql);
        } else {
            $sql = "update `products` SET `productName`='".$name."',`description`='".$desc."',`price`='".$price."',`stock`='".$stock."',`brand`='".$brand."',`imageURL`='".$filename."',`createdAt`='".$date."' WHERE productID =".$id;
            pdo_execute($sql);
        }
    }

// Đếm số lượng sản phẩm
    function countProduct() {
        $sql = "select count(productName) from products where stock > 0;";
        return pdo_query_value($sql);
    }

// Lọc sản phẩm theo danh mục 
    function filterProductByCategory($categoryId) {
        $sql = "select * FROM `products` where 1 and `brand` LIKE '%".$categoryId."%';";
        return pdo_query($sql);
    }
?>