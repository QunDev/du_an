<?php
// Lấy All data bảng categories
    function getAllCategories() {
        $sql = "select * from categories where 1 by desc";
        return pdo_query($sql);
    }
?>