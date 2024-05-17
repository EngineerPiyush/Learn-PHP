<?php 
// final class Honda{

// }
// class Cars extends Honda{

// }
// $car =new Cars();


class Honda{
   final function companyName(){
        echo "honda";
    }

}
class Cars extends Honda{
    function companyName(){
        echo "honda city";
    }

}
$car =new Cars();
$car->companyName();
?>