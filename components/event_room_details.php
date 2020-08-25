<?php
    
    $id= $_SESSION['id'];

    if($obj->Normal_Query("SELECT * FROM inced_groups WHERE group_id = ?",[$id])){

    $eventgroups_result = $obj->fetch_all();

foreach($eventgroups_result as $informations):
    $group_id = $informations->group_id;
    $eventgroup_name = $informations->group_name;
    $eventgroup_description = $informations->group_description;
    $eventgroup_logo = $informations->group_logo;
    
    if($eventgroup_name!=''){
    echo    "<a href='./event_room_chat.php?id=$group_id' >
      <div class='dash-card'>
  <img src='./assets/img/event_groups/$eventgroup_logo' alt='Avatar' style='width:100%'>
  <div class='dash-container'>
    <h4><b>$eventgroup_name</b></h4> 

  </div><!-- close of dash-container -->
</div><!-- close of dash-card -->

</a>";
}

    endforeach;

}


?>
    
     

<div class="day-activity">

     <div class="group">
        <h2 class="heading">INCEDIUM TODAY!</h2>
    </div><!--Close Group -->
    


   <a href='#' >
      <div class="day-card">
  <img src="./assets/img/day_area/allthebest.png" alt="Avatar" style="width:100%">
  <div class="day-container">
    <h4><b>ALL THE BEST FOR YOUR TEST - 1 EXAMS</b></h4> 
    <p></p> 
  </div><!-- close of dash-container -->
</div><!-- close of dash-card -->
</a>

   <a href='#' >
      <div class="day-card">
  <img src="./assets/img/day_area/include.jpg" alt="Avatar" style="width:100%">
  <div class="day-container">
    <h4><b> </b></h4> 
    <p></p> 
  </div><!-- close of dash-container -->
</div><!-- close of dash-card -->
</a>


</div>