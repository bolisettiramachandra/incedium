<?php

$email = 'guptapandiri99@gmail.com';
$key='2c84f4bf499b7f05249da2e0b312a7a7';
            $message= "Please Click on the link to Change Password\n\n";
            $message .= "http://incedium.com/update_pass.php?email=".urlencode($email)."&key=$key";
            
              if(mail($email,'Change Password',$message)){
              echo $message;
            }else{
	echo 'error';
}

?>