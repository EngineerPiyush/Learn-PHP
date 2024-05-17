<?php 
// $file='files/test.txt';
// $myFile=fopen($file,'r') or die('unable to read file');
// echo fread($myFile,filesize($file));
// fclose($myFile);

// suppose if want to read file from server

if(isset($_FILES['file'])){
    // print_r($_FILES['file']);
$file=$_FILES['file']['tmp_name'];
$myFile=fopen($file,'r') or die('unable to read file');
echo fread($myFile,filesize($file));
fclose($myFile);
}
?>
<!-- reading the file from server -->
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <br>
    <br>
    <button>Read File</button>
</form>