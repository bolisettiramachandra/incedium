<div class="day-activity">
     <div class="group">
        <h2 class="heading"><?php 
if(isset($_GET['id'])){
    $group_id = $_GET['id'];
}else{
echo '404';
}

	if($obj->Normal_Query("SELECT * FROM inced_groups WHERE group_id = ?",[$group_id])){
	$eventgroups_result = $obj->fetch_all();
	
foreach($eventgroups_result as $informations):
    $group_id = $informations->group_id;
    $eventgroup_name = $informations->group_name;
    $eventgroup_description = $informations->group_description;
    $eventgroup_logo = $informations->group_logo;
    
    if($eventgroup_name!=''){
    echo $eventgroup_name;
    }

endforeach;

}else{

    echo 'error';
    
}



 ?></h2>
    </div><!--Close Group -->
    


  


</div>