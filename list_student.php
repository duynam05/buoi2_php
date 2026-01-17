<?php
require_once "db_connect.php";
$sql = "SELECT * FROM students";

$stmt = $conn->prepare($sql);
$stmt->execute();
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #333;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            text-decoration: none;
            margin-right: 10px;
        }
        .edit {
            color: blue;
        }
        .delete {
            color: red;
        }
    </style>
</head>
<body>

<h2>Danh sách sinh viên</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Họ tên</th>
        <th>Mã SV</th>
        <th>Email</th>
        <th>Hành động</th>
    </tr>

    <?php foreach ($students as $student): ?>
        <tr>
            <td><?php echo $student['id']; ?></td>
            <td><?php echo $student['fullname']; ?></td>
            <td><?php echo $student['student_code']; ?></td>
            <td><?php echo $student['email']; ?></td>
            <td>
                <a href="#" class="edit">Sửa</a>
                <a href="#" class="delete">Xóa</a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
