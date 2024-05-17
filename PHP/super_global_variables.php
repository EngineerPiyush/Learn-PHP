<!-- local and global variables -->
<?php 
$name='piyush';
function getName()
{
    $name='Arvind';
    echo "local variable : $name";
    echo "<br>";
    echo "Global  variable :";
    global $name;
    echo $name;
}
echo $name;
echo "<br>";
getName();
?>