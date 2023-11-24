<?php
// Lấy All data bảng categories
    function getAllCategories() {
        $sql = "select * from categories where 1 order by categoryId desc";
        return pdo_query($sql);
    }

// Xóa 1 dữ liệu 
    function deleteOne($id) {
        $sql = "delete FROM `categories` WHERE categoryId =".$id;
        pdo_execute($sql);
    }

// Thêm danh mục
    function createCategory($name, $desc) {
        $sql = "insert INTO `categories` (`categoryName`, `description`) VALUES ('.$name.', '.$desc.')";
        pdo_execute($sql)
    }
?>