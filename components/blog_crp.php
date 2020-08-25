<?php
$username = $_SESSION['username'];
?>
<?php
if($obj->Normal_Query("SELECT id from users WHERE username=?",[$username])){
    $row = $obj->Single_Result();
    $id = $row->id;
    if($obj->Normal_Query("SELECT blog_name from users WHERE username=?",[$username])){
        $row = $obj->Single_Result();
        $blog_name = $row->blog_name;
        if(empty($blog_name)){
  include './components/blog_create.php';
        }else{            
            include './components/blog_post.php';
        }

    }
}else{
    echo 'There was an error';
}

?>

