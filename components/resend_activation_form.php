<div class="form-area">

<form method = "GET" action ="" >
        <div class="group">
        <h2 class="form-heading">RE-SEND ACTIVATION</h2>
        </div><!--Close Group -->

     
        <div class="group">
            <input type="email" name = "email" class ="control" placeholder="Enter Your Email ID .!" value="<?php if(isset($email)):echo $email; endif; ?>">
            <div class = "name-error error">
            <?php if(isset($email_error)):     ?>

            <?php echo $email_error; ?>

            <?php endif; ?>

        </div> <!-- close of name-error -->
        </div><!--Close Group -->
        <div class="group">
            <input type="submit" name = "resend-btn" value="RESEND ACIVATION" class ="btn account-btn">
        </div><!--Close Group -->

        <div class="group">
            <a href="signup.php" class="link" >Create New Account?</a>
        </div><!--cose of group-->

    </form> 
</div> <!-- Close of Form Area-->    