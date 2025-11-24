<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php - Buổi 2</title>
</head>
<body>
    
    <from action="login.php" method="post">
        <h1>Đăng nhập</h1>
        <div>
            <input type="text" name="username" placeholder="Tên đăng nhập">
        </div>
        <div>
            <input type="password" name="password" placeholder="Mật khẩu">
        </div>
        <div>
            <input type="submit" name="Đăng nhập">
        </div>

    </from>
    <?php
        if(isset($_POST['usename']) && isset($_POST['password'])){
            $tenDangNhap = $_POST['username'];
            $matKhau = $_POST['password'];
            echo $matKhau;

            //Nếu tên đăng nhập = admin
            //Mật khẩu 123 thì cho phép người dùng vào trang chủ

            //echo $tenDangNhap . $matKhau;

            if($tenDangNhap == 'admin' && $matKhau == '123');{
                header(location: 'trangchu.php')
            }
            else{
                echo "<p class='warning'>Sai thông tin đăng nhập</p>";
            }
        }




    ?>

</body>
</html>