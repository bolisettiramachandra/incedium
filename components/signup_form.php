<div class="form-area">
    <form method = "POST" action="" enctype = "multipart/form-data">
        <div class="group">
        <h2 class="form-heading">CREATE NEW ACCOUNT</h2>
        </div><!--Close Group -->

        <div class="group">
            <input type="text" name = "fullname" class ="control" placeholder="Enter Your FullName.!" value="<?php if(isset($full_name)):echo $full_name; endif; ?>">
        <div class = "name-error error">
            <?php if(isset($name_error)):     ?>
            <?php echo $name_error; ?>
            <?php endif; ?>

        </div> <!-- close of name-error -->
        
        </div><!--Close Group -->

    
    <div class="group">
            <input type="text" name = "username" class ="control" placeholder="Enter Your User Name.!" value="<?php if(isset($user_name)):echo $user_name; endif; ?>">
        <div class = "name-error error">
            <?php if(isset($user_error)):     ?>

            <?php echo $user_error; ?>

            <?php endif; ?>

        </div> <!-- close of name-error -->
        
        </div><!--Close Group -->

    
<div class="group">
            <input type="text" name = "idnumber" class ="control" placeholder="Enter Your IdNumber.!" value="<?php if(isset($id_number)):echo $id_number; endif; ?>">
        <div class = "name-error error">
            <?php if(isset($user_error)):     ?>

            <?php echo $idnum_error; ?>

            <?php endif; ?>

        </div> <!-- close of name-error -->
        
        </div><!--Close Group -->


        <div class="group">
            <input type="email" name = "email" class ="control" placeholder="Enter Your Email ID .!" value="<?php if(isset($email)):echo $email; endif; ?>" >
            <div class = "name-error error">
            <?php if(isset($email_error)):     ?>

            <?php echo $email_error; ?>

            <?php endif; ?>

        </div> <!-- close of name-error -->

        </div><!--Close Group -->



   
 
         <div class="group">
            <input type="password" name = "password" class ="control" placeholder="Enter Password..!" value="<?php if(isset($password)):echo $password; endif; ?>">
            <div class = "name-error error">
            <?php if(isset($password_error)):     ?>

            <?php echo $password_error; ?>

            <?php endif; ?>

        </div> <!-- close of name-error -->
        </div><!--Close Group -->
        

        <div class="group">
            <input type="submit" name = "signup" value="Create Account" class ="btn account-btn">
        </div><!--Close Group -->

        <div class="group">
            <a href="login.php" class="link" >Already Have an Account?</a>
        </div><!--cose of group-->

    </form> 

    </div> <!-- Close of Form Area-->