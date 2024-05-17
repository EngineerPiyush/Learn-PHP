<?php 
setcookie('fruit','mango',time()+(86400));
setcookie('color','green',time()+(86400));
if(isset($_COOKIE['fruit'])){
    // print_r($_COOKIE);
    // print_r($_COOKIE['fruit']);
    echo "current cookie is ".$_COOKIE['fruit'];
}
else{
    echo " fruit cookie is not set";
}
echo "<br>";
if(isset($_COOKIE['color'])){
    echo "current cookie is ".$_COOKIE['color'];
}
else{
    echo "color cookie is not set";
}
echo "<br>";
if(isset($_COOKIE['vegetable'])){
    echo "current cookie is ".$_COOKIE['vegetable'];
}
else{
    echo "vegetable cookie is not set";
}
echo "<br>";
print_r($_COOKIE);
// i have used print_r($_COOKIE); in another page called btn_click.php and it shows the result in that page also 
// because it is super global variable we can access cokkie from anywhere
?>