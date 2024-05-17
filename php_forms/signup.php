<?php
// echo "php signup page";
// print_r($_POST);
if($_POST){
    echo "user name is ".$_POST['userName'];
    echo "<br>";
    echo "user email is ".$_POST['userEmail'];
    echo "<br>";
    echo "user password is ".$_POST['userPassword'];
}
?>