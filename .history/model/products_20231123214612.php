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
    function createProduct($name, $desc) {
        $sql = "insert INTO `categories` (`categoryName`, `description`) VALUES ('$name', '$desc')";
        pdo_execute($sql);
    }
?>