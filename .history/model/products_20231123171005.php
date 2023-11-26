<?php
// Lấy data products
    function getProducts() {
        $sql = "select * FROM `products` WHERE 1 order by id desc"
    }
?>