<?php 
class ConstructorDemo{
    public $name;
    function __construct($name){
        // echo "__construct called";
        $this->name=$name;
    }
    function displayName(){
        echo $this->name;
    }
}
$cd=new ConstructorDemo("piyush nikki");
$cd->displayName();
?>