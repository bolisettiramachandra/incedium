<?php

if($obj->Normal_Query("SELECT * FROM online_courses ORDER BY course_id DESC")){

    $course_result = $obj->fetch_all();

foreach($course_result as $informations):
    $course_id = $informations->course_id;
    $course_title = ucwords($informations->course_title);
    $course_title = implode(' ', array_slice(explode(' ', $course_title), 0, 10));
    $course_message = $obj->security($informations->course_description);
    $course_message = implode(' ', array_slice(explode(' ', $course_message), 0, 10));
    $course_image = $informations->image;
   // $course_name = $informations->username;
  //  $course_time  = $informations->time;
    
    echo    "<a class='alert-link' href = 'course.php?id={$course_id}'><div class='alert-card'>
    <div class='alert-img-container'> 
    <img class='alert-img'  src='assets/img/online_courses/$course_image' alt='Avatar' style='width:100%'>
    </div>      
      <div class='alert-container'>
        <p class = 'alert-title'>$course_title </p> 
        <p class = 'alert-message'>$course_message</p>   
      </div>
    </div> </a>";


    endforeach;

}else{
  echo 'fuck-off';
}

?>


