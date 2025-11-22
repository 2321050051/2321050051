<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 1 php</title>
</head>
<body>
    <?php
        //1. In ra màn hình
        echo"hello<br>";

        echo"hi ";
    
    
        //2. Biến
        //Cú pháp: $ + tên biến = giá trị của biến
        $ten = "Duy Tuan";
        $tuoi = 20;

        echo $ten . " " . $tuoi; //Dấu "." dùng để nối các biến
    

        //3. Hằng
            define("soPi", " 3.14<br>");
            echo soPi;
    

        //4. Phân biệt ' ' và " "
        echo'$ten' . "<br>";
        echo"$ten" . "<br>"; 


        //5. Chuỗi
        #5.1 Kiểm tra độ dài của chuỗi
        echo strlen($ten) . "<br>";
        #5.2 Đếm số từ
        echo str_word_count($ten) . "<br>";
        #5.3 Tìm kiếm ký tự trong chuỗi
        echo strpos($ten, "T") . "<br>";
        #5.4 Thay thế ký tự trong chuỗi
        echo str_replace("Tuan", "Tun", $ten) . "<br>";


        //6. Toán tử
        $soThuNhat = 10;
        $soThuHai = 5;
        #Phép + - * /
        #Gán += -= *= /= %=
        #So sánh == != > < >= <= ===
        echo $soThuNhat < $soThuHai;  // ko hiện là sai, hiện 1 là đúng


        //7. Câu điều kiện
        // if("Điều kiện"){
            // logic
        //}
        //else if("Điều kiện"){
            // logic
        //}

        //Kiểm tra tổng số thứ nhất và số thứ 2 
        //(nếu < 15 thì in ra nhỏ hơn 15)
        //(nếu = 15 thì in ra tổng = 15)
        //(nếu > 15 thì in ra lớn hơn 15)

        $tong = $soThuNhat + $soThuHai;

        if ($tong < 15) {
            echo "Nhỏ hơn 15" . "<br>";
        } else if ($tong == 15) {
            echo "Tổng = 15" . "<br>";
        } else {
            echo "Lớn hơn 15" . "<br>";
        }


        //8. Switch case
        $color = "red";
        switch ($color){
            case "red":
                echo "is red" . "<br>";
                break;
            case "blue":
                echo "is blue" . "<br>";
                break;
            default:
            echo "no color" . "<br>";
            break;
        }


        //9. For 
        for ($i=0; $i<10; $i++){
            echo $i . "<br>";
        }


        //10. Mảng
        $mang = ["Tuan", "Truong", "Tam", "Hai Anh"];
        //Đếm phần tử
        echo count($mang) . "<br>";
        echo $mang[1] . "<br>";
        print_r($mang) . "<br>";
        $mang[0] = "Duc" . "<br>";
        print_r($mang) . "<br>";
        #Thêm vào cuối
        $mang[] = "Thai" . "<br>";
        print_r($mang) . "<br>";
        #Xóa
        unset($mang[3]);
        print_r($mang);

    ?>
</body>
</html>