<?php
include_once("./magicClass.php");

$obj = new MagicClass();
$obj->greet();
$obj->name = "Earth";
echo "Your name is ".$obj->name."<br>".PHP_EOL;
$obj->greet();
$obj->test(1,2,3,4);
MagicClass::test(1,20);
isset($obj->name);
echo $obj->date;
isset($obj->date);
$obj->date = time();
echo $obj->date."<br>".PHP_EOL;
unset($obj->date);
echo $obj->date;
isset($obj->date);
echo $obj;
echo $obj('invokinimas');
echo $obj;

?>