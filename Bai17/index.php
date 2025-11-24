<?php
    //cookie
    #Lưu ở phía người dùng
    #Dùng cho những thông tin ít quan trọng
    $cookieName = "Theme";
    $cookieValue = "DuyTuan";
    // 86400 = 30 ngay 
    // setcookie($cookieName, $cookieValue, time()+(86400), "/");

    if(isset($_COOKIE[$cookieName]) ){
        echo "cookie đã tồn tại";
    }
    else{
        echo "cookie chưa tồn tại";
    }

    //session
    #Thông tin đăng nhập, giỏ hàng,.....
    session_start();
    $_SESSION["name"] = "Duy Tuan 123";

    echo $_COOKIE["name"];

?>