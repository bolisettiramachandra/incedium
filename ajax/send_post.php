<?php
include "../init.php";

$obj = new base_class;
 if(isset($_POST['send_post'])){

    $post = $obj->security($_POST['send_post']);
    $user_id = $_SESSION['user_id'];
    $post_type = "text";

    if($obj->Normal_Query("INSERT INTO posts (post,post_type,user_id) VALUES (?,?,?)",[$post, $post_type, $user_id])){

    echo json_encode(['status'=> 'success']);
    
    }


 }


?>