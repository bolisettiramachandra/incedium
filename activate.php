<?php
session_start();
include "init.php";
$obj = new base_class;


if(isset($_GET['email']) && isset($_GET['key'])){
    $email = $_GET['email'];
    $key = $_GET['key'];

    if(filter_var($email,FILTER_VALIDATE_EMAIL)){

        if($obj->Normal_Query("SELECT email FROM users WHERE email = ?",array($email))){
            if($obj->Count_Rows()!=0){
                if($obj->Normal_Query("SELECT activation FROM users WHERE email = ?",array($email))){
                    $row = $obj->Single_Result();
                    $db_key = $row->activation;
                   if($key == $db_key){
                    if($obj->Normal_Query("UPDATE users SET activation = ? WHERE (email = ? AND activation = ?)",['activated',$email,$key])){
                        
                        $obj->Create_session("account_success","Your Account is created successfully!");
            header("location:./progress/index.php");
                    }
                   }elseif($db_key == 'activated'){
                    echo 'Already Activated';                    
                }
                }else{
                    header("location:index.php");
                }
            }else{
                header("location:index.php");
            }
        }else{
            header("location:index.php");
        }
    }else{
        header("location:index.php");
    }

}else{
    header("location:index.php");
}

?>