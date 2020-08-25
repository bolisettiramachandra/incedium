<?php include "init.php"; 
$obj = new base_class;
?>

<?php
if(isset($_GET['resend-btn'])){
    $email=$obj->security($_GET['email']);
    $email_status =  1;
    if(empty($email)){
        $email_error = "Email is Required";
        $email_status="";
    }
if(!empty($email_status)){
    if($obj->Normal_Query("SELECT * FROM users WHERE email = ?",[$email])){
        if($obj->Count_Rows()==0){
            $email_error = "The E-Mail isn't have an account!";
        }else{
          
        if($obj->Normal_Query("SELECT activation from users WHERE email = ?",[$email])){
             $row = $obj->Single_Result();
             $key = $row->activation;
            
               
    echo $email.$key;
            echo "1";
            $message= "Please Click on the link to Activate your Account\n\n";
            $message .= "http://incedium.com/actiation.php?email=".urlencode($email)."&key=$key";
            
              if(mail($email,'Activation Link',$message)){
              $obj->Create_session('mail_sent',"A Mail is Sent to your Account Please click on the link to proceed");
              header("location:./progress/index.php");
            }
            
            
        }    
            
    
        }
    }
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



<div class = "signup-container">

<div class="account-left">
      <div id="particles-js">
    <div class="account-text">
       
        
        <h2> KL Connect </h2>
        <p>This is the KL Social Media, KL Connect is a platform where every KLIAN connects on the platform.</p>
    </div>
    </div> <!-- Close of particles -->

</div> <!-- Close of Account left -->

<div class="account-right">
    

<?php include './components/resend_activation_form.php'; ?>
      


</div> <!-- Close of Account Right -->

</div> <!-- Close of SignUp - Container -->

<script src="./assets/js/file-label.js"></script>
<script src="./assets/js/app.js"></script>
<script src="./assets/js/particles.js"></script>
<script src="./assets/js/jquery.min.js"></script>
<?php include './components/js.php'; ?> 
</body>
</html>