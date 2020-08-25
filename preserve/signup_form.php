<div class="form-area">
    <form method = "POST" action ="" enctype = "multipart/form-data">
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
            <input type="email" name = "email" class ="control" placeholder="Enter Your Email ID .!" value="<?php if(isset($email)):echo $email; endif; ?>" >
            <div class = "name-error error">
            <?php if(isset($email_error)):     ?>

            <?php echo $email_error; ?>

            <?php endif; ?>

        </div> <!-- close of name-error -->

        </div><!--Close Group -->

 <div class="group">
            <input type="branch" name = "branch" class ="control" placeholder="Enter Your Branch .!" value="<?php if(isset($email)):echo $email; endif; ?>" >
            <div class = "name-error error">
            <?php if(isset($email_error)):     ?>

            <?php echo $email_error; ?>

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
            <label for="file" id="file-label"> <i class="fas fa-cloud-upload-alt upload-icon"></i> Choose an Image to Upload </label>
            <input type="file" name = "img" class ="file" id="file">
            <div class = "name-error error">
            <?php if(isset($image_error)):     ?>

            <?php echo $image_error; ?>

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