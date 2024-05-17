<?php 
// with  the help of late static binding you can call current 
// class method property and method
class CountrySale{
    static public $totalSale=1000;
    function getTotalSale(){
        // echo self::$totalSale;
        echo static::$totalSale;
    }
    function getAreaName(){
        // self::areaName();
        static::areaName();
    }
    static function areaName(){
        echo "India";
    }
}
class CitySale extends CountrySale{
    static public $totalSale=50;
    static function areaName(){
        echo "Noida";
    }
}
$city=new CitySale();
$city->getTotalSale();
echo "<br>";
$city->getAreaName();
?>