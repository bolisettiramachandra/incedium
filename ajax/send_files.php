<?php 
include "../init.php";
$obj = new base_class;
if(isset($_FILES['send_file']['name'])){
   $file_name = $_FILES['send_file']['name'];
   $tmp_name = $_FILES['send_file']['tmp_name'];
   $fileSize = $_FILES['send_file']['size'];
   $fileError = $_FILES['send_file']['error'];
   $store_files = "../assets/files";
   $extensions = array("jpg","JPG","jpeg","png","pdf","zip","docx","xlsx","pptx");

   $get_file_extension = explode(".", $file_name);
   $get_extension = end($get_file_extension);
   $new_file_name = time().$file_name;

   if(!in_array($get_extension, $extensions)){
       echo "error";
   } else{
    if($fileError === 0){
        if($fileSize < 1000000){
       $user_id = $_SESSION['user_id'];
       move_uploaded_file($tmp_name,"$store_files/$new_file_name");
       if($obj->Normal_Query("INSERT INTO messages(message,msg_type,user_id) VALUES(?,?,?)",[$new_file_name,$get_extension,$user_id])){
            echo 'success'; 
       }
   }else{
       echo 'error';
   }
}else{
    echo 'error';
}
   }

}
?>