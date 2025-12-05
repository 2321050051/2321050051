<?php
    include 'connect.php'; 
    $id = $_GET['id'];
    if(!empty($_POST['ten-dang-nhap']) && 
       !empty($_POST['password']) &&
       !empty($_POST['hoten']) &&
       !empty($_POST['email']) &&
       !empty($_POST['so-dien-thoai']) &&
       !empty($_POST['ngay-sinh']) &&
       !empty($_POST['vai-tro'])) {
        $tenDangNhap = $_POST['ten-dang-nhap'];
        $password = $_POST['password'];
        $hoTen = $_POST['hoten'];
        $email = $_POST['email'];
        $soDienThoai = $_POST['so-dien-thoai'];
        $ngaySinh = $_POST['ngay-sinh'];
        $vaiTro = $_POST['vai-tro'];

        $sql = "UPDATE nguoi_dung 
        SET ten_dang_nhap = '$tenDangNhap',
            mat_khau = '$password',
            ho_ten = '$hoTen',
            email = '$email',
            sdt = '$soDienThoai',
            vai_tro_id = '$vaiTro',
            ngay_sinh = '$ngaySinh'
        WHERE id = '$id';";
        mysqli_query($conn, $sql);
        header('location: index.php?page_layout=nguoidung'); 
       }else{
        echo '<p class="warning">Vui lòng nhập đầy đủ thông tin</p>';
       }
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <?php
    $sql = "select * from nguoi_dung where id = '$id' ";
    $result = mysqli_query($conn, $sql);
    $nguoiDung = mysqli_fetch_assoc($result);
    ?>
    <div>
      <h1>Cập nhật người dùng</h1>
      <div>
        <form action="index.php?page_layout=capnhatnguoidung&id=<?php echo $id ?>" method="post">
          <div class="box">
            <p>Ten dang nhap</p>
            <input name="ten-dang-nhap" type="text" placeholder="Tên đăng nhập" value="<?php echo $nguoiDung['ten_dang_nhap'] ?>"/>
          </div>
          <div class="box">
            <p>Mat khau</p>
            <input name="password" type="password" placeholder="Mật khẩu" value="<?php echo $nguoiDung['mat_khau'] ?>"/>
          </div>
          <div class="box">
            <p>Ho ten</p>
            <input name="hoten" type="text" placeholder="Họ tên" value="<?php echo $nguoiDung['ho_ten'] ?>" />
          </div>
          <div class="box">
            <p>Email</p>
            <input name="email" type="email" placeholder="Email" value="<?php echo $nguoiDung['email'] ?>" />
          </div>
          <div class="box">
            <p>So dien thoai</p>
            <input name="so-dien-thoai" type="text" placeholder="Số điện thoại" value="<?php echo $nguoiDung['sdt'] ?>" />
          </div>
          <div class="box">
            <p>Ngay sinh</p>
            <input name="ngay-sinh" type="date" placeholder="Ngày sinh" value="<?php echo $nguoiDung['ngay_sinh'] ?>" />
          </div>
          <div class="box">
            <p>Vai tro</p>
            <select name="vai-tro">
              <option value="1" <?php echo $nguoiDung['vai_tro_id'] == 1 ? "selected" : "" ?> >admin</option>
              <option value="2" <?php echo $nguoiDung['vai_tro_id'] == 2 ? "selected" : "" ?> >dao dien</option>
              <option value="3" <?php echo $nguoiDung['vai_tro_id'] == 3 ? "selected" : "" ?> >dien vien</option>
              <option value="4" <?php echo $nguoiDung['vai_tro_id'] == 4 ? "selected" : "" ?> >nguoi dung</option>
            </select>
          </div>
          <div class="box">
            <input type="submit" value="Cập nhật" />
          </div>
        </form>
      </div>
    </div>
   
  </body>
</html>