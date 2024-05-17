<?php 
// this is the mechnism to reuse code inside single 
// inheritance language
// in php you can not use multiple inhetitance its only for 
// single inheritance.

trait parentCompany1{
    function getTotalEmp(){
        echo 500;
    }
    function getTotalProject(){
        echo 30;
    }
}
trait parentCompany2{
    function getTotalOffice(){
        echo 50;
    }
}
class Company{
    use parentCompany1;// use keyword ki help se parent class yani traits ko use kar sakte hai.
    use parentCompany2;
}
$cmp=new Company();
$cmp->getTotalEmp();
echo "<br>";
$cmp->getTotalOffice();
echo "<br>";
$cmp->getTotalProject();
?>