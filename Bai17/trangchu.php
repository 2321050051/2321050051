<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSTION["username"])){
            header(location: 'trangchu.php')
        }
    ?>
    <h1>Trang chủ</h1>

    <?php
        echo "xin chào" . $_SESSTION["username"];
    ?>
</body>
</html>