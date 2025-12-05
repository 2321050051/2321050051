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
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h1>Quốc Gia</h1>
        <a class="them" href="themquocgia.php">Thêm Quốc Gia</a>
    </div>
    <table border=1>
        <tr>
            <th>ID</th>
            <th>Quốc gia</th>
            <th>Chức Năng</th>
        </tr>
        <?php 
            include("connect.php");
            $sql = "SELECT * FROM `quoc_gia`";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)) {
        ?>

        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['ten_quoc_gia']; ?></td>
            <td class="chuc-nang">
                <a class="sua" href="capnhatquocgia.php?id=<?php echo $row["id"] ?>"> Cập nhật </a>
                <a class="xoa" href="xoaquocgia.php?id=<?php echo $row["id"] ?>"> Xóa </a>
            </td>
        </tr>
        <?php } ?>
</body>
</html>