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
        pdo_query_one($sql)
    }
?>