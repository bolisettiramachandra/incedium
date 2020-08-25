            <?php 
            
            $_SESSION['authority'] = 'admin';
            
            if($_SESSION['authority']!='user'){
                if($_SESSION['authority']=='admin'){
                    
                    echo '<li><a href="./admin.php">ADMIN PANEL<span class="cool-hover"></span></a></li>';
                }else{
                echo 'something';
                }
                /* else{
                        echo '<li><a href="./adminpanel/adminpost.php">'.ucfirst($_SESSION['authority']).'<span class="cool-hover"></span></a></li>';
                } */

           
            }else{
                echo "not admin";
            }
            
            if(isset($_SESSION['authority'])){
                echo 'admin';
            }else{
                echo 'notset';
            }
            
            
          
            
            echo $_SESSION['authority'];
            ?>