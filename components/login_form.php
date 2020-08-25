<div class="form-area">
    <?php if(isset($_SESSION['account_success'])): ?>
        <div class="alert">
            <?php echo $_SESSION['account_success']; ?>
        </div> <!-- close of Alert-->
<?php endif; ?>
<?php unset($_SESSION['account_success']); ?>
    <form method = "POST" action ="" >
        <div class="group">
        <h2 class="form-heading">INCEDIUM LOGIN</h2>
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
            <input type="password" name = "password" class ="control" placeholder="Enter Password..!" value="<?php if(isset($password)):echo $password; endif; ?>">
<div class="name-error error">
<?php if(isset($password_error)):     ?>
<?php echo $password_error; ?>

<?php endif; ?>

</div>
            
        </div><!--Close Group -->
       
           <div class="group">
            <a href="forgot.php" class="link" >Forgot Password?</a>
        </div><!--cose of group-->
        <div class="group">
            <input type="submit" name = "login" value="USER LOGIN" class ="btn account-btn">
        </div><!--Close Group -->

        <div class="group">
            <a href="signup.php" class="link" >Create a New Account?</a>
        </div><!--cose of group-->

    </form> 

</div> <!-- Close of Form Area-->    