<?php
    //fuction
    //no parameter and no return
    function showHello() {
        echo "<h1 style='color:blue;'>Hello...</h1>";
        echo "<h1 style=\"color:red;\">Hello...</h1>";
    }
    showHello();


    //have parameter and no return
    function showHi($fname, $lname) {
        echo "ยินดีต้อนรับ " . $fname . " " . $lname ;
        echo "<br/>";
    }
    showHi("Kanyada","Supan");
    showHi("Kandy","K");


    //no parameter and have return
    function sendBye(){
        echo "Wow wow wow";
        return"Bye Bye...";
    }
    echo sendBye();
    $data = sendBye();
    echo "<br/>" . $data . "DTI-SAU";


    //have parameter and have return
    function sumNumber($num1, $num2) {
        $sum = $num1 + $num2;
        return $sum;
        //return = $num1 + $num2; ทำแบบนี้ก็ได้ ดีกว่าาา
    }
    echo "<br/><br/>100 + 200 = " . sumNumber(100, 200);


    //Arrow Function (เขียนในรูปแบบที่เรียกว่า expression function)
    //Arrow function ของ PHP จะเป็น auto return อยู่แล้ว
    $woo = fn() => '<br/>woo woo woo';
    echo $woo();

    $hi = fn($nickname) => "<br/>สวัสดี" . $nickname;
    echo $hi("Kanyada");
?>