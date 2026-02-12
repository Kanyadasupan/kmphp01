<?php
//acess modifier public, private
class Test03
{
    public $numA = 100;
    private $numB = 200;
    public $numC = 300;

    public function showHi (){
        echo "Hi...<br>";
    }
    private function showHello (){
        echo "Hello...<br>";
    }
    function showHay(){
        echo "Hay...<br>";
    }
    public function metA(){
        echo "numA" .$this->numA."<br>";
        echo "numB" .$this->numB."<br>";
        echo "numC" .$this->numC."<br>";
        $this->showHi();
        $this->showHello();
        $this->showHay();
    }
}
$ob1 = new Test03();
$ob1->numA = 111;
//$ob1->numB = 222; error เพราะ numB เป็น private
$ob1->showHi();
//$ob1->showHello();  error เพราะ showHello เป็น private
$ob1->showHay();
$ob1->metA();
?>