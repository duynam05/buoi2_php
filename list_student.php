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
            font-family: "Segoe UI", Tahoma, Arial, sans-serif;
            background-color: #f4f6f8;
            padding: 30px;
        }

        h2 {
            margin-bottom: 15px;
        }

        table {
            width: 100%;
            max-width: 900px;
            border-collapse: collapse;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        th {
            background-color: #2c3e50;
            color: #ffffff;
            text-transform: uppercase;
            font-size: 14px;
            padding: 12px;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #e0e0e0;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        tr:last-child td {
            border-bottom: none;
        }

        a {
            text-decoration: none;
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 14px;
        }

        .edit {
            background-color: #3498db;
            color: white;
        }

        .edit:hover {
            background-color: #2980b9;
        }

        .delete {
            background-color: #e74c3c;
            color: white;
        }

        .delete:hover {
            background-color: #c0392b;
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
