<?php 
include "init.php";
$obj = new base_class;
$status = 0;
$user_id = $_SESSION['user_id'];
if($obj->Normal_Query("UPDATE users SET status = ? WHERE id =?",[$status,$user_id])){
    $cookie_name = "inced_token";
    $cookie_value = md5($_SESSION['username']);
    setcookie($cookie_name, $cookie_value, time()-1, "/"); // 86400 = 1 day
    session_destroy();
    header("location:login.php");
}
header("location:login.php");

?>