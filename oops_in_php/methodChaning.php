<?php
class Company{
    function getName(){
        echo "this is honda moters.";
        return $this;
    }
    function getEmp(){
        echo " honda  has 4000 employees.";
        return $this;
    }
    function getTotalOffice(){
        echo " honda  has 200 offices.";
        return $this;
    }
    function getCantine(){
        echo " honda  has 20 cantines.";
    }
}
$company=new Company();
// $company->getName();
// $company->getEmp();
$company->getName()->getEmp()->getTotalOffice()->getCantine();
?>