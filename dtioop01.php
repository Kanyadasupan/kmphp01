<?php
// php oop (Class & Object)

// การสร้างคลาส (Class)
class Test01
{
    // data,attribute-property-filed member เกี่ยวกับค่าข้อมูล
    public $dataA;
    public $dataB = "Hello World<br>";

    // method-function member เกี่ยวกับการทำงาน
    public function showWow()
    {
        echo "Wowwwwww";
    }
    public function showWoo()
    {
        echo "Wooooooo";
    }
}

// สร้าง ออบเจ็กต์(Object) จาก คลาส(Class)
$ob1 = new Test01();
$ob2 = new Test01();

// การใช้งาน data ของ ออบเจ็กต์(Object)
$ob1->dataA = "Hi...<br>";
echo $ob2->dataB;

// การใช้งาน method ของ ออบเจ็กต์(Object)
$ob1->showWow();
$ob2->showWoo();
?>