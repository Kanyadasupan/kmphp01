<?php
// static data, method
class Test01{
    public const U_THAILAND = "ประเทศไทย";
    public static $data = "100";
    public $info = "900";

    public static function showWow(){
        // $this->info = "888";  error ไม่สามารถเรียกใช้ data member ปกติได้ใน static method
        self::$data = "777";
        echo "Wow!";
    }
    public function showHi(){
        // echo self::U_THAILAND = "SAU"; error
        echo self::U_THAILAND."<br>";
        $this->info = "555";
        self::$data = "666";
        self::showWow();
        echo "Hi!";
    }

}

Test01::$data ="200";
echo Test01::$data."<br>";
Test01::showWow();
?>