<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Form GET</title>
</head>
<body>

<h2>Form tìm kiếm (GET)</h2>

<form method="get" action="">
    <label>Từ khóa:</label>
    <input type="text" name="keyword">
    <button type="submit">Tìm kiếm</button>
</form>

<?php
    if (isset($_GET['keyword'])){
        $keyword = $_GET['keyword'];
        echo "Bạn đang tìm kiếm từ khóa: $keyword";
    }
?>

</body>
</html>
