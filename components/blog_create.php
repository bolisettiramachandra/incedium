<div class="form-section">
            <div class="form-grid">
         
        <div class="group">
        <h2 class="form-heading">CREATE YOUR BLOG</h2>
        </div><!--Close Group -->
                
        </div>


<?php
$user_id = $_SESSION['user_id'];
if(isset($_POST['submit'])){
    $blog_name = htmlspecialchars($_POST['blog_name']);
   // $image_link =htmlspecialchars($_POST['file']);
    $blog = htmlspecialchars($_POST['blog']);

    $title_status  = $blog_status = 1;

    if(empty($blog_name)){
        $title_error = 'Please Enter Title';
        $title_status ='';
    }

    if(empty($blog)){
        $blog_error = "Blog Unique name is required..!";
        $user_status = "";
    }else{
        if(strpos($blog, ' ')){
            $blog_error="Username must not contain any spaces";
            $blog_status = "";
        } else{
            if($obj->Normal_Query("SELECT blog FROM users WHERE blog = ?",array($blog))){
                if($obj->Count_Rows()==0){

                }else{
                    $blog_error="Blog Already Exists, Please Select a different Name";
                    $blog_status = "";
                }
            }
        }
    }


    if($title_status && $blog_status == 1){
        if($obj->Normal_Query("UPDATE users SET  blog_name=? ,blog =? WHERE id=?",[$blog_name,$blog,$user_id] )){
            $result = 'Awesome! Your Blog is Created Successfully..!';
            echo $result;
            header("location:blog_post.php");
        }else{

            echo $blog_name;
            echo $blog;
            echo $user_id;
            echo 'terminated';
        }

    }

}
?>
          <form action='' method='POST' enctype = "multipart/form-data">
           <div class="form-group"><label>Name Your Blog</label>
           <input type='text' name='blog_name' class='control' placeholder='Name Your Blog' />           
           </div>   <?php if(isset($title_error)):     ?> <?php echo $title_error; ?> <?php endif; ?>
           <br/>    
            
    
           <div class="form-group"><label>incedium.com/blog/</label>
           <input type='text' name='blog' class='control' placeholder='Unique name without spaces' />           
        </div>  <?php if(isset($blog_error)):     ?> <?php echo $blog_error; ?> <?php endif; ?>
           <br/> 
                    <div class="form-group"><button name='submit' value='submit' class="btn account-btn" type="submit">POST</button></div>
                </form>
                </div>