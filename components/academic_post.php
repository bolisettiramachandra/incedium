<?php

$academic_id = $_GET['id'];

if($obj->Normal_Query("SELECT * FROM academics WHERE id = ?",[$academic_id])){

    $academic_result = $obj->fetch_all();

foreach($academic_result as $informations):
    $academic_id = $informations->id;
    $academic_title = ucwords($informations->title);
    $academic_message = $informations->body;
    $academic_image = $informations->image;
    
    echo    "<div class='details-div'>
    <h2 class='heading'>$academic_title</h2>
            <img class='details-img' src='./adminpanel/assets/img/alerts/$academic_image' style='width:40%'/> 
            <h3 class='details-message'>$academic_message</h3>
            </div>";
endforeach;

}


if($obj->Normal_Query("UPDATE academics SET views = views + 1 WHERE id=$academic_id")){

}else{
    echo '..';
}


?>