<?php
include "init.php";
$obj = new base_class;
if(isset($_SESSION['username'])){
    header("location:index.php");
}


if(isset($_POST['signup'])){
    $full_name = $obj->security($_POST['fullname']);
    $email= $obj->security($_POST['email']);
    $password = $obj->security($_POST['password']);
    $id_number = $obj->security($_POST['idnumber']);
   // $dob = $obj->security($_POST['dob']);
    $user_name = $obj->security($_POST['username']);
  //  $year = $obj->security($_POST['year']);
   // $branch = $obj->security($_POST['branch']);
   // $mobile = $obj->security($_POST['mobile']);
    $authority = "user";

   /* $img_name = $_FILES['img']['name'];
    $img_tmp = $_FILES['img']['tmp_name'];
    $img_path = "./assets/img";
    $extensions = ['jpg','jpeg','png'];
    $img_ext = explode(".",$img_name);
    $img_extensions = end($img_ext);

*/

  //  $name_status = $email_status = $password_status = $user_status= $dob_status= $year_status= $branch_status= $mobile_status = 1 ;
  $name_status = $email_status = $password_status = $user_status= $idnum_status = 1 ;

    if(empty($full_name)){
        $name_error = "Full Name is Required..!";
        $name_status = "";
    }

    if(empty($email)){
        $email_error = "Email is Required..!";
        $email_status = "";
    } else{
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $email_error="Invalid Email Format";
            $email_status = "";
        } else{
            if($obj->Normal_Query("SELECT email FROM users WHERE email = ?",array($email))){
                if($obj->Count_Rows()==0){

                }else{
                    $email_error="Emaild Already Exists";
                    $email_status = "";
                }
            }
        }
    }

    if(empty($password)){
        $password_error = "Password is Required";
        $password_status = "";
    }elseif(strlen($password)<5){
        $password_error = "Password is Too Short";
        $password_status = "";
    }

   /* if(empty($img_name)){
        $image_error = "Image is Required";
        $image_status = "";
    }else if(!in_array($img_extensions,$extensions)){
        $image_error = "Invalid Image";
        $image_status = "";

    }
    */


    if(empty($user_name)){
        $user_error = "User Name is Required..!";
        $user_status = "";
    }else{
        if(strpos($user_name, ' ')){
            $user_error="Username must not contain any spaces";
            $user_status = "";
        } else{
            if($obj->Normal_Query("SELECT username FROM users WHERE username = ?",array($user_name))){
                if($obj->Count_Rows()==0){

                }else{
                    $user_error="Username Already Exists";
                    $user_status = "";
                }
            }
        }
    }

    if(empty($id_number)){
        $idnum_error = "Id Number is Required..!";
        $idnum_status = "";
    }else{
        if(strpos($id_number, ' ')){
            $idnum_error="IdNumber must not contain any spaces";
            $idnum_status = "";
        } else{
            if($obj->Normal_Query("SELECT username FROM users WHERE id_number = ?",array($id_number))){
                if($obj->Count_Rows()==0){

                }else{
                    $user_error="IdNumber Already Exists";
                    $user_status = "";
                }
            }
        }
    }


/*
    if(empty($dob)){
        $dob_error = "Date of Birth is Required..!";
        $dob_status = "";
    }
    if(empty($year)){
        $year_error = "Year is Required..!";
        $year_status = "";
    }
    if(empty($branch)){
        $branch_error = "Branch is Required..!";
        $branch_status = "";
    }
    if(empty($mobile)){
        $mobile_error = "Mobile  is Required..!";
        $mobile_status = "";
    }

*/    

    if(!empty($name_status) && !empty($email_status) && !empty($password_status) && !empty($user_status) && !empty($idnum_status)){
        
       // move_uploaded_file($img_tmp, "$img_path/$img_name");
        $status = 0;
        $clear_status = 0;
        $activation = bin2hex(openssl_random_pseudo_bytes(16));


        if($obj->Normal_Query("INSERT INTO users (name,username,email,password,status,clear_status,id_number,authority,activation) 
        VALUES (?,?,?,?,?,?,?,?,?)",
        [$full_name,$user_name,$email,password_hash($password, PASSWORD_DEFAULT),$status,$clear_status,$id_number,$authority,$activation])){
            $obj->Create_session("account_success","Your Account is created Successfully");
            $message= "Please Click on the link to Activate\n\n";
            $message .= "http://incedium.com/activate.php?email=".urlencode($email)."&key=$activation";
            
            if(mail($email,'Confirm Your Registration : Team Incedium',$message)){
                $obj->Create_session("mail_sent","A Mail is Sent to your Account Please click on the link to proceed");
            header("location:./login.php");
            }
          
            
        }else{
            echo $full_name;
            echo $user_name;
            echo $email;
            echo $password;
            echo $status;
            echo $clear_status;
            echo $id_number;
            echo $authority;
            
            
            echo "Terminated!";
        }
    }


}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create An Account Today..!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include './components/css.php'; ?>
    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"> 
</head>
<body>

<div class = "signup-container">

<div class="account-left">
    <div class="account-text">
        <h2>Incedium</h2>
        <p>This is the Incedium Social Media, Incedium is a platform where every student can connect on the platform and can share their ideas, can get Notifications.</p>
    </div>


</div> <!-- Close of Account left -->

<div class="account-right">
<?php include './components/signup_form.php'; ?>
      


</div> <!-- Close of Account Right -->

</div> <!-- Close of SignUp - Container -->

<!-- <script src="./assets/js/file-label.js"></script> -->
<?php include './components/js.php'; ?>

</body>
</html>