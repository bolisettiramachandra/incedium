<div class="form-section">
            <div class="form-grid">
         
        <div class="group">
        <h2 class="form-heading">POST HERE</h2>
        </div><!--Close Group -->


<?php


$id = $_SESSION['user_id'];
$result='';

$image = 'udemy.png' ;

if(isset($_POST['submit'])){
    $title = ($_POST['title']);
    $body = ($_POST['editor1']);

    $title_status  = $body_status = 1;

    if(empty($title)){
        $title_error = 'Please Enter Title';
        $title_status ='';
    }

    if(empty($body)){
        $body_error = 'Please Enter Body';
        $body_status ='';
    }
    
    
    
    if($title_status && $body_status == 1){
        
        if($obj->Normal_Query("INSERT INTO online_courses (user_id,course_title,course_description,image) VALUES($id,'$title','$body','$image')")){
            $result = 'Awesome! Your Post is Successfully Posted!';
        }else{
            echo 'terminated';
            echo $title;
            echo $body;
            echo "INSERT INTO online_courses (user_id,course_title,course_description,image) VALUES($id,'$title','$body','$image')";
        }

    }

}
?>
          <form action='' method='POST' enctype = "multipart/form-data">
           <div class="form-group"><label>TITLE</label>
           <input type='text' name='title' class='control' />
           
           </div>          <?php if(isset($title_error)):     ?> <?php echo $title_error; ?> <?php endif; ?>
           <br/>
<br/>


        <label>Body</label>
             <textarea name="editor1" class='control'></textarea>          <?php if(isset($body_error)):     ?> <?php echo $body_error; ?> <?php endif; ?>
		<script>
			CKEDITOR.replace( 'editor1' );
		</script>
		<br/>
                   
                    <div class="form-group"><button name='submit' value='submit' class="btn account-btn" type="submit">POST</button></div>
                </form>
                
</div>
</div>