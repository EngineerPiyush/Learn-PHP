<?php
// print_r($_REQUEST);
if($_REQUEST){
    // echo "user name is ".$_REQUEST['userName'];
    foreach($_REQUEST as $data=> $value)
    {
        echo $data." is ".$value;
        echo "<br>";
    }
    // Note $_REQUEST works o both get and post request
}
?>