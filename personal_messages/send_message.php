<?php
include "../init.php";

$obj = new base_class;
if(isset($_POST['send_message']) && isset($_POST['toid'])){
    $message = $obj->security($_POST['send_message']);
     $user_id = $_SESSION['user_id'];
     $msg_type = "text";
     $to_id = $_POST['toid'];

        if($obj->Normal_Query("INSERT INTO messages (message, msg_type, user_id, msg_to) VALUES (?,?,?,?)",[$message,$msg_type,$user_id,$to_id])){
            echo json_encode(['status' => 'success']);
        }

    



     

}

?>