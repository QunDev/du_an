<?php
// Lấy user theo email
    function getUserByEmail($email) {
        $sql = 'select user.email,user.password FROM `user` WHERE user.email = "'.$email.'"';
        return pdo_query_one($sql);
    }
// Kiểm tra TK,MK
    function checkSignIn($email, $pass) {
        $data = getUserByEmail($email);
        if($data) {
            extract($data);
            if(md5($pass) == $password) {
                return true;
            }
        } else {
            header("location: ./?act=signIn");
        }
    }

// Tạo tk role 
    function createUser($email, $password,$date, $role) {
        $sql = "insert INTO `user`(`email`, `password`, `createdAt`, `role`) VALUES ('".$email."','".$password."','".$date."','".$role."')";
        pdo_execute($sql);
    }
?>