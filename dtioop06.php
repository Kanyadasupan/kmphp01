<?php
//abstract class ไม่สามารถสร้าง object ได้
abstract class Sau01{
    //มี member ได้เหมือนกับ class ปกติทั่วไป
    public function metA(){
        echo "metA from Sau01<br>";
    }
    abstract public function metB();
    abstract public function metC():string;
}

//interface class ไม่สามารถสร้าง object ได้
interface Sau02{
    //public function modA(){
    //    echo "modA from Sau02<br>";
    //}                                      error เพราะ method ใน interface ต้องไม่มีเนื้อหา
    public function modB();
    public function modC():int;
}
//$ob1 = new Sau01(); error
//$ob1 = new Sau02(); error
?>