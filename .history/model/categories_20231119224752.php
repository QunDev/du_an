<?php
// Lấy All data bảng categories
    function getAllCategories() {
        $sql = "select * from categories where 1 by desc";
        pdo_query($sql)
    }
?>