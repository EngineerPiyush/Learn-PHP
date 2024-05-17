<?php 
// function fruit(array | string $name){
//     print_r($name);
// }
// fruit(["mango"]);
// echo "<br>";
// fruit("mango");

class Fruits{
    function getName(array | string $name){
        print_r($name);
    }
}
$f1=new Fruits();
$f1->getName(["apple"]);
echo "<br>";
$f1->getName("apple");
?>