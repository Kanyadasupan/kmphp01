<?php
//Array
//Indexed Array
//0   1    2   3   4
$dataA = [10, 20, 30, 40, 50];
$dataB = array(11, 22, 33, 44, 55);
$dataC = array("AA", "BB", "CC", "DD", "EE");

echo $dataA[3] . "&emsp;"; //40
echo $dataB[1] . "&emsp;&emsp;&emsp;&emsp;"; //22 //tape
echo $dataB[1] . "&nbsp;"; //22
echo $dataC[4] . "&nbsp;&nbsp;&nbsp;&nbsp;"; //EE //space


//Associative Array
$faculty = ["as" => "Arts & Science", "eng" => "Engineering", "bu" => "Business", "edu" => "Education"];
$subjects = array("math" => "Mathematics", "phy" => "Physics", "che" => "Chemistry", "bio" => "Biology");

echo "<br/>" . $faculty["as"]; //Arts & Science
echo "<br/>" . $faculty["eng"]; //Engineering
echo "<br/>" . $faculty["bu"]; //Business
echo "<hr/>";
echo $subjects["phy"]; //Physics
echo "<br/>" . $subjects["che"]; //Chemistry
echo "<br/>" . $subjects["bio"]; //Biology

?>