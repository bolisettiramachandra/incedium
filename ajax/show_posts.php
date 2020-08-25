<?php
include "../init.php";

$obj = new base_class;

if(isset($_GET['post'])){
    $user_id = $_SESSION['user_id'];
    if($obj->Normal_Query("SELECT * FROM `posts` INNER JOIN users ON posts.user_id = users.id ORDER BY posts.post_id DESC")){
        $posts_row = $obj->fetch_all();

        foreach($posts_row as $information_posts):
            $full_name = ucwords($information_posts->name);
            $user_image = $information_posts->image;

            $post = $information_posts->post;
            $post_type = $information_posts->post_type;
            $db_user_id = $information_posts->user_id;
            $post_time =  $information_posts->post_time;

           
                    if($post_type == "text"){

                           
                        echo '  <div class="user-post common-margin">


                       
                        <div class="post-data">
                        <h4><b>'.$full_name.' </b></h4>
                                <p>'.$post.'</p>
                
                        </div><!--close of user-post -->

                        
                
                    </div><!-- End of User post-->';
                    }
         

          
        endforeach;
        
    }
}

?>