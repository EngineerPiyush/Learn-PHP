<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call php function on button click</title>
</head>
<body>
    <form action="" method='get'>
        <button name="button" value="btn1">Call Function</button>
    </form>
</body>
</html>
<?php
if(isset($_REQUEST['button'])){
    btn_click_test();
}
function btn_click_test(){
    echo "function is called on button click";
}
echo "<br>";
// to understand below line go to cookie.php
print_r($_COOKIE);
?>