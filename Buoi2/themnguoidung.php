<?php
   include 'connect.php' ;
    if(
    !empty($_POST['ten-dang-nhap']) &&
    !empty($_POST['password']) &&
    !empty($_POST['ho-ten']) &&
    !empty($_POST['email']) &&
    !empty($_POST['so-dien-thoai']) &&
    !empty($_POST['ngay-sinh']) &&
    !empty($_POST['vai-tro'])
) {

    $tenDangNhap = $_POST['ten-dang-nhap'];
    $matKhau = $_POST['password'];
    $hoTen = $_POST['ho-ten'];
    $email = $_POST['email'];
    $sdt = $_POST['so-dien-thoai'];
    $ngaySinh = $_POST['ngay-sinh'];
    $vaiTro = $_POST['vai-tro'];

    $sql = "INSERT INTO nguoi_dung
            (ten_dang_nhap, mat_khau, ho_ten, email, sdt, ngay_sinh, vai_tro_id)
            VALUES ('$tenDangNhap', '$matKhau', '$hoTen', '$email', '$sdt', '$ngaySinh', '$vaiTro')";

    mysqli_query($conn, $sql);
    header('location:index.php?page_layout=nguoidung');
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
    <form action="index.php?page_layout=themnguoidung" method="post">
        <h1>Thêm người dùng</h1>
        <div class="box">
            <p>Tên đăng nhập</p>
            <input type="text" name="ten-dang-nhap" placeholder="tên đăng nhập">
        </div>
         <div class="box">
            <p>Mật khẩu</p>
            <input type="password" name="password" placeholder="mật khẩu">
        </div>
        <div class="box">
            <p>Họ tên</p>
            <input type="text" name="ho-ten" placeholder="Họ tên">
        </div>
        <div class="box">
            <p>SĐT</p>
            <input type="text" name="so-dien-thoai" placeholder="sdt">
        </div>
        <div class="box">
            <p>Email</p>
            <input type="email" name="email" placeholder="email">
        </div>
        
        <div class="box">
            <p>Vai trò</p>
            <select name="vai-tro" >
                <option value="1">admin</option>
                <option value="2">đạo diễn</option>
                <option value="3">diễn viên</option>
                <option value="4">người dùng</option>
              
            </select>
        </div>
        <div class="box">
            <p>Ngày sinh</p>
            <input type="date" name="ngay-sinh">

        </div>
        <div class="box">
            <p>Submit</p>
            <input type="submit" value="đăng nhập">
        </div>
    </form>
</div>


    
</body>
</html>