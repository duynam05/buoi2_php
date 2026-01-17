<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Chức năng thêm sinh viên</h2>
    <form method = "post" action="">
    <label for="">Họ tên</label>
    <input type="text" name = "fullname"> <br><br>
    <label for="">Mã SV</label>
    <input type="text" name = "student_code"> <br><br>
    <label for="">Email</label>
    <input type="text" name = "email"> <br><br>
    <button name = "submit">Thêm mới</button>

    </form>

<?php
    if (isset($_POST['submit'])) {
        require_once "db_connect.php";

        $fullname = $_POST['fullname'];
        $student_code = $_POST['student_code'];
        $email = $_POST['email'];

        $sql = "INSERT INTO students (fullname, student_code, email)
                VALUES (?, ?, ?)";

        $stmt = $conn->prepare($sql);

        $stmt->execute([$fullname, $student_code, $email]);

        echo "<p style='color:green'>Thêm sinh viên thành công!</p>";
    }
?>

</body>
</html>