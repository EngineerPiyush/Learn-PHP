<!-- how to display array data in the form of table -->
<?php 
$userdetails=[
    [1,"Piyush","MCA","developer"],
    [2,"Arvind","MCA","developer"],
    [3,"Rahul","MCA","laundiyabaaz"]
];
 
echo "<table border=1>";
for($i=0;$i<count($userdetails);$i++)
{
    echo "<tr>";
    for($j=0;$j<count($userdetails[$i]);$j++){
        echo "<td>";
        echo $userdetails[$i][$j];
        echo "<br>";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<br>";

// Associative multidimentional array
$users=[
    ["name"=>"Piyush","age"=>24,"isGirlfriend"=>"no"],
    ["name"=>"Ashish","age"=>24,"isGirlfriend"=>"yes"],
    ["name"=>"Arvind","age"=>24,"isGirlfriend"=>"yes"],
    ["name"=>"Rahul","age"=>24,"isGirlfriend"=>"randies"]
];
echo "<table border=1>";
foreach($users as $user)
{
    echo "<tr>";
    foreach($user as $key=>$data){
    echo "<td>";
    echo $key." ".$data;
    echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<br>";

// Adding and removing items in an arrray
$users=['Arvind','Rahul','Ashish','Saurabh'];
array_push($users,"Devansh","Prateek");
print_r($users);
echo "<br>";
array_pop($users);
print_r($users);
echo "<br>";
array_splice($users,-4);
print_r($users);
?>