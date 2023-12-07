<?php
// Lấy All
    function getAllUser() {
        $sql = "select * FROM `user` WHERE 1 order by userID";
        return pdo_query($sql);
    }

    function updateRole($id, $idRole) {
        $sql = "update `user` SET `role`='".$idRole."' WHERE userID =".$id;
        pdo_execute($sql);
    }

    function delete($id) {
        $sql = "delete FROM `user` WHERE userID =".$id;
        pdo_execute($sql);
    }
?>