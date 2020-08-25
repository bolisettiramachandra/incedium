<div class="form-area">

    <form method = "POST" action ="" >
    <div class="group">
        <h2 class="form-heading">CHANGE PASSWORD</h2>
        </div><!--Close Group -->

        
        
        <div class="group">
            <input type="password" name = "new_password" class ="control" placeholder="Enter New Password..!" value="<?php if(isset($new_password)):echo $new_password; endif; ?>" >
            <div class = "name-error error">
            <?php if(isset($new_password_error)):     ?>

            <?php echo $new_password_error; ?>

            <?php endif; ?>

        </div> <!-- close of name-error -->
        </div><!--Close Group -->
        
        <div class="group">
            <input type="password" name = "retype_password" class ="control" placeholder="Retype Password..!" value="<?php if(isset($retype_password)):echo $retype_password; endif; ?>" >
            <div class = "name-error error">
            <?php if(isset($retype_password_error)):     ?>

            <?php echo $retype_password_error; ?>

            <?php endif; ?>

        </div> <!-- close of name-error -->
        </div><!--Close Group -->

        
        <div class="group">
            <input type="submit" name = "change_password" value="CHANGE PASSWORD" class ="btn account-btn">
        </div><!--Close Group -->   
    </form> 

</div> <!-- Close of Form Area-->    