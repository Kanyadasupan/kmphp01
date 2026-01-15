<?php
//variable type in PHP
$data = "ABCDEF"; //string
$data_char = "B"; //Character
$dataWow = 123456; //Integer
$data_ieie = true; //Boolean
$data_array = [10, 20, 30]; //Array

//Output statement on Browser
echo "<h1>Hello DTI</h1><br/>";
echo 123456 . "<br/>";
echo $data . "<br/>";
echo 'Y' . "<br/>";
echo $data_array[1] + $data_array[2] . "<br/>";

$fname = "Kanyada";
$lname = "Supan";
?>

<hr />

<?php
echo "สวัสดี $fname $lname<br/>";
echo "สวัสดี " . $fname . " " . $lname . "<br/>";
echo "<hr/> ";
?>