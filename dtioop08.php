<?php
//final class หรือ method
final class Person{
    //data method member ไม่สามารถสืบทอดได้
}

class Animal{
    //data method member
    public function run(){
        echo "วิ่งเร็วมาก<br>";
    }
    final public function eat(){
        echo "กินอาหาร<br>";
    }
}

//-----------------------------------------------------------------
class Dog extends Animal{
    //overriding method
    public function run(){echo "หมาวิ่งช้ามาก<br>";}
    //final public function eat(){echo "หมากินอาหาร<br>";} error
    
}

//class Student extends Person{} //error เพราะ class Person เป็น final class ไม่สามารถสืบทอดได้
?>