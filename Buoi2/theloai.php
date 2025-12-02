<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width:100%;
        }
        .xoa{
            color:white;
            padding:0 10px;
            background: red;
        }
    </style>
</head>
<body>
    <h1>Thể loại</h1>
    <table border=1>
        <tr>
            <th>Phim</th>
            <th>Thể loại</th>
            <th>Chức Năng</th>
        </tr>
        <?php 
            include("connect.php");
            $sql = "SELECT * FROM `phim_the_loai`";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)) {
        ?>

        <tr>
            <td><?php echo $row['phim_id']; ?></td>
            <td><?php echo $row['the_loai_id']; ?></td>
            <td>
                <button>Sửa</button>
                <a class="xoa" href="xoatheloai.php?id=<?php echo $row["id"] ?>"> Xóa </a>
            </td>
        </tr>
        <?php } ?>
</body>
</html>