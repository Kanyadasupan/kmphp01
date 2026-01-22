<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            padding: 40px;
        }
        div {
            margin-bottom: 10px;
            padding-bottom: 10px;
            border: 10px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            background-color: #f1f1f1;
            font-weight: bold;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center;">Result Data From with PHP 2026 (DTI-06)</h1>
    <hr>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        ?>
        <div>
            <strong>ชื่อ-สกุล:</strong> <?php echo empty($_GET["fname"]) ? "-" : $_GET["fname"]; ?>
        </div>
        <div>
            <strong>รหัสผ่าน:</strong> <?php echo empty($_GET["pword"]) ? "-" : $_GET["pword"]; ?>
        </div>
        <div>
            <strong>อายุ:</strong> <?php echo empty($_GET["age"]) ? "-" : $_GET["age"]; ?>
        </div>
        <div>
            <strong>เพศ:</strong> <?php echo empty($_GET["gender"]) ? "-" : $_GET["gender"]; ?>
        </div>
        <div>
            <strong>ภาษาโปรแกรมที่ชอบ:</strong> <?php echo isset($_GET["plang"]) ? implode(", ", $_GET["plang"]) : "-"; ?>
        </div>
        <div>
            <strong>อาหารที่ชอบ:</strong> <?php echo isset($_GET["food"]) ? implode(", ", $_GET["food"]) : "-"; ?>
        </div>
        <div>
            <strong>ประเทศที่ชอบ:</strong> <?php echo empty($_GET["country"]) ? "-" : $_GET["country"]; ?>
        </div>
        <div>
            <strong>จังหวัดที่ชอบ:</strong> <?php echo empty($_GET["province"]) ? "-" : $_GET["province"]; ?>
        </div>
        <div>
            <strong>วัน เดือน ปี เกิด:</strong> <?php echo empty($_GET["birthdate"]) ? "-" : $_GET["birthdate"]; ?>
        </div>
        <div>
            <strong>ระดับความชอบ:</strong> <?php echo empty($_GET["likelevel"]) ? "-" : $_GET["likelevel"]; ?>
        </div>
        <div>
            <strong>ความคิดเห็น:</strong> <?php echo empty($_GET["comment"]) ? "-" : nl2br($_GET["comment"]); ?>
        </div>
        <?php
    } else {
        echo "ไม่สามารถประมวลผลข้อมูลได้กรุณาลองใหม่";
    }
    ?>
</body>

</html