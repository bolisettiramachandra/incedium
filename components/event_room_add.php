<div class="form-section">
            <div class="form-grid">
         
        <div class="group">
        <h2 class="form-heading">ADD AN EVENT ROOM </h2>
        </div><!--Close Group -->

<?php

    $user_id  = $_SESSION['user_id'];

$result='';

if(isset($_POST['submit'])){
    $eventname = ($_POST['eventname']);
    $eventdescription = ($_POST['eventdescription']);
    $group_type = 'event';
    
        $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg','jpeg','png','JPG','JPEG','PNG');
    
    $eventname_status  = $eventdescription_status = 1;

    if(empty($eventname)){
        $eventname_error = 'Please Enter Event Name';
        $eventname_status ='';
    }

    if(empty($eventdescription)){
        $eventdescription_error = 'Please Enter Description';
        $eventdescription_status ='';
    }
    
    
    
    if($eventname_status && $eventdescription_status == 1){
        
     if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 10000000){
                $fileNameNew = uniqid('',true).'.'.$fileActualExt;
            $fileDestination = './assets/img/event_groups/'.$fileNameNew;
            if(move_uploaded_file($fileTmpName,$fileDestination)){
                if($obj->Normal_Query("INSERT INTO inced_groups (created_by,group_logo,group_name,group_description,group_type) VALUES(?,?,?,?,?)",[$user_id,$fileNameNew,$eventname,$eventdescription,$group_type])){
                    $result = 'Awesome! Your Group is added!';
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

    }

}
?>
          <form action='' method='POST' enctype = "multipart/form-data">
           <div class="form-group">
               <input type='text' name='eventname' class='control' placeholder='Enter Your Event Name'/>
           </div>          <?php if(isset($eventname_error)):     ?> <?php echo $eventname_error; ?> <?php endif; ?>
           <br/>
           <div class="form-group">
               <textarea class='control' name='eventdescription' placeholder='Description( 300 characters)' rows="5" cols="60"></textarea>
           </div>          <?php if(isset($eventdescription_error)):     ?> <?php echo $eventdescription_error; ?> <?php endif; ?>
           <br/>
                    
        <div class="group">
            <label for="file" id="file-label"> <i class="fas fa-cloud-upload-alt upload-icon"></i> CHOOSE A GROUP ICON </label>
            <input type="file" name = "file" class ="file" id="file">
            <div class = "name-error error">
            
        </div> <!-- close of name-error -->
<br/>


                   
 <div class="form-group"><button name='submit' value='submit' class="btn account-btn" type="submit">CREATE EVENT</button></div>
                </form>

</div>
</div>
