<?php 
// insstead of writing multiple include functions we will use the method autoload to include multiple files 
// also it prevent to include unnecesarry files code that does not in use because we create an object of the class that 
// i want to include and with that class name it actullly autoload the files thats why we keep the file and class name same.

function autoLoder($class){
    echo "<br>";

    include($class.'.php');
}
spl_autoload_register('autoloder');
$t1=new Teacher();
$s1=new Student();
$m1=new Management();
?>