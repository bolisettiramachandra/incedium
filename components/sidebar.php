<?php
if(isset($_SESSION['image_name'])){
$image_name = $_SESSION['image_name'];
}else{

}
if(isset($_SESSION['username'])){
    $user_name = $_SESSION['username'];
}

?>


<section id="sidebar">
        <ul class="left-ul">
            <li><a href="change_image.php"><span class="profile-img-span">
                
            <?php
            if($image_name ==''){
                echo "<img class='profile-img' src='http://tinygraphs.com/squares/$user_name' >";
            }else{
                echo "<img class='profile-img' src='./assets/img/$image_name' alt='$user_name'>";
            }

?>
           </span></a>
        
        
        </li>
            <li><a href="#"><?php echo ucfirst($_SESSION['username']) ?><span class="cool-hover"></span></a></li>
            <li><a href="./index.php">DASHBOARD <span class="cool-hover"></span></a></li>
            <li><a href="./alerts.php">ALERTS<span class="cool-hover"></span></a></li>
            <li><a href="./chat_room.php">CHAT ROOM<span class="cool-hover"></span></a></li>
            <li><a href="./academics.php">Study Material<span class="cool-hover"></span></a></li>
            <li><a href="./post_choose.php">SHARE YOUR POST<span class="cool-hover"></span></a></li>
            <li><a href="./settings.php">SETTINGS<span class="cool-hover"></span></a></li>
          <!--  <li><a href="./change_username.php">CHANGE USERNAME <span class="cool-hover"></span></a></li>
            <li><a href="./change_password.php">CHANGE PASSWORD <span class="cool-hover"></span></a></li>
            <li><a href="./change_image.php">CHANGE PHOTO <span class="cool-hover"></span></a></li>
            <li><a href="#">ONLINE USERS <span class="cool-hover"></span></a></li>-->
            <?php if($_SESSION['authority']!='user'){
                if($_SESSION['authority']=='admin'){
                    
                    echo '<li><a href="./admin.php">ADMIN PANEL<span class="cool-hover"></span></a></li>';
                }/* else{
                        echo '<li><a href="./adminpanel/adminpost.php">'.ucfirst($_SESSION['authority']).'<span class="cool-hover"></span></a></li>';
                } */

           
            }
            

            
            
            ?>
            <li><a href="logout.php">Log Out<span class="cool-hover"></span></a></li>                  
        </ul>
    </section><!-- close of side bar-->