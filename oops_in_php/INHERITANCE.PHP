<?php 
class UserAuth{
    function login($userType){
        echo "$userType logged in ";
    }
}
class Students extends UserAuth{
    function getName(){
        echo "Piyush";
    }
}
class Teacher extends UserAuth{
    function getSkills(){
        echo "DSA";
    }
}
$s1=new Students();
$s1->login("student");
echo "<br>";
$s1->getName();
echo "<br>";
$t1=new Teacher();
echo "<br>";
$t1->login("teacher");
echo "<br>";
$t1->getskills();
?>