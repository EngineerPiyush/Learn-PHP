<?php 
// $users=['name'=>'Piyush','email'=>'piyushdubey924@gmail.com','gf'=>'nogf'];
// $usersJson=json_encode($users);
// echo $usersJson;
$data='{"name":"Piyush","email":"piyushdubey924@gmail.com","gf":"nogf"}';
$dataArray=json_decode($data,true);
print_r($dataArray);
?>