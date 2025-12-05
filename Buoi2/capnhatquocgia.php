<?php
include 'connect.php'; 
    $id = $_GET['id'];
    if(!empty($_POST['ten-quoc-gia'])) {
        $tenQuocGia = $_POST['ten-quoc-gia'];
        
        $sql = "UPDATE quoc_gia 
        SET ten_quoc_gia = '$tenQuocGia'
        WHERE id = '$id'";
        mysqli_query($conn, $sql);
        header('location: index.php?page_layout=quocgia'); 
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
    $sql = "select * from quoc_gia where id = '$id' ";
    $result = mysqli_query($conn, $sql);
    $quocGia = mysqli_fetch_assoc($result);
    ?>
    <div>
      <h1>Cập nhật Quốc Gia</h1>
      <div>
        <form action="index.php?page_layout=capnhatquocgia&id=<?php echo $id ?>" method="post">
          
          <div class="box">
            <p>Quốc gia</p>
            <input type="text" name="ten-quoc-gia" value="<?php echo $quocGia['ten_quoc_gia']; ?>">
          </div>
          <div class="box">
            <input type="submit" value="Cập nhật" />
          </div>
        </form>
      </div>
    </div>  
  </body>
</html>