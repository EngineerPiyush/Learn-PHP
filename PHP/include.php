<?php 
// include("./practice1.php");
for($i=0;$i<5;$i++)
{
    // include_once("./practice1.php");//ek hi baar call karega even if loop goes infinite
}
// require("./practice1.php");
// Note : the difference is include gives always warning in case of wrong file name but require gives fatel error which can not 
// be ignore in production

require_once("./practice1.php");//it is also same like include_once() but with above condition..
?>