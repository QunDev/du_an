<?php
// Lấy All data bảng categories
    function getAllCategories() {
        $sql = "select * from categories where 1 order by categoryId desc";
        return pdo_query($sql);
    }

// Xóa 1 dữ liệu 
    function deleteOne($id) {
        $sql = "DELETE FROM `categories` WHERE categoryId =".$id;
    }
?>