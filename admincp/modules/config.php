<?php
$servername = "localhost"; // tên máy chủ MySQL
$username = "root"; // tên tài khoản MySQL
$password = ""; // mật khẩu của tài khoản MySQL
$dbname = "banhang"; // tên cơ sở dữ liệu

// Tạo kết nối
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
echo "Kết nối thành công";
?>