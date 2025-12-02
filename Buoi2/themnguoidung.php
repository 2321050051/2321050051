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
    <form action="index.php?page_layout=themnguoidung" method="post">
        <h1>Thêm người dùng</h1>
        <div>
            <p>Tên đăng nhập</p>
            <input type="text" name="ten-dang-nhap" placeholder="tên đăng nhập">
        </div>
         <div>
            <p>Mật khẩu</p>
            <input type="password" name="password" placeholder="mật khẩu">
        </div>
        <div>
            <p>Họ tên</p>
            <input type="text" name="text" placeholder="họ tên">
        </div>
        <div>
            <p>Email</p>
            <input type="email" name="username" placeholder="tên đăng nhập">
        </div>
         <div>
            <p>SĐT</p>
            <input type="text" name="password" placeholder="mật khẩu">
        </div>
        <div>
            <p>Vai trò</p>
            <select name="vaitro" >
                <option value="1">admin</option>
                <option value="2">đạo diễn</option>
                <option value="3">diễn viên</option>
                <option value="4">người dùng</option>
              
            </select>
        </div>
        <div>
            <p>Ngày sinh</p>
            <input type="date" value="đăng nhập">
        </div>
        <div>
            <p>Submit</p>
            <input type="submit" value="đăng nhập">
        </div>
    </form>
    <?php
        if(!empty($_POST['ten-dang-nhap'])&&
            !empty($_POST['password'])&&
            !empty($_POST['ho-ten'])&&
            !empty($_POST['email'])&&
            !empty($_POST['so-dien-thoai'])&&
            !empty($_POST['ngay-sinh'])&&
            !empty($_POST['vai-tro'])) {

        $tenDangNhap= $POST['ten-dang-nhap'];
        $password= $POST['password'];
        $hoTen= $POST['ho-ten'];
        $email= $POST['email'];
        $soDienThoai= $POST['so-dien-thoai'];
        $ngaySinh= $POST['ngay-sinh'];
        $vaiTro= $POST['vai-tro'];
        $sql= "INSERT INTO 'nguoi_dung'('ten_dang_nhap', 'mat_khau', 'ho_ten', 'email', 'sdt', 'ngay_sinh', 'vai_tro')";
        mysqli_query($conn, $sql);
        header('location: index.php?page_layout=nguoidung');
        }
        else{
            echo "<p class='warning'>Vui lòng nhập đầy đủ thông tin!</p>";
        }
    ?>
</body>
</html>