<?php 
include('./config.php');
// $students=$conn->prepare('delete from students where id="1" ');
// echo $students->execute();
$students=$conn->prepare("select * from students");
$students->execute();
$results=$students->fetchAll();
// echo "<pre>";
// print_r($results);
echo "<table border='1'>";
 foreach($results as $student){
    echo "<tr>
        <td>".$student['name']."</td>
        <td>".$student['course']."</td>
        <td>".$student['batch']."</td>
        <td>".$student['city']."</td>
        <td>".$student['year']."</td>
        <td>
        <form method='post'>
        <button name=delete value=".$student['id'].">delete</button>
        </form>
        </td>
        <td><a href='update.php?id=".$student['id']."'>edit</a>
        </td>

        </tr>";
 }
 echo "</table>";
 echo "<br>";
 if(isset($_POST['delete'])){
    $id=$_POST['delete'];
    $students=$conn->prepare("delete from students where id='$id' ");
    if($students->execute()){
        echo "record deleted ";
    }
    else{
        echo "deletion failed";
    }
 }
?>