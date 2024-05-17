<?php 
// $fileName='files/isq.txt';
// $content='I am isqbaaz';
// $file=fopen($fileName,'w') or die('unable to create file');
// fwrite($file,$content);
// fclose($file);
// echo "file created";
?>
<!-- the same above i am goigh to create with the help of html forms -->
<?php 
if(isset($_POST['filename']))
{
$fileName='files/'.$_POST['filename'];
$content=$_POST['content'];
$file=fopen($fileName,'w') or die('unable to create file');
fwrite($file,$content);
fclose($file);
echo "file created"; 
}
?>
<form action="" method="post">
    <input type="text" placeholder="enter file name " name="filename">
    <br>
    <br>
    <textarea name="content" ></textarea>
    <br>
    <br>
    <button>Create File</button>
</form>