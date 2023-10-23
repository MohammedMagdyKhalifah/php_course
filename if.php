<?php
    $number1 =20;
    $number2 =1;

    if($number1 > $number2){
        echo "the frist number is grater";
        if ($number1==20){
            echo "<br>";
            echo "the frist number $number1";
        }
    }else if ($number1 == $number2){
        echo "the frist number is equal the secound";
    }else{
        echo "the second number is grater";
    }

    echo "<br><br><br>";
    $username = "mohammed";
    $email = "mmmak2017@gmail.com";
    // == تقارن القيمة حتى لو كان نص مع رقم
    // === تقارن القيمة والنوع معا
    // !== not equal
    if($username === "mohammed" && $email==="mmmak2017@gmail.com"){
        echo "hello mohammed";
        echo  "<br>mmmak2017";
    }else if($username === "mohammed" || $email==="mmmak2017@gmail.com"){
        echo  "<br>one of them";
    }

?>