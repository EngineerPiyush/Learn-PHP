<?php
// include('./config.php');

// // below method shows how data can be inserted with  static code 
// $students = $conn->prepare("INSERT INTO `students` (`id`, `name`, `course`, `batch`, `city`, `year`)
// VALUES (NULL, 'JP', 'mca', 'evening', 'sonbhdra', '4th')");

// $result = $students->execute();

// if ($result) {
//     echo "Data inserted";
// } else {
//     echo "Operation failed";
// }
?>
<!--  below method shows how data can be inserted into database  with  html form  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data insertion with html form</title>
</head>
<body>
  <form action="" method="post">
    <input type="text" name='name' placeholder="enter your name">
    <br>
    <br>
    <input type="text" name='course' placeholder="enter your course">
    <br>
    <br>
    <input type="text" name='batch' placeholder="enter your batch">
    <br>
    <br>
    <input type="text" name='city' placeholder="enter your city">
    <br>
    <br>
    <input type="text" name='year' placeholder="enter your year">
    <br>
    <br>
    <button>Add New Student</button>
  </form>  
</body>
</html>
<?php 
if(isset($_POST['name']))
{
   include('./config.php');
$name=$_POST['name'];
$course=$_POST['course'];
$batch=$_POST['batch'];
$city=$_POST['city'];
$year=$_POST['year'];

$students = $conn->prepare("INSERT INTO `students` (`id`, `name`, `course`, `batch`, `city`, `year`)
VALUES (NULL, '$name', '$course', '$batch', '$city', '$year')
");

$result = $students->execute();

if ($result) {
    echo "Data inserted";
} else {
    echo "Operation failed";
} 
}
?>
