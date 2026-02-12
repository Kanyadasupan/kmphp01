<?php
require_once 'dtioop06.php';

// ใช้งาน abstract class
class Test01 extends Sau01{
    public function metB(){
        echo "BBB<br>";
    }
    public function metC():string{
        echo "CCC<br>";
        return "CCC<br>";
    }
}

//ใช้งาน interface class
class Test02 implements Sau02{
    public function modB(){
        echo "BBB from Test02<br>";
    }
    public function modC():int{
        echo "CCC from Test02<br>";
        return 123;
    }
}

$ob1 = new Test01();
$ob2 = new Test02();

$ob1->metA();
?>