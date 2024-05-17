<?php 
function test()
{
    echo "test function called";
    echo "<br>";
}
$test="test";
$test();

// callback function in php
function main($a){
    $a();
}
main($test);
?>