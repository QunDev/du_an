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
        $sql = "select o.orderDetailID, o.quantity, o.unitPrice, o.subtotal, p.productID, p.price, p.productName,  p.imageURL, u.userId FROM `orderdetails` as o  
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

// Thêm sản phẩm đã thanh toán
    function buySuccess($proId, $userId, $date, $complete, $pay, $address, $total, $quantity) {
        $sql = "insert INTO `buy`(`productId`, `userId`, `buyDate`, `isCompleted`, `paymentMethod`, `shippingAddress`, `totalAmount`, `quantityProduct`) 
                    VALUES ('".$proId."','".$userId."','".$date."','".$complete."','".$pay."','".$address."','".$total."','".$quantity."')";
        pdo_execute($sql);
    }

// Lấy sản phẩm đã thanh toán
    function getAllByIdBuy() {
        $sql = "select b.buyId, b.buyDate, b.isCompleted, b.paymentMethod, b.totalAmount, b.quantityProduct, p.productName, s.shippingAddressId, p.imageURL, s.address, s.phone, s.name FROM `buy` as b 
        INNER JOIN products as p on p.productID = b.productId
        INNER JOIN user as u on u.userID = b.userId
        INNER JOIN shippingAddress as s on s.shippingAddressId = b.shippingAddress";
        return pdo_query($sql);
    }

    function getBySuccess($id) {
        $sql = "select b.buyId, b.buyDate, b.isCompleted, b.paymentMethod, b.totalAmount, b.quantityProduct, p.productName, p.imageURL FROM `buy` as b 
        INNER JOIN products as p on p.productID = b.productId
        INNER JOIN user as u on u.userID = b.userId
        where b.userId =".$id;
        return pdo_query($sql);
    }

    function getByIdBuy($id) {
        $sql = "select b.buyId, b.buyDate, b.isCompleted, b.paymentMethod, b.totalAmount, b.quantityProduct, p.productName, s.shippingAddressId, p.imageURL, s.address, s.phone, s.name FROM `buy` as b 
        INNER JOIN products as p on p.productID = b.productId
        INNER JOIN user as u on u.userID = b.userId
        INNER JOIN shippingAddress as s on s.shippingAddressId = b.shippingAddress
        where b.buyId = ".$id;
        return pdo_query($sql);
    }

// update 
    function updateIn4($value, $id) {
        $sql = "UPDATE `shippingaddress` SET `address`='".$value."' WHERE shippingAddressId=".$id;
        pdo_execute($sql);
    }
    function updateIn4Name($value, $id) {
        $sql = "UPDATE `shippingaddress` SET `name`='".$value."' WHERE shippingAddressId=".$id;
        pdo_execute($sql);
    }
    function updateIn4Phone($value, $id) {
        $sql = "UPDATE `shippingaddress` SET `phone`='".$value."' WHERE shippingAddressId=".$id;
        pdo_execute($sql);
    }

// Xóa sản phẩm sau khi thanh toán
    function deleteProductDone($id) {
        $sql = "delete FROM `orderdetails` WHERE orderDetailID=".$id;
        pdo_execute($sql);
        
    }
?>