<?php


$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// Lấy từ khóa tìm kiếm từ biến GET
$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';

// Truy vấn cơ sở dữ liệu để tìm kiếm sản phẩm
$stmt = $pdo->prepare("SELECT * FROM products WHERE name LIKE :keyword");
$stmt->execute(['keyword' => '%' . $keyword . '%']);
$results = $stmt->fetchAll();

// Hiển thị kết quả tìm kiếm
if (count($results) > 0) {
    echo "<h2>Kết quả tìm kiếm:</h2>";
    echo "<ul>";
    foreach ($results as $row) {
        echo "<li>" . $row['name'] . "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>Không tìm thấy sản phẩm nào.</p>";
}
?>