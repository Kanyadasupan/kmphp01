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

        .from-group {
            margin-bottom: 10px;
            padding-bottom: 10px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 2.5px;
        }

        input[type="text"],
        input[type="password"],
        input[type="number"],
        select {
            width: 100%;
            padding: 5px;
        }
        textarea {
            width: 100%;
            padding: 5px;
        }

        input[type="submit"] {
            background-color: #0004ff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            padding: 10px;
            width: 100px;
        }
        input[type="reset"] {
            background-color: #ff0000;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            padding: 10px;
            width: 100px;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center;">All Form with PHP 2026 (DTI-07)</h1>
    <hr>

    <!--method (GET/POST/PUT/DELETE)-->
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="">
        <div class="from-group">
            <label for="fname">ชื่อ-สกุล</label>
            <input type="text" id="fname" name="fname"><br><br>
        </div>
        <div class="from-group">
            <label for="pword">รหัสผ่าน</label>
            <input type="password" id="pword" name="pword"><br><br>
        </div>
        <div class="from-group">
            <label for="age">อายุ</label>
            <input type="number" id="age" name="age" min="1"><br><br>
        </div>
        <div class="from-group">
            <label for="radio">เพศ</label>
            <input type="radio" id="radio" name="gender" value="male" checked id=""> ชาย
            <input type="radio" id="radio" name="gender" value="female" id=""> หญิง
            <input type="radio" id="radio" name="gender" value="lgbtq+" id=""> Lgbtq+
        </div>
        <div class="from-group">
            <label for="plang">ภาาษาโปรแกรมที่ชอบ</label>
            <input type="checkbox" name="plang[]" value="php">C</input>
            <input type="checkbox" name="plang[]" value="js">java</input>
            <input type="checkbox" name="plang[]" value="python">Python+</input>
            <input type="checkbox" name="plang[]" value="java">PHP+</input>
        </div>
        <div class="from-group">
            <label for="food">อาหารที่ชอบ</label>
            <input type="checkbox" name="food[]" value="KFC">KFC</input>
            <input type="checkbox" name="food[]" value="Pizza">Pizza</input>
            <input type="checkbox" name="food[]" value="Donut">Donut</input>
            <input type="checkbox" name="food[]" value="Burger">Burger</input>
        </div>
        <div class="from-group">
            <label for="country">ประเทศที่ชอบ</label>
            <select name="country" id="country">
                <option value="" hidden></option>ค่าว่าง</option>
                <option value="Thailand">ไทย</option>
                <option value="America">สหรัฐอเมริกา</option>
                <option value="Japan">ญี่ปุ่น</option>
                <option value="Korea">เกาหลี</option>
                <option value="Singapore">แคนาดา</option>
                
            </select>
        </div>
        <div class="from-group">
            <label for="province">จังหวัดที่ชอบ</label>
            <select name="province" id="province">
                <option value="" hidden></option>ค่าว่าง</option>
                <option value="เชียงใหม่">เชียงใหม่</option>
                <option value="เชียงราย">เชียงราย</option>
                <option value="อุบลราชธานี">อุบลราชธานี</option>
                <option value="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
                <option value="ภูเก็ต">ภูเก็ต</option>
            </select>
        </div>
        <div class="from-group">
            <label for="birthdate">วันที่เกิด</label>
            <input type="date" name="birthdate" id="birthdate">
        </div>
        <div class="from-group">
            <label for="likelevel">ระดับความชอบ</label>
            0<input type="range" name="likelevel" id="likelevel" min="1" max="100">100
        </div>
        <div class="from-group">
            <label for="comment">ความคิดเห็น</label>
            <textarea name="comment" id="comment" rows="5"></textarea>
        </div>
        <div class="from-group">
            <input type="submit" value="ส่งข้อมูล">
            <input type="reset" value="ล้างข้อมูล">
        </div>
    </form>
    <hr>
    <!-- แสดงข้อมูลที่ส่งมาจากฟอร์ม ที่ส่งมาจากไฟล์ตัวเอง -->
     <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        ?>
        <div>
            <strong>ชื่อ-สกุล:</strong> <?php echo empty($_POST["fname"]) ? "-" : $_POST["fname"]; ?>
        </div>
        <div>
            <strong>รหัสผ่าน:</strong> <?php echo empty($_POST["pword"]) ? "-" : $_POST["pword"]; ?>
        </div>
        <div>
            <strong>อายุ:</strong> <?php echo empty($_POST["age"]) ? "-" : $_POST["age"]; ?>
        </div>
        <div>
            <strong>เพศ:</strong> <?php echo empty($_POST["gender"]) ? "-" : $_POST["gender"]; ?>
        </div>
        <div>
            <strong>ภาษาโปรแกรมที่ชอบ:</strong> <?php echo isset($_POST["plang"]) ? implode(", ", $_POST["plang"]) : "-"; ?>
        </div>
        <div>
            <strong>อาหารที่ชอบ:</strong> <?php echo isset($_POST["food"]) ? implode(", ", $_POST["food"]) : "-"; ?>
        </div>
        <div>
            <strong>ประเทศที่ชอบ:</strong> <?php echo empty($_POST["country"]) ? "-" : $_POST["country"]; ?>
        </div>
        <div>
            <strong>จังหวัดที่ชอบ:</strong> <?php echo empty($_POST["province"]) ? "-" : $_POST["province"]; ?>
        </div>
        <div>
            <strong>วัน เดือน ปี เกิด:</strong> <?php echo empty($_POST["birthdate"]) ? "-" : $_POST["birthdate"]; ?>
        </div>
        <div>
            <strong>ระดับความชอบ:</strong> <?php echo empty($_POST["likelevel"]) ? "-" : $_POST["likelevel"]; ?>
        </div>
        <div>
            <strong>ความคิดเห็น:</strong> <?php echo empty($_POST["comment"]) ? "-" : nl2br($_POST["comment"]); ?>
        </div>
        <?php
    } 
    ?>
</body>
</html>