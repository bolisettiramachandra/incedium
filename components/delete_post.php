<div class="form-section">
            <div class="form-grid">
         
        <div class="group">
        <h2 class="form-heading">DELETE POSTS HERE</h2>
        </div><!--Close Group -->
</div>
</div>

<?php
    $user_id = $_SESSION['user_id'];
    
    if(isset($_GET['id'])){
        $post_id = $_GET['id'];
        if($obj->Normal_Query("UPDATE academics SET delete_post = 1 WHERE user_id=$user_id AND id=$post_id")){
            echo 'post is deleted succesfully!';
            
        }
        
    }
    
    
    
    $subject_get = $_GET['subject'];
 
    if($obj->Normal_Query("SELECT * FROM academics WHERE user_id = ? AND delete_post = 0 ORDER BY id DESC",[$user_id])){

    $academic_result = $obj->fetch_all();

foreach($academic_result as $informations):
    $id = $informations->id;
    $academic_title = ucwords($informations->title);
    $academic_title = implode(' ', array_slice(explode(' ', $academic_title), 0, 10));
    $academic_message = $obj->security($informations->body);
    $academic_message = implode(' ', array_slice(explode(' ', $academic_message), 0, 10));
    $academic_image = $informations->image;
    
    if($academic_title!=''){
        echo  
    "
    <section>
    <form action='' method='get'>
    <div class='alert-card'>
    <div class='alert-img-container'> 
    <img class='alert-img'  src='./adminpanel/assets/img/alerts/$academic_image' alt='Avatar' style='width:100%'>
    </div>
      
      <div class='alert-container'>
        <p class = 'alert-title'>$academic_title </p> 
        <p class = 'alert-message'>$academic_message</p>
        <input type='hidden' name='id' value='{$id}'/>
        <input type='submit' name='delete' value='DELETE THIS POST' class='control' />
      </div>
    </div> 
    
    </form>
    </section>
    
    <br />
    <br />
    <br />
    <br />
    <br />
    ";
    }
    



    endforeach;

}

?>