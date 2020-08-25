<?php


echo "</br><center><button onclick='goBack()' class='button'>Go Back</button></center>
<script>
function goBack() {
  window.history.back();
}
</script>";
$branch = $_GET['branch'];

    if(isset($_GET['year'])){
        $year = $_GET['year'];
        
        if(!isset($_GET['subject'])){
                    if($obj->Normal_Query("SELECT DISTINCT subject FROM academics WHERE branch = ? AND year= ?",[$branch,$year])){

    $subject_result = $obj->fetch_all();

foreach($subject_result as $informations):
    $subject = $informations->subject;
    
    if($subject!=''){
    echo    "<a class='subject-link' href = './branch.php?branch={$branch}&year={$year}&subject={$subject}'>
    <div class='subject-card'>
      
      <div class='subject-container'>
        <p class = 'subject-title'>$subject</p> 
      </div>
    </div> </a>";
}

    endforeach;

}else{
    
}
        }    
        

 
    }else{
        
    
    echo "   
    
    <div class='form-section'>
   
   <div class='form-grid'>
        <div class='group'>
        <h2 class='form-heading'>SELECT YOUR YEAR</h2>
        </div><!--Close Group -->
    </div>
    </div>
  <section>
    <div class='overlay-container'>      
  <div class='content'>
    <a href='./branch.php?branch={$branch}&year=2016'>
      <img class='content-image' src='./assets/img/years/2016.png'>
      <div class='content-details fadeIn-top fadeIn-left'>
      <!--   <h3>This is a title</h3> -->
      </div><!--close of content details -->
    </a>
  </div><!-- close of content -->
</div><!--close of overlay-container -->


    <div class='overlay-container'>      
  <div class='content'>
    <a href='./branch.php?branch={$branch}&year=2017'>
      <img class='content-image' src='./assets/img/years/2017.png'>
      <div class='content-details fadeIn-top fadeIn-left'>
      <!--   <h3>This is a title</h3> -->
      </div><!--close of content details -->
    </a>
  </div><!-- close of content -->
</div><!--close of overlay-container -->


    <div class='overlay-container'>      
  <div class='content'>
    <a href='./branch.php?branch={$branch}&year=2018'>
      <img class='content-image' src='./assets/img/years/2018.png'>
      <div class='content-details fadeIn-top fadeIn-left'>
      <!--   <h3>This is a title</h3> -->
      </div><!--close of content details -->
    </a>
  </div><!-- close of content -->
</div><!--close of overlay-container -->

<br />
</section>
";
    }
    
    ?>
    
    

    
        

<?php


if(isset($_GET['year']) && isset($_GET['branch']) && isset($_GET['subject'])){
    
    $subject_get = $_GET['subject'];
    $year = $_GET['year'];
 
    if($obj->Normal_Query("SELECT academics.id,academics.user_id,academics.title,academics.body,academics.image,academics.branch,academics.subject,academics.year,academics.auth,academics.delete_post,academics.views,users.username FROM  academics INNER JOIN users ON academics.user_id = users.id WHERE academics.branch = ? AND academics.year =? AND academics.subject= ? AND academics.delete_post = 0 ORDER BY academics.id DESC",[$branch,$year,$subject_get])){

    $academic_result = $obj->fetch_all();

foreach($academic_result as $informations):
    $id = $informations->id;
    $academic_title = ucwords($informations->title);
    $academic_title = implode(' ', array_slice(explode(' ', $academic_title), 0, 10));
    $academic_message = $obj->security($informations->body);
    $academic_message = implode(' ', array_slice(explode(' ', $academic_message), 0, 10));
    $academic_image = $informations->image;
    $academic_name = $informations->username;
    
    if($academic_title!=''){
        echo  
    "
    <section>
    <a class='alert-link' href = 'academic_post.php?id={$id}'>
    <div class='alert-card'>
    <div class='alert-img-container'> 
    <img class='alert-img'  src='./adminpanel/assets/img/alerts/$academic_image' alt='Avatar' style='width:100%'>
    </div>
      
      <div class='alert-container'>
        <p class = 'alert-title'>$academic_title </p> 
        <p class = 'alert-message'>$academic_message</p> 
        <p class='alert-name'>Posted by $academic_name</p>
      </div>
    </div> </a>
    </section>
    ";
    }
    



    endforeach;

}

}elseif(isset($_GET['year']) && isset($_GET['branch'])){

     if($obj->Normal_Query("SELECT academics.id,academics.user_id,academics.title,academics.body,academics.image,academics.branch,academics.subject,academics.year,academics.auth,academics.delete_post,academics.views,users.username FROM  academics INNER JOIN users ON academics.user_id = users.id   WHERE academics.branch = ? AND academics.year= ? AND academics.delete_post = 0 ORDER BY academics.id DESC",[$branch,$year])){

    $academic_result = $obj->fetch_all();

foreach($academic_result as $informations):
    $id = $informations->id;
    $academic_title = ucwords($informations->title);
    $academic_title = implode(' ', array_slice(explode(' ', $academic_title), 0, 10));
    $academic_message = $obj->security($informations->body);
    $academic_message = implode(' ', array_slice(explode(' ', $academic_message), 0, 10));
    $academic_name = $informations->username;    
    $academic_image = $informations->image;
    
    if($academic_title!=''){
            echo  
    
    "
    <section>
    <a class='alert-link' href = 'academic_post.php?id={$id}'>
    <div class='alert-card'>
    <div class='alert-img-container'> 
    <img class='alert-img'  src='./adminpanel/assets/img/alerts/$academic_image' alt='Avatar' style='height:100%'>
    </div>
      
      <div class='alert-container'>
        <p class = 'alert-title'>$academic_title </p> 
        <p class = 'alert-message'>$academic_message</p> 
        <p class='alert-name'>Posted by $academic_name</p>
      </div>
    </div> </a>
    </section>
    ";
    }
    



    endforeach;

    
}

}




?>
