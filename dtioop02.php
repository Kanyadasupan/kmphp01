<?php
//construct ทำงานทุกครั้งที่มีการสร้าง object

//destruct ทำงานตอน object ถูกทำลาย

class Test02
{
    public $infoA;

    public function showInfoA(){
        echo "Info A มีค่าเป็น : ".$this->infoA."<br>";
    }

    // สร้าง constructor
    public function __construct($infoA){
        $this->infoA = $infoA;
        echo "Welcome to SAU<br>";
    }
    
    // สร้าง destructor
    public function __destruct(){
        echo "Thank you<br>";
    }
}

// สร้าง ออบเจ็กต์(Object) จาก คลาส(Class)
$ob1 = new Test02(100);
$ob2 = new Test02(200);

$ob1->showInfoA();
$ob2->showInfoA();
?>