<div class="form-section">
            <div class="form-grid">
         
        <div class="group">
        <h2 class="form-heading">CLUBS</h2>
        </div><!--Close Group -->

        

            
            </div><!-- Close of Form- Grid-->

        </div><!--Close of For Grid -->


<div class="cards">




<?php
  if($obj->Normal_Query("SELECT * FROM clubs")){
        $club_result = $obj->fetch_all();
            foreach($club_result as $informations):
              $club_id = $informations->id;  
              $club_name = $informations->club_name;
              $club_image = $informations->logo;    
              if($club_image == ''){
                  $club_image='./assets/default.png';
              }

              
              echo '
              <a href="./club.php?id='.$club_id.'" >  
                  <div class="dash-card">
                      <img src="'.$club_image.'" alt="Avatar" style="width:100%">
                      <div class="dash-container">
                          <h4><b>'.$club_name.'</b></h4> 
                      </div><!-- close of dash-container -->
                  </div><!-- close of dash-card -->
              </a>
          ';
            
            endforeach;    

    }
                                               
?>
</div><!-- close of cards -->
       
        