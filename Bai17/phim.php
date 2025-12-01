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
    <h1>Phim</h1>
    <table border=1>
        <tr>
            <th>Tên phim</th>
            <th>Đạo diễn</th>
            <th>Năm phát hành</th>
            <th>Poster</th>
            <th>Quốc gia</th>
            <th>Số tập</th>
            <th>Trailer</th>
            <th>Mô tả</th>
            <th>Chức năng</th>
        </tr>
        <?php 
            include("connect.php");
            $sql = "SELECT * FROM `phim`";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)) {
        ?>

        <tr>
            <td><?php echo $row['ten_phim']; ?></td>
            <td><?php echo $row['dao_dien_id']; ?></td>
            <td><?php echo $row['nam_phat_hanh']; ?></td>
            <td><?php echo $row['poster']; ?></td>
            <td><?php echo $row['quoc_gia_id']; ?></td>
            <td><?php echo $row['so_tap']; ?></td>
            <td><?php echo $row['trailer']; ?></td>
            <td><?php echo $row['mo_ta']; ?></td>
            <td>
                <button>Sửa</button>
                <a class="xoa" href="xoaphim.php?id=<?php echo $row["id"] ?>"> Xóa </a>
            </td>
        </tr>
        <?php } ?>
    
</body>
</html>