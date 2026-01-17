<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Form POST</title>
</head>
<body>

<h2>Form đăng ký (POST)</h2>

<form method="post" action="" autocomplete="off">
    <label>Tên:</label><br>
    <input type="text" name="ten"><br><br>

    <label>Mật khẩu:</label><br>
    <input type="password" name="matkhau"><br><br>

    <button type="submit">Đăng ký</button>
</form>

<?php
    if(isset($_POST['ten'])){
        $ten = $_POST['ten'];
        echo "Đã nhận thông tin của $ten";
    }
?>

</body>
</html>
