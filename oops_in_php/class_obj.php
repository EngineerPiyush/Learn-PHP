 <?php 
 class MathOperations{
    public $val=60;
    function sum($a,$b,$c){
        echo $a+$b+$c+$this->val;
    }
    function mul($a){
        echo $a*$this->val;
    }
 }
 $maths=new MathOperations();

 $maths->sum(20,39,39);
 echo "<br>";
 $maths->mul(40);
 ?>