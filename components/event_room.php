<div class="form-section">
            <div class="form-grid">
         
        <div class="group">
        <h2 class="form-heading">EVENT ROOM</h2>
        </div><!--Close Group -->
            
            </div><!-- Close of Form- Grid-->

        </div><!--Close of For Grid -->


<div class="cards">
    

<?php
    
    $user_id= $_SESSION['user_id'];

    if($obj->Normal_Query("SELECT * FROM inced_groups WHERE created_by = ? AND group_type='event'",[$user_id])){

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

}else{
    
}



?>
    
           

<a href='event_room_add.php' >
      <div class="dash-card">
  <img src="./assets/img/icons/add_group.png" alt="Avatar" style="width:100%">
  <div class="dash-container">
    <h4><b>ADD ROOM</b></h4> 

  </div><!-- close of dash-container -->
</div><!-- close of dash-card -->

</a>


</div><!-- close of cards -->
       
        