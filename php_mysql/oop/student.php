<?php 
include('config.php');
class Student{
    public $DBconn;
    function __construct($conn){
        $this->DBconn=$conn;
    }
    function getData(){
         $getStudents=$this->DBconn->prepare("select * from students");
         $getStudents->execute();
         $result=$getStudents->fetchAll();
         echo "<pre>";
         print_r($result);
    }
    function insertData(){
        $sqlQuery="insert into students (`id`,`name`,`course`,`batch`,`city`,`year`) values (null,'bruce','MBA','morning','delhi','2nd') ";
        $student=$this->DBconn->prepare($sqlQuery);
        $result=$student->execute();
        if($result){
            echo "data inserted";
        }
        else{
            echo "insertion failed";
        }
    }
    function updateData(){
        $sqlQuery="update students set
         name='tony',
         course='B.tech',
         batch='evening',
         city='gurgoan',
         year='3rd'
         where id=22 "
         ;
        $student=$this->DBconn->prepare($sqlQuery);
        $result=$student->execute();
        if($result){
            echo "data updated";
        }
        else{
            echo "updationtion failed";
        } 
    }
    function deleteData(){
        $sqlQuery="delete from students 
        where id=22 ";
       $student=$this->DBconn->prepare($sqlQuery);
       $result=$student->execute();
       if($result){
           echo "data deleted";
       }
       else{
           echo "delition failed";
       } 
   }
   function insertDataWithRequest($request){
    // print_r($request);
    $name=$request['name'];
    $course=$request['course'];
    $batch=$request['batch'];
    $city=$request['city'];
    $year=$request['year'];
    $sqlQuery="insert into students (`id`,`name`,`course`,`batch`,`city`,`year`) values
     (null,'$name','$course','$batch','$city','$year') ";
    $student=$this->DBconn->prepare($sqlQuery);
    $result=$student->execute();
    if($result){
        echo "data inserted";
    }
    else{
        echo "insertion failed";
    }
}
function deleteDataWithRequest($request){
    // print_r($request);
    $id=$request['id'];
    $sqlQuery=" delete from students where id='$id' ";
    $student=$this->DBconn->prepare($sqlQuery);
    $result=$student->execute();
    if($result){
        echo "data deleted";
    }
    else{
        echo "deletion failed";
    }
}
}
$student=new Student($conn);
// $student->getData();
// $student->insertData();
// $student->updateData();
// $student->deleteData();

if(isset($_POST['id'])){
//    $student->insertDataWithRequest($_POST);
    $student->deleteDataWithRequest($_POST);
}
?>