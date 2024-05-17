<?php 
// strlen function
$name="Piyush Dubey";
echo strlen($name);

// to check data type func
$var=true;
$variable='chikky';
echo "<br>";
var_dump($var);
echo "<br>";
var_dump($variable);
echo "<br>";

//date() function in php (note that parameter is necessary to pass)
echo date("d"); 
echo "<br>";
echo date("D");
echo "<br>"; 
echo date("m");
echo "<br>"; 
echo date("M");
echo "<br>"; 
echo date("l");
echo "<br>";
echo date("d.m.y");
echo "<br>";
// to check about php installed in your system
// echo phpinfo();

// to check string or integer
$var='love you jaan';
echo is_string($var);
echo "<br>";
$var=2524;
echo is_int($var);
echo "<br>";

// for random numbers 
echo rand();
echo "<br>";

// die;// this dies all the below code 
// die();
// exit();
echo 'Recently i fall in love someone in one eyesight was it attraction or love ?';
echo "<br>";

// finding sustring
$var='i love someone called nibataunga';
echo substr($var,0,-12);
echo substr($var,-12);
echo "<br>";

// arrays in php
$user=array('piyush','unkigf',19,"sahi", "hai", "?");
// $user=['piyush','unkigf',69];
echo $user[0];
echo $user[1];
echo $user[2];
echo "<br>";
echo count($user);
foreach($user as $x)
{
    if($x=='sahi')
    continue;
    echo "<h6 style='color:red'>$x</h6>";
    if($x=="hai")
    break;
}
foreach($user as $x):
echo $x;
echo "<br>";
endforeach;
// Associative array in php

$userdetails=[
    "name"=>"Piyush",
    "age"=>"24",
    "girlfriend"=>"not",
    "isSingle"=>"true",
    "why"=>"do not like randies"
];
foreach($userdetails as $key=>$data){
    echo $key." ? ".$data;
    echo "<br>";
}

// multi-dimentional array

$userdetails=[
    [1,"Piyush","MCA","developer"],
    [2,"Arvind","MCA","developer"]
];
echo "<pre>";
print_r($userdetails);
echo "<pre>";

for($i=0;$i<count($userdetails);$i++)
{
    for($j=0;$j<count($userdetails[$i]);$j++){
        echo $userdetails[$i][$j];
        echo "<br>";
    }
}

?>