<?php 
$name = 'Piyush';
echo "$name";
echo"<br>";
$dob="01.01.2002";
$age=25;
echo"<br>";
echo $dob;
echo"<br>";
echo $age;
echo"<br>";
$a=$b=$c='hello lovers';
echo $a;
echo"<br>";
echo $c;
echo"<br>";
echo 10+50;
?>
<?php 
$name='Piyush Dubey';
echo"<h1 style='color:red'>My name is : $name<h1/>";
$h2_color='Green';
?>
<h1 style="color:<?php echo $h2_color;
?>">Hi i am Piyush</h1>
<h1 style="color:<?php echo $h2_color?>">I recently fall i love someone</h1>

<!-- constatnt in php  -->
<?php 
const fix='nokko';
echo fix;
// fix='someone';cannot be modified constatnt variable
// whereas
$name='Piyush';
$name='dubey';
echo"<br>";
echo $name;
echo"<br>";
define('data','piyush Dubey');
echo data;
echo"<br>";
?>
<!-- data types in php -->
<?php 
$name ="Piyush Dubey";
echo var_dump($name);
?>

<!-- VARABLES IN PHP -->
<?php 
echo "<br>";
$strings='Piyush';
$string ='someone';
echo 'My name is '.$strings;
echo "<br>";
echo "My name is $strings";
echo "<br>";
echo "My name is ".$strings." and i fall  in love".$string;
echo"<br>";
$strings=$strings.$string;
echo $strings;
?>