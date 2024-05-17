<?php 
$a=10;
$a=(string) $a;
var_dump($a);
echo "<br>";

$b='Piyush';
$b=(int) $b;
var_dump($b);
echo "<br>";

$c="300";
$c=(int) $c;
var_dump($c);
echo "<br>";

$d=1;
$d=(float) $d;
var_dump($d);
echo "<br>";

$e=10;
$e=(array)$e;
var_dump($e);
echo "<br>";

$f=20;
$f=(object)$f;
var_dump($f);
echo "<br>";

// Note: we can not convert array into string directly
?>