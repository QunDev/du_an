<?php
// Thêm sản phẩm vào đơn hàng
    function addProductToOrder($userId, $productId, $quantity, $unitPrice, $date) {
        $subTotal = $unitPrice * $quantity;
        $sql = "insert INTO `orderdetails`(`userId`, `productID`, `quantity`, `unitPrice`, `subtotal`, `createdAt`) VALUES ('".$userId."','".$productId."','".$quantity."','".$unitPrice."','".$subTotal."','".$date."')";
        pdo_execute($sql);
    }

// Cập nhật số lượng 
    function updateQuantity($productId, $quantity, $unitPrice, $date) {
        $sql = "update `orderdetails` SET `quantity`='".$quantity."',`unitPrice`='".$unitPrice."',`subtotal`='".$quantity * $unitPrice."',`createdAt`='$date' WHERE productID =".$productId;
        pdo_execute($sql);
    }

// Lấy sản phẩm 
    function getOrder($user) {
        $sql = "select o.quantity, o.unitPrice, o.subtotal, p.productID, p.price, p.productName,  p.imageURL, u.userId FROM `orderdetails` as o  
                LEFT JOIN products as p ON o.productID = p.productID
                LEFT join user as u on o.userId = u.userId WHERE u.email = '".$user."';";
        return pdo_query($sql);
    }

// Giảm số lượng sản phẩm
    function prevProduct($quantity, $id) {
        $sql = "update `orderdetails` SET `quantity`='".$quantity."' where productID = ".$id;
        pdo_execute($sql);
    }

// Tăng số lượng sản phẩm
    function nextProduct($quantity, $id) {
        $sql = "update `orderdetails` SET `quantity`='".$quantity."' where productID = ".$id;
        pdo_execute($sql);
    }

// Xóa số lượng sản phẩm
    function deleteOrder($id) {
        $sql = "delete FROM `orderdetails` WHERE `orderdetails`.`productID` = ".$id;
        pdo_execute($sql);
    }

// Đếm số lượng
    function countOrder() {
        $sql = "select count(orderDetailID) from orderdetails where quantity > 0;";
        return pdo_query_value($sql);
    }

// ShippingAddress
    function addAddress($id, $name, $phone, $address) {
        $sql = "insert INTO `shippingaddress`(`userID`, `name`, `phone`, `address`) VALUES ('".$id."','".$name."','".$phone."','".$address."')";
        pdo_execute($sql);
    }

    function getShippingAddress() {
        $sql = "select * FROM `shippingaddress` WHERE 1 order by shippingAddressId";
        return pdo_query($sql);
    }

    function getAddressById ($shippingAddressId) {
        $sql = "select * FROM `shippingaddress` WHERE shippingAddressId =".$shippingAddressId;
        return pdo_query_one($sql);
    }

// Change status
    function buySuccess() {
        $sql = "insert INTO `orders`(`userID`, `orderDate`, `totalAmount`, `isCompleted`, `paymentMethod`, `shippingAddress`) VALUES ('[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')";
        pdo_execute($sql);
    }
?>