<div class="form-section">         
        <div class="group">
        <h2 class="form-heading">POSTING  IN <?php echo $blog_name; ?></h2>
        </div><!--Close Group -->
<?php
$user_id = $_SESSION['user_id'];
if(isset($_POST['submit'])){
    $title = htmlspecialchars($_POST['title']);
   // $image_link =htmlspecialchars($_POST['file']);
    $body = htmlspecialchars($_POST['editor1']);
    $hashtags = htmlspecialchars($_POST['hashtags']);

    $title_status  = $body_status = 1;

    if(empty($title)){
        $title_error = 'Please Enter Title';
        $title_status ='';
    }

    if(empty($body)){
        $body_error = 'Please Enter Body';
        $body_status ='';
    }
    if(empty($hashtags)){
        $hashtags=' ';
    }
    
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg','jpeg','png','pdf');

    if($title_status && $body_status == 1){
        echo 'status yes';        
     if(in_array($fileActualExt, $allowed)){
         echo 'array yes';
        if($fileError === 0){
            echo 'error no';
            if($fileSize < 10000000){
                echo 'file size matched';
                $fileNameNew = uniqid('',true).'.'.$fileActualExt;
            $fileDestination = './assets/img/blog/'.$fileNameNew;
            if(move_uploaded_file($fileTmpName,$fileDestination)){
                echo 'destination yes';
        if($obj->Normal_Query("INSERT INTO blog_posts (user_id,post_title,post_body,post_image,hashtags) VALUES(?,?,?,?,?)",[$user_id,$title,$body,$fileNameNew,$hashtags] )){
            header("location:blog.php?blog=$blog_name");
            $result = 'Awesome! Your Post is Successfully Posted!';
            echo $result;
        }else{
            echo 'terminated';
        }
            }else{
                echo 'Error';
            }      
            }else{
                echo 'Your File is too Big!';
            }
        }else{
            echo "Error while uploading your file";
        }
        }else{
        echo "You cannot upload files of this type";
        }

    }else{
        echo 'sorry';
    }

}
?>
          <form action='' method='POST' enctype = "multipart/form-data">
           <div class="form-group"><label>TITLE</label>
           <input type='text' name='title' class='control' placeholder='Title' />           
           </div>   <?php if(isset($title_error)):     ?> <?php echo $title_error; ?> <?php endif; ?>
           <br/>    

            <div class="form-group"><label for="file">IMAGE</label><input type="file" name='file' id='file'></div>
            <br/>


        <label>Body</label>
             <textarea name="editor1" class='control'></textarea>          <?php if(isset($body_error)):     ?> <?php echo $body_error; ?> <?php endif; ?>
		<script>
			CKEDITOR.replace( 'editor1' );
		</script>
		<br/>

        <div class="form-group"><label>HASHTAGS</label>
           <input type='text' name='hashtags' class='control' placeholder='Tag (up to 5 tags), the first tag is your main category.' />           
        </div>
           <br/>   
                    <div class="form-group"><button name='submit' value='submit' class="btn account-btn" type="submit">POST</button></div>
                </form>
                </div>