<?php
include "../init.php";

$obj = new base_class;
if(isset($_POST['send_message'])){
    $message = $obj->security($_POST['send_message']);
     $user_id = $_SESSION['user_id'];
     $msg_type = "text";
     $msg_area = "room";

        if($obj->Normal_Query("INSERT INTO messages (message, msg_type, user_id, msg_area) VALUES (?,?,?,?)",[$message,$msg_type,$user_id,$msg_area])){
            echo json_encode(['status' => 'success']);
        }

}

?>