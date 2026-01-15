<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <h1>ผลลัพธ์การคำนวณ</h1>
    <hr/>
    <?php
        // verify ก่อนคำนวณ
        if(empty($_GET["num1"]) == true || empty($_GET["num2"]) == true ){
            echo "ไม่สามารถคำนวณได้ ตรวจสอบการป้อนจำนวนเงินหรือจำนวนคน";
            //redirect ไปหน้า dti05.php
            echo "<script>setTimeout(function() { window.location.href = 'dti05.php'; }, 3000);</script>";

        }else if(floatval($_GET["num1"]) == 0 || intval($_GET["num2"]) == 0 ){
            echo "ไม่สามารถคำนวณได้เนื่องจาก จำนวนเงินหรือจำนวนคนห้ามเป็น 0";
            //redirect ไปหน้า dti05.php
            echo "<script>setTimeout(function() { window.location.href = 'dti05.php'; }, 3000);</script>";

        } else {
            $result = $_GET["num1"] / $_GET["num2"];
            echo "เงิน". $_GET["num1"] ." บาท<br/>";
            echo "จำนวนคน ". $_GET["num2"] ." คน<br/>";
            echo "หารกันคนละ " . $result . " บาท";
        }
        //redirect function

    ?>
</body>
</html>