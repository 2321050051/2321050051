<?php
   include 'connect.php' ;
    if(!empty($_POST['ten-quoc-gia'])
) {

    $tenQuocGia = $_POST['ten-quoc-gia'];

    $sql = "INSERT INTO quoc_gia
            ( ten_quoc_gia)
            VALUES ('$tenQuocGia')";

    mysqli_query($conn, $sql);
    header('location:index.php?page_layout=quocgia');
    exit;
} 
    else {  
    echo "<p class='warning'> Vui lòng nhập đầy đủ thông tin! </p>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background: #f3f4f6;
    padding: 40px;
}

form {
    width: 350px;
    margin: auto;
    background: white;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

form div {
    margin-bottom: 15px;
}

p {
    margin-bottom: 5px;
    font-weight: bold;
    color: #444;
}

input, select {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 6px;
}

input:focus, select:focus {
    border-color: #007bff;
    outline: none;
}

input[type="submit"] {
    background: #007bff;
    color: white;
    font-weight: bold;
    cursor: pointer;
    transition: 0.25s;
}

input[type="submit"]:hover {
    background: #0056b3;
}

/* Hiệu ứng hover nhẹ cho toàn form */
form:hover {
    transform: translateY(-1px);
    transition: 0.3s;
}

    </style>
</head>
<body>
    <div class="container">
    <form action="index.php?page_layout=themquocgia" method="post">
        <h1>Thêm quốc gia</h1>
        <div class="box">
            <p>Tên quốc gia</p>
            <input type="text" name="ten-quoc-gia" placeholder="tên quốc gia">
        </div>
        <div class="box">
            <p>Submit</p>
            <input type="submit" value="đăng nhập">
        </div>
    </form>
</div>


    
</body>
</html>