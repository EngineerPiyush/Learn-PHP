<?php 
class ConstantDemo{
    //  const collageName="MUIT";
    // private const collageName="MUIT";
    protected const collageName="MUIT";
    function getCollageName(){
        echo self::collageName; // only for inside call
        echo "<br>";
        echo ConstantDemo::collageName;//  inside call
    }
}
class Child extends ConstantDemo{
    function getChildname(){
        echo self::collageName;
    }
}
// echo ConstantDemo::collageName;// its also for outside call
echo "<br>";
$c1=new ConstantDemo();
$c1->getCollageName();
echo "<br>";
$ch=new Child();
$ch->getChildname();

?>