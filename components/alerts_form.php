<?php

if($obj->Normal_Query("SELECT alerts.alert_id,alerts.alert_title,alerts.alert_message,alerts.category,alerts.time,alerts.alert_image1,users.username FROM alerts INNER JOIN users ON alerts.user_id = users.id  ORDER BY alerts.alert_id DESC")){

    $alert_result = $obj->fetch_all();

foreach($alert_result as $informations):
    $alert_id = $informations->alert_id;
    $alert_title = ucwords($informations->alert_title);
    $alert_title = implode(' ', array_slice(explode(' ', $alert_title), 0, 10));
    $alert_message = $obj->security($informations->alert_message);
    $alert_message = implode(' ', array_slice(explode(' ', $alert_message), 0, 10));
    $alert_image = $informations->alert_image1;
    $alert_name = $informations->username;
    $alert_time  = $informations->time;
    
    echo    "<a class='alert-link' href = 'alert.php?id={$alert_id}'><div class='alert-card'>
    <div class='alert-img-container'> 
    <img class='alert-img'  src='./adminpanel/assets/img/alerts/$alert_image' alt='Avatar' style='width:100%'>
    </div>
      
      <div class='alert-container'>
        <p class = 'alert-title'>$alert_title </p> 
        <p class = 'alert-message'>$alert_message</p> 
        <p class='alert-name'>Posted by $alert_name on $alert_time</p>
      </div>
    </div> </a>";


    endforeach;

}

?>


