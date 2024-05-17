<?php 
class Teacher{
    public $city='Lucknow';
    function nextExam(){
        echo "next exam is physics";
    }
    function age(){
        echo "my age is 12";
    }
}
class Student extends teacher{
    public $city='Noida';
    function age(){
        echo "my age is 23";
    }
}
$s1=new Student();
 echo $s1->city;// overriding
echo "<br>";
$s1->nextExam();
echo "<br>";
$s1->age();// overriding
?>