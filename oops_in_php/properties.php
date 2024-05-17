<?php 
class Properties{
    public $name="piyush dubey";
    function getName(){
        echo $this->name;
    }
    function updateName($name){
        $this->name=$name;
    }
}
$p1=new Properties();
$p1->getName();
echo "<br>";
$p1->updateName("sam");
$p1->getName();
?>