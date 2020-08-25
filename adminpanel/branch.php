<?php include '../init.php'; ?>
<?php include '../security.php'; ?>
<?php
$obj = new base_class;

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
            $fileDestination = './assets/img/alerts/'.$fileNameNew;
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
                    <p>This is the Admin panel for <?php echo $branch; ?>. Please Mention the title and body of the post here!</p>
                </div>
                
                  <h2 class="text-info"><?php echo $result;   ?></h2>
                
                
                <form action='' method='POST' enctype = "multipart/form-data">
           <div class="form-group"><label>TITLE</label><textarea name='title' class="form-control"></textarea></div>          <?php if(isset($title_error)):     ?> <?php echo $title_error; ?> <?php endif; ?>
                    
           <div class="form-group"><label>YEAR</label>
           <select class='form-control' name='year'>
               <option value=""></option>
  <option value="2016">2016</option>
  <option value="2017">2017</option>
  <option value="2018">2018</option>
</select>
           </div>
           
           
<div class="form-group"><label>SUBJECT</label>
<select class='form-control' name='subject'>
               
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
           
<div class="form-group"><label for="file">IMAGE</label><input type="file" name='file' id='file'></div>



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