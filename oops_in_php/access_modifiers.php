<?php 
class Teacher {
   private function  questionPapers(){
    return "important";
   }

   public function exam(){
    if($this->questionPapers()=="important"){
        echo "do something";
    }
    else {
        echo "do else";
    }
   }
   protected function studentMarks(){
    echo "all students marks";
   }
}
$t1=new Teacher();
$t1->exam();
echo "<br>";
// $t1->studentMarks();// can not call.

class Management extends Teacher{
    function reviewExams(){
        $this->studentMarks();
    }
}
$m1=new Management();
$m1->reviewExams();
?>
