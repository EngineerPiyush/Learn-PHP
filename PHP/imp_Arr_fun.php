<?php 
$users=['piyush',24,'abr@gmail.com','piyush'];
$user=['name'=>'piyush','age'=>24,'email'=>'abr@gmail.com','age'=>24];
if(is_array($user))
echo "this is an array";
echo "<br>";
echo count($user);
unset($users[2]);
echo "<br>";
print_r($users);
echo "<br>";
array_push($users,"dubey ji");
print_r($users);
echo "<br>";
array_pop($users);
print_r($users);
echo "<br>";
print_r(array_keys($user));
echo "<br>";
echo implode($users);
$str="hello, how are, you, piyush";
echo "<br>";
print_r(explode(',',$str));
$data=array_merge($user,$users);
echo "<br>";
print_r($data);
$data=array_unique($data);
print_r($data);

?>