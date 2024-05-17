<?php 
session_start();
// print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session View</title>
</head>
<body>
    <?php 
    echo "<br>";
    if(isset($_SESSION['color']))
    echo "favourite color : ".$_SESSION['color'];
    ?>
</body>
</html>
