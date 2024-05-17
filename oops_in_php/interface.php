<?php 
// difference b/w abstract and interface
// 1: Interface can not have properties while abstract classess can have.
// 2: in abstract classes  when we create the method we put the  abstract keyword before the method
// while in interface we do not put interface keyword in methods
interface ProductFeatures{
    // public $country="japan";//can not delare properties
    function images();
    function ownerDetails();
    // function common(){  //Interface function ProductFeatures::common() cannot contain body
    //     echo "common";
    // jabki ye abstract class me kar sakte the
    // }
}
class Products implements ProductFeatures{
    function images(){
        echo "product images";
    }
    function ownerDetails(){
        echo "product owner details";
    }
    // yaha par child class me hum jisko interface nahi banaye hai
    // yaha par properties aur function bana sakte hai .
}
$product=new Products();
$product->images();
?>