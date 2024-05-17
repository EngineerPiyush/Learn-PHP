<?php 
if(isset($_POST['user'])){
    class User{
       function getName($name){
        echo "user name is $name";
        }
    }
    $user=new User();
    $user->getName($_POST['user']);
}
else{
    echo '<form action="" method="post">
    <input type="text" name="user" placeholder="enter user name">
    <br>
    <br>    
    <button>Click</button>
</form>';

}
?>
<!-- <form action="" method="post">
    <input type="text" name="user" placeholder="enter user name">
    <br>
    <br>    
    <button>Click</button>
</form> -->