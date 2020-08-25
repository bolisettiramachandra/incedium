<?php

$club_id = $_GET['id'];

if($obj->Normal_Query("SELECT * FROM clubs WHERE id = ?",[$club_id])){

    $club_result = $obj->fetch_all();

foreach($club_result as $informations):
    $id = $informations->id;
    $club_name = $informations->club_name;
    $club_title = ucwords($informations->club_name);
    $description = $informations->description;
    $logo = $informations->logo;
    
    echo    "<div class='details-div'>
    <h2 class='heading'>$club_title</h2>
            <img class='details-img' src='$logo' style='width:40%'/> 
            <h3 class='details-message'>$description</h3>
            </div>";
endforeach;

}


if($obj->Normal_Query("SELECT * FROM alerts  WHERE category = '$club_name' ORDER BY alert_id DESC")){

    $alert_result = $obj->fetch_all();

foreach($alert_result as $informations):
    $alert_id = $informations->alert_id;
    $alert_title = ucwords($informations->alert_title);
    $alert_title = implode(' ', array_slice(explode(' ', $alert_title), 0, 10));
    $alert_message = $obj->security($informations->alert_message);
    $alert_message = implode(' ', array_slice(explode(' ', $alert_message), 0, 10));
    $alert_image = $informations->alert_image1;
    
    echo    "<a class='alert-link' href = 'alert.php?id={$alert_id}'><div class='alert-card'>
    <div class='alert-img-container'> 
    <img class='alert-img'  src='./adminpanel/assets/img/alerts/$alert_image' alt='Avatar' style='width:100%'>
    </div>
      
      <div class='alert-container'>
        <p class = 'alert-title'>$alert_title </p> 
        <p class = 'alert-message'>$alert_message</p> 
      </div>
    </div> </a>";


    endforeach;

}

?>