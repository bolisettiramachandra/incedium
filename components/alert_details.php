<?php

$alert_id = $_GET['id'];

if($obj->Normal_Query("SELECT * FROM alerts WHERE alert_id = ?",[$alert_id])){

    $alert_result = $obj->fetch_all();

foreach($alert_result as $informations):
    $alert_id = $informations->alert_id;
    $alert_title = ucwords($informations->alert_title);
    $alert_message = $informations->alert_message;
    $alert_image = $informations->alert_image1;
    
    echo    "<div class='details-div'>
    <h2 class='heading'>$alert_title</h2>
            <img class='details-img' src='./adminpanel/assets/img/alerts/$alert_image' style='width:40%'/> 
            <h3 class='details-message'>$alert_message</h3>
            </div>";
endforeach;

}



?>