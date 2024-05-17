<form action="" method="post">
    <input type="text" name="user" placeholder="enter a user name">
    <br>
    <br>
    <button name="button" value="set">Set Cookie</button>
    <br>
    <br>
    <button name="button" value="display">Display Cookie</button>
    <br>
    <br>
    <button name="button" value="delete">Delete Cookie</button>
    <br>
    <br>
</form>
<?php 
// $_POST['button'];
if(isset($_POST)){
if($_POST['button']=="set"){
    $val=$_POST['user'];
    // echo $val;
    setcookie('user',$val);//inspect and check cookie is set or not
    echo "cookie is set";
}
if($_POST['button']=='display'){
    if(isset($_COOKIE['user'])){
        echo $_COOKIE['user'];
    }
}
if($_POST['button']=='delete'){
    if(isset($_COOKIE['user'])){
        setcookie('user',null,-1);
    }
}
}
?>