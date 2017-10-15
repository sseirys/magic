<?php
include_once("./magicClass.php");

$obj = new MagicClass();
$obj->greet();
$obj->name = "Earth";
echo "Your name is ".$obj->name."<br>".PHP_EOL;
$obj->greet();
$obj->test(1,2,3,4);
MagicClass::test(1,20);
var_dump(isset($obj->name));
echo "<br>".PHP_EOL;
echo $obj->date;
var_dump(isset($obj->date));
echo "<br>".PHP_EOL;
$obj->date = time();
echo $obj->date."<br>".PHP_EOL;
unset($obj->date);
echo $obj->date;
var_dump(isset($obj->date));
echo "<br>".PHP_EOL;
echo $obj;
echo $obj('invokinimas');
echo $obj;

?>