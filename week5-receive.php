<?php
    $name = $_GET['username'];
    $password = $_GET['userPass'];
    $email = $_GET['userEmail'];
    $age = $_GET['userAge'];
    $birth = $_GET['userBirth'];
    $gender = $_GET['userGender'];
    $city = $_GET['userCity'];
    $hoppy = $_GET['userHoppy'];

    echo "สวัสดีคุณ $name<br>";
    echo "รหัสผ่านของคุณคือ: $password<br>";
    echo "อีเมลของคุณคือ: $email<br>";
    echo "อายุของคุณคือ: $age<br>";
    echo "วันเกิดของคุณคือ: $birth<br>";
    echo "เพศของคุณคือ: $gender<br>";
    echo "จังหวัดของคุณคือ: $city<br>";
    echo "งานอดิเรกของคุณคือ: " . implode(", ", $hoppy) . "<br>";

?>