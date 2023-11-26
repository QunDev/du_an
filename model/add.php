<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "du_an";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Xử lý khi form được gửi đi
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Lấy dữ liệu từ form
    $productName = $_POST["productName"];
    $price = $_POST["price"];

    // Tạo câu truy vấn để thêm sản phẩm vào cơ sở dữ liệu
    $sql = "INSERT INTO product (productName, price) VALUES ('$productName', '$price')";

    // Thực thi câu truy vấn
    if ($conn->query($sql) === TRUE) {
        echo "Thêm sản phẩm thành công";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}

// Đóng kết nối
$conn->close();
?>

