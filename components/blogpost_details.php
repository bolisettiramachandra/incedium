<?php

$blogpost_id = $_GET['id'];

if($obj->Normal_Query("SELECT * FROM blog_posts WHERE blogpost_id = ?",[$blogpost_id])){

    $post_result = $obj->fetch_all();

foreach($post_result as $informations):
    $post_id = $informations->blogpost_id;
    $post_title = htmlspecialchars_decode(ucwords($informations->post_title));
    $post_message = htmlspecialchars_decode($informations->post_body);
    $post_image = $informations->post_image;
    
    echo    "<div class='details-div'>
    <h2 class='heading'>$post_title</h2>
            <img class='details-img' src='./assets/img/blog/$post_image' style='width:40%'/> 
            <h3 class='details-message'>$post_message</h3>
            </div>";
endforeach;

}



?>