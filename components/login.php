<?php include "init.php"; 
$obj = new base_class;
?>
<?php
if(isset($_POST['login'])){
    $email=$obj->security($_POST['email']);
    $password = $obj->security($_POST['password']);
    $email_status = $password_status = 1;
    if(empty($email)){
        $email_error = "Email is Required";
        $email_status="";
    }
    if(empty($password)){
        $password_error = "password is Required";
        $password_status="";
    }

if(!empty($email_status)&& !empty($password_status)){
    if($obj->Normal_Query("SELECT * FROM users WHERE email = ?",[$email])){
        if($obj->Count_Rows()==0){
            $email_error = "Please Enter Correct Email";
        }else{
            $row = $obj->Single_Result();
            $db_email = $row->email;
            $db_password = $row->password;
            $user_id = $row->id;
            $user_name = $row->name;
            $image_name = $row->image;
            $authority = $row->authority;
            $clear_status = $row->clear_status;

            if(password_verify($password,$db_password)){
                $status = 1;
                $obj->Normal_Query("UPDATE users SET status = ? WHERE id = ?",[$status,$user_id]);
                
                if($clear_status == 0){
                    if($clear_status == 0){
                        if($obj->Normal_Query("SELECT msg_id FROM messages ORDER BY msg_id DESC LIMIT 1")){
                            $last_row = $obj->Single_Result();
                            $last_msg_id = $last_row->msg_id + 1;

                            if($obj->Normal_Query("INSERT INTO clean(clean_message_id, clean_user_id) VALUES (?,?)",[$last_msg_id, $user_id])){
                                $update_clean_status = 1;
                                $obj->Normal_Query("UPDATE users SET clear_status = ? WHERE id =?",[$update_clean_status,$user_id]);
                                $obj->Create_Session("user_name",$user_name);
                                $obj->Create_Session("user_id",$user_id);
                                $obj->Create_Session("image_name",$image_name);
                                echo 'success';
                            }
                        }
                    }

                }else{
                    echo 'success';
                    $obj->Create_Session("user_name",$user_name);
                    $obj->Create_Session("user_id",$user_id);
                    $obj->Create_Session("image_name",$image_name);
                    $obj->Create_Session("authority",$authority);
                }               
               
            }else{
                $password_error = "Please Enter Correct Password";
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
       
        
        <h2> KL Connect </h2>
        <p>This is the KL Social Media, KL Connect is a platform where every KLIAN connects on the platform. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
    </div>
    </div> <!-- Close of particles -->

</div> <!-- Close of Account left -->

<div class="account-right">
    

<?php include './components/login_form.php'; ?>
      


</div> <!-- Close of Account Right -->

</div> <!-- Close of SignUp - Container -->

<script src="./assets/js/file-label.js"></script>
<script src="./assets/js/app.js"></script>
<script src="./assets/js/particles.js"></script>
<script src="./assets/js/jquery.min.js"></script>
<?php include './components/js.php'; ?> 
</body>
</html>