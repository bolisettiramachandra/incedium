<?php
if($obj->Normal_Query("SELECT username,id,image FROM users")){

    $users_result = $obj->fetch_all();

foreach($users_result as $informations):
    $user_id = $informations->id;
    $username = ucwords($informations->username);
    $user_image = $informations->image;

    if($user_image =='null'||''){
      $user_image ='http://tinygraphs.com/squares/'.$username;
  }else{
      $user_image='./assets/img/'.$user_image;
  }
    
    echo    "<a class='alert-link' href = './chat.php?username={$username}'>
    <div class='alert-card'>
    <div class='alert-img-container'> 
    <img class='alert-img'  src='$user_image' alt='Avatar' style='width:100%'>
    </div>      
      <div class='alert-container'>
        <p class = 'alert-title'>$username </p> 
      </div>
    </div>
    </a>";


    endforeach;

}

?>


<a class="alert-link" href = "#"><div class="alert-card">
<div class="alert-img-container"> 
<img class="alert-img"  src="./assets/weber.jpg" style="width:100%">
</div>
  
  <div class="alert-container">
    <p class = "alert-title">GUPTA weber </p>  
  </div>
</div> </a>