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

// Xử lý khi có yêu cầu sửa sản phẩm
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Lấy dữ liệu từ form
    $productID = $_POST["productID"];
    $productName = $_POST["productName"];
    $price = $_POST["price"];

    // Tạo câu truy vấn để sửa sản phẩm trong cơ sở dữ liệu
    $sql = "UPDATE product SET productName='$productName', price='$price' WHERE productID=$productID";

    // Thực thi câu truy vấn
    if ($conn->query($sql) === TRUE) {
        echo "Sửa sản phẩm thành công";
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
    <title>Sửa Sản Phẩm</title>
</head>
<body>
    <h2>Sửa Sản Phẩm</h2>
    <?php
    // Kết nối đến cơ sở dữ liệu
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
    }

    // Kiểm tra xem có yêu cầu sửa sản phẩm không
    if (isset($_GET["productID"])) {
        $productID = $_GET["productID"];

        // Lấy thông tin sản phẩm từ cơ sở dữ liệu
        $sql = "SELECT * FROM product WHERE productID = $productID";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $productName = $row["productName"];
            $price = $row["price"];
            ?>
            <form action="" method="post">
                <input type="hidden" name="productID" value="<?php echo $productID; ?>">
                <label>Tên sản phẩm:</label>
                <input type="text" name="productName" value="<?php echo $productName; ?>" required>
                <br><br>
                <label>Giá:</label>
                <input type="number" name="price" value="<?php echo $price; ?>" required>
                <br><br>
                <input type="submit" value="Lưu">
            </form>
            <?php
        } else {
            echo "Không tìm thấy sản phẩm";
        }
    } else {
        echo "Không có sản phẩm nào được chỉ định";
    }

    // Đóng kết nối
    $conn->close();
    ?>
</body>
</html>