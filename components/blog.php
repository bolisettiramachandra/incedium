<?php
if(isset($_GET['blog'])){
$blog = $_GET['blog'];
  if($obj->Normal_Query("SELECT blog_posts.blogpost_id,blog_posts.user_id,blog_posts.post_title,blog_posts.post_image,blog_posts.post_body,blog_posts.hashtags,blog_posts.time,users.username FROM blog_posts INNER JOIN users ON blog_posts.user_id = users.id  WHERE users.blog= '$blog' ORDER BY blog_posts.blogpost_id DESC")){
    $blog_result = $obj->fetch_all();

foreach($blog_result as $informations):
    $blog_id = $informations->blogpost_id;
    $blog_title = ucwords($informations->post_title);
    $blog_title = htmlspecialchars_decode(implode(' ', array_slice(explode(' ', $blog_title), 0, 10)));
    $blog_message = $obj->security($informations->post_body);
    $blog_message = htmlspecialchars_decode(implode(' ', array_slice(explode(' ', $blog_message), 0, 10)));
    $blog_image = $informations->post_image;
    $blog_name = $informations->username;
    $blog_time  = $informations->time;
    
    echo    "<a class='alert-link' href = 'blog_posts.php?id={$blog_id}'><div class='alert-card'>
    <div class='alert-img-container'> 
    <img class='alert-img'  src='./assets/img/blog/$blog_image' alt='Avatar' style='width:100%'>
    </div>
      
      <div class='alert-container'>
        <p class = 'alert-title'>$blog_title </p> 
        <p class = 'alert-message'>$blog_message</p> 
        <p class='alert-name'>Posted by $blog_name on $blog_time</p>
      </div>
    </div> </a>";


    endforeach;
  
  }else{
echo 'sql error';
  }

}else{
  if($obj->Normal_Query("SELECT blog_posts.blogpost_id,blog_posts.user_id,blog_posts.post_title,blog_posts.post_image,blog_posts.post_body,blog_posts.hashtags,blog_posts.time,users.username FROM blog_posts INNER JOIN users ON blog_posts.user_id = users.id  ORDER BY blog_posts.blogpost_id DESC")){

    $blog_result = $obj->fetch_all();

foreach($blog_result as $informations):
    $blog_id = $informations->blogpost_id;
    $blog_title = ucwords($informations->post_title);
    $blog_title = htmlspecialchars_decode(implode(' ', array_slice(explode(' ', $blog_title), 0, 10)));
    $blog_message = $obj->security($informations->post_body);
    $blog_message = htmlspecialchars_decode(implode(' ', array_slice(explode(' ', $blog_message), 0, 10)));
    $blog_image = $informations->post_image;
    $blog_name = $informations->username;
    $blog_time  = $informations->time;
    
    echo    "<a class='alert-link' href = 'blog_posts.php?id={$blog_id}'><div class='alert-card'>
    <div class='alert-img-container'> 
    <img class='alert-img'  src='./assets/img/blog/$blog_image' alt='Avatar' style='width:100%'>
    </div>
      
      <div class='alert-container'>
        <p class = 'alert-title'>$blog_title </p> 
        <p class = 'alert-message'>$blog_message</p> 
        <p class='alert-name'>Posted by $blog_name on $blog_time</p>
      </div>
    </div> </a>";


    endforeach;

}else{
}
}
?>


