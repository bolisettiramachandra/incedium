
<section id="sidebar">
   <?php include 'search.php'; ?>
        <ul class="people">
        <?php

        $user_id = $_SESSION['user_id'];

if($obj->Normal_Query("SELECT  DISTINCT messages.user_id,messages.msg_to,(select users.username from users where users.id=messages.user_id and users.id!=$user_id) as 'to_name', (select users.username from users where users.id=messages.msg_to and users.id!=$user_id) as 'from_name',(select users.image from users where users.id=messages.msg_to  and users.id!=$user_id) as 'image'from messages WHERE 
messages.user_id = $user_id or  messages.msg_to=$user_id  order by messages.msg_to")){

    $msg_result = $obj->fetch_all();

foreach($msg_result as $informations):
    $msg_to  = $informations->to_name;
    $img = $informations->image;
    
    if($img==''){
        $img='user.png';
    }

    // $alert_title = ucwords($informations->alert_title);
    // $alert_title = implode(' ', array_slice(explode(' ', $alert_title), 0, 10));
    // $alert_message = $obj->security($informations->alert_message);
    // $alert_message = implode(' ', array_slice(explode(' ', $alert_message), 0, 10));
    // $alert_image = $informations->alert_image1;
    // $alert_name = $informations->username;
    // $alert_time  = $informations->time;

    if($msg_to!=''){
        echo    "
        <a href='?username=$msg_to' class='to_person'>
        <li class='person' data-chat='$msg_to'>
        <img src='./assets/img/$img' alt='' />
        <span class='name'>$msg_to</span>
        <span class='preview'></span>
    </li>
    </a>
    ";
    }
    



    endforeach;

}else{
    echo 'error';
}

?>
        </ul>
    </section><!-- close of side bar-->