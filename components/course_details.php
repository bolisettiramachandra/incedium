<?php

$course_id = $_GET['id'];

if($obj->Normal_Query("SELECT * FROM online_courses WHERE course_id = ?",[$course_id])){

    $course_result = $obj->fetch_all();

foreach($course_result as $informations):
    $course_id = $informations->course_id;
    $course_title = ucwords($informations->course_title);
    $course_message = $informations->course_description;
    $course_image = $informations->image;
    
    echo    "<div class='details-div'>
    <h2 class='heading'>$course_title</h2>
            <img class='details-img' src='assets/img/online_courses/$course_image' style='width:40%'/> 
            <h3 class='details-message'>$course_message</h3>
            </div>";
endforeach;

}


if($obj->Normal_Query("UPDATE online_courses SET views = views + 1 WHERE course_id=$course_id")){

}else{
    echo '..';
}



?>