<?php 
class Honda{
    static public $countryName="Japan";
   static function companyName(){
        echo "Honda";
    }
}
Honda::companyName();
echo "<br>";
echo Honda::$countryName;
?>