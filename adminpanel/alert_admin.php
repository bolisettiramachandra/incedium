<?php include '../init.php'; ?>
<?php
$user_id = $_SESSION['user_id'];
if(isset($_SESSION['user_id'])){
    echo 'set';
}else{
    echo 'unset';
}   

$obj = new base_class;
if(isset($_POST['submit'])){
    $title = $obj->security($_POST['title']);
    $image_link = $obj->security($_POST['image']);
    $category = $obj->security($_POST['club']);
    $body = $_POST['editor1'];

    $title_status = $image_status = $body_status = 1;

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
            $fileDestination = './assets/img/alerts/'.$fileNameNew;
            if(move_uploaded_file($fileTmpName,$fileDestination)){
 if($obj->Normal_Query("INSERT INTO alerts (alert_title,user_id,alert_message,alert_image1,category) VALUES(?,?,?,?,?)",[$title,$user_id,$body,$fileNameNew,$category] )){
            echo 'success';
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

<!DOCTYPE html>
<html>
<?php include './components/head.php'; ?>
<body>
<?php include './components/navbar.php'; ?>
    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">ADMIN PANEL</h2>
                    <p>This is the Admin panele for ALERTS. Please Mention the title and body of the post here!</p>
                </div>
                <form action='' method='POST'  enctype = "multipart/form-data">
                    <div class="form-group"><label>TITLE</label><textarea name='title' class="form-control"></textarea></div>          <?php if(isset($title_error)):     ?> <?php echo $title_error; ?> <?php endif; ?>
                 <div class="form-group"><label for="file">IMAGE</label><input type="file" name='file' id='file'></div>      
                    

                    
                    
            <div class="form-group"><label>CATEGORY</label>
           <select class='form-control' name='club'>
               <option value=""></option>
  <option value="alert">ALERT</option>
  <option value="pulse">PULSE</option>
  <option value="cea">CEA</option>
  <option value='kriento'> KRIENTO </option>
  <option value="club">HOBBY CLUB</option>    
  
</select>
           
           </div>    
                    
                    
                    
                    <label>Body</label>
                    <textarea name="editor1" class='form-control'></textarea>          <?php if(isset($body_error)):     ?> <?php echo $body_error; ?> <?php endif; ?>
		<script>
			CKEDITOR.replace( 'editor1' );
		</script>
                   
                    <div class="form-group"><button name='submit' value='submit' class="btn btn-primary btn-block" type="submit">POST</button></div>
                </form>
            </div>
        </section>
    </main>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>