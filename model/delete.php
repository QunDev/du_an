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

// Xử lý khi có yêu cầu xóa sản phẩm
if (isset($_GET["productID"])) {
    $product = $_GET["productID"];

    // Tạo câu truy vấn để xóa sản phẩm khỏi cơ sở dữ liệu
    $sql = "DELETE FROM products WHERE productID = $productID";

    // Thực thi câu truy vấn
    if ($conn->query($sql) === TRUE) {
        echo "Xóa sản phẩm thành công";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}

// Đóng kết nối
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Xóa Sản Phẩm</title>
</head>
<body>
    <h2>Xóa Sản Phẩm</h2>
    <ul>
        <?php
        // Kết nối đến cơ sở dữ liệu
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Kiểm tra kết nối
        if ($conn->connect_error) {
            die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
        }

        // Lấy danh sách sản phẩm từ cơ sở dữ liệu
        $sql = "SELECT * FROM product";
        $result = $conn->query($sql);

        // Hiển thị danh sách sản phẩm
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $productID = $row["productID"];
                $productName = $row["productName"];
                echo "<li>$productName - <a href='?id=$id'>Xóa</a></li>";
            }
        } else {
            echo "Không có sản phẩm nào";
        }

        // Đóng kết nối
        $conn->close();
        ?>
    </ul>
</body>
</html>