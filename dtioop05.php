<?php
//Overloading method, Overriding method
class TestA{
    public function metA (){
        echo 111 . "<br>";
    }
    public function metB(){
        echo "wow...<br>";
    }
    //overloading method (PHP ไม่รองรับ)
    //public function metA ($param1, $param2){
    //    echo 222 . "<br>";
    //}
}
class TestB extends TestA {
    //overriding method
    public function metA(){
        echo 333 . "<br>";
    }
}
$ob1 = new TestA();
$ob2 = new TestB();

$ob1->metA(); //จะเรียกใช้ method metA ของ TestA
$ob2->metA(); //จะเรียกใช้ method metA ของ TestB เพราะ override ค่าของ metA ของ TestA

$ob1->metB(); //จะเรียกใช้ method metB ของ TestA
$ob2->metB(); //จะเรียกใช้ method metB ของ TestA เพราะ TestB ไม่มี method metB จึงไปเรียกใช้ method metB ของ TestA
?>