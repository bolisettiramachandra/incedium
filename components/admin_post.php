<div class="form-section">
            <div class="form-grid">
         
        <div class="group">
        <h2 class="form-heading">POST HERE</h2>
        </div><!--Close Group -->


<?php

$branch = $_GET['branch'];
$id = $_SESSION['user_id'];
$result='';

if(isset($_POST['submit'])){
    $title = ($_POST['title']);
    $image_link =($_POST['image']);
    $body = ($_POST['editor1']);
    $year = $_POST['year'];
    $subject = $_POST['subject'];

    $title_status  = $body_status = 1;

    if(empty($title)){
        $title_error = 'Please Enter Title';
        $title_status ='';
    }

    if(empty($body)){
        $body_error = 'Please Enter Body';
        $body_status ='';
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
        
     if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 10000000){
                $fileNameNew = uniqid('',true).'.'.$fileActualExt;
            $fileDestination = './adminpanel/assets/img/alerts/'.$fileNameNew;
            if(move_uploaded_file($fileTmpName,$fileDestination)){
        if($obj->Normal_Query("INSERT INTO academics (user_id,title,body,image,branch,year,subject) VALUES(?,?,?,?,?,?,?)",[$id,$title,$body,$fileNameNew,$branch,$year,$subject] )){
            $result = 'Awesome! Your Post is Successfully Posted!';
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

    }

}
?>
          <form action='' method='POST' enctype = "multipart/form-data">
           <div class="form-group"><label>TITLE</label>
           <input type='text' name='title' class='control' />
           
           </div>          <?php if(isset($title_error)):     ?> <?php echo $title_error; ?> <?php endif; ?>
           <br/>
                    
           <div class="form-group"><label>YEAR</label>
           <select class='control' name='year'>
               <option value=""></option>
  <option value="2016">2016</option>
  <option value="2017">2017</option>
  <option value="2018">2018</option>
</select>
           </div>
           <br/>
           
<div class="form-group"><label>SUBJECT</label>
<select class='control' name='subject'>
               
    <?php
    if($obj->Normal_Query("SELECT DISTINCT subject FROM academics WHERE branch = ?",[$branch]))
{
    $row = $obj->fetch_all();
foreach($row as $informations):
    $subject = $informations->subject;  
    echo $subject;
    
    echo "<option value='$subject'>$subject</option>";
        
 endforeach;        
}
    
    ?>
  
</select>
           
           </div>                         
           <br/>
<div class="form-group"><label for="file">IMAGE</label><input type="file" name='file' id='file'></div>
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