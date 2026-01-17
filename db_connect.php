<?php
$host = "localhost";
$dbname = "buoi2_php";
$username = "root";
$password = "";

try {
    $conn = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $username,
        $password
    );

} catch (PDOException $e) {
    echo "Hệ thống đang bảo trì, vui lòng quay lại sau";
    exit;
}
