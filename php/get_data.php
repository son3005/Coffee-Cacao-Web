<?php
// Kết nối database
include 'connect_database.php';
// Câu truy vấn
$sql = "SELECT * FROM tbl_sinhvien";
$result = $conn->query($sql);

// Chuyển kết quả thành JSON
$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}
$conn->close();

header('Content-Type: application/json');
echo json_encode($data);
?>