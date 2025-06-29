<?php
$servername = "103.97.126.29"; // IP của máy chủ
$username = "ikuhkxes_SciNguyen";
$password = "123456789";
$database = "ikuhkxes_Test_1";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

echo "Kết nối thành công!";
?>