<?php include "init.php"; 
$obj = new base_class;
?>
<?php
if(isset($_POST['change_password'])){
    
        $new_password = $obj->security($_POST['new_password']);
    $retype_password = $obj->security($_POST['retype_password']);

  $new_status = $retype_status = 1;

    if(empty($new_password)){
        $new_password_error = "Please Enter New Password";
        $new_status = '';
    }else if(strlen($new_password)<5){
        $new_password_error = "The Entered Password is too short..";
        $new_status = '';
    }
    if(empty($retype_password)){
        $retype_password_error = "Please Enter Retype Password";
        $retype_status = '';
    }else if(!($new_password==$retype_password)){
        $retype_password_error = "The passwords dosent Match";
        $retype_status = '';
    }

    if(!empty($new_status) && !empty($retype_status)){
           
if(isset($_GET['email']) && isset($_GET['key'])){
    $email = $_GET['email'];
    $key = $_GET['key'];
    
    echo $email;
    echo $key;

    if(filter_var($email,FILTER_VALIDATE_EMAIL)){

        if($obj->Normal_Query("SELECT email FROM users WHERE email = ?",array($email))){
            if($obj->Count_Rows()!=0){
                if($obj->Normal_Query("SELECT forgot_key FROM users WHERE email = ?",array($email))){
                    $row = $obj->Single_Result();
                    $forgot_key = $row->forgot_key;
                    if($forgot_key == $key){
     if($obj->Normal_Query("UPDATE users SET password = ? WHERE (email = ? AND forgot_key = ?)",[password_hash($new_password,PASSWORD_DEFAULT),$email,$key])){
         
          $obj->Create_Session("password_updated","Your Password is updated Successfully!");
           header("location:./progress/index.php");

}
                    }
              
                }else{
                    header("location:index.php");
                }
            }else{
              //  header("location:index.php");
            }
        }else{
           // header("location:index.php");
        }
    }else{
       // header("location:index.php");
    }

}else{
    echo 'email, key';
    
    //header("location:index.php");
}
        
        
       
         
           //     if($obj->Normal_Query("UPDATE users SET password = ? WHERE id= ?",[password_hash($new_password,PASSWORD_DEFAULT),$user_id])){
           //         $obj->Create_Session("password_updated","Your Password is updated Successfully!");
          //          header("location:index.php");
          //      }

            
        
    }
 
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>USER LOGIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include './components/css.php'; ?>
</head>
<body>

<?php if(isset($_SESSION['security'])): ?>
<div class="flash error-flash">
    <span class="remove">&times;</span>
    <div class="flash-heading">
    <h3> <span class="cross">&#x2715;</span> Success: You Have Done! </h3>
    </div>

    <div class="flash-body">
    <p><?php echo $_SESSION['security']; ?></p>
    </div>
</div>

<?php endif; ?>
<?php unset($_SESSION['security']); ?>

<div class = "signup-container">

<div class="account-left">
      <div id="particles-js">
    <div class="account-text">
       
        
        <h2> Incedium </h2>
        <p>This is the Incedium Social Media, Incedium is a platform where every student can connect on the platform and can share their ideas, can get Notifications.</p>
    </div>
    </div> <!-- Close of particles -->

</div> <!-- Close of Account left -->

<div class="account-right">
    

<?php include './components/update_pass_form.php'; ?>
      


</div> <!-- Close of Account Right -->

</div> <!-- Close of SignUp - Container -->

<script src="./assets/js/file-label.js"></script>
<script src="./assets/js/app.js"></script>
<script src="./assets/js/particles.js"></script>
<script src="./assets/js/jquery.min.js"></script>
<?php include './components/js.php'; ?> 
</body>
</html>