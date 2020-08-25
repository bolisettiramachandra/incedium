<?php include './init.php'; ?>
<?php include './security.php'; ?>
<?php 
$obj = new base_class;
$username = $_GET['username'];
$toid = '';
if($obj->Normal_Query("SELECT id from users WHERE username=?",[$username])){
    $row = $obj->Single_Result();
    $to_id = $row->id;
    $toid = "<input type='hidden' value='$to_id' class='toid' >";
    $toname = "<input type='hidden' value='$username' class='toid' >";
}else{
    echo 'There was an error';
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HOME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include './components/css.php' ?>
    <link rel="stylesheet" href="./assets/css/private-chat.css">
    <?php include './components/js.php'; ?>
    <style type="text/css">
        body{font-family:vardana; }
        #search{ width:270px; padding:10px; display:block; border-radius:3px; border:3px solid silver; margin:0 auto; }
        div#back_result{ padding: 10px; width:270px; margin: 0 auto; border:1px solid silver;  display:none   }
        #pic{vertical-align:middle; } #user{margin: 3px;}
    </style>

    <script>
    
    $(document).ready(function(){
        $('#search').keyup(function(){
            var username = $(this).val();
            $.post('get_users.php', {username:username}, function(data){
                $('div#back_result').css({'display':'block'});
                $('div#back_result').html(data);
            });
        });
    });

    </script>

</head>
<body>
<?php include './components/nav.php'; ?>

<div class="chat-container">
<?php include './components/onlineusers.php'; ?>
<section id="right-area">
    <div class="messages"></div> 
    <?php include './components/chat-form.php'; ?>     
        <div class="emoji">
        <?php include './components/emoji.php'; ?>
        </div>
    </section><!-- Close of right-area -->
</div>
   <?php
   if(isset($toid)){
       echo $toid;
       echo $toname;
   }
   ?> 
  <?php include './components/js_personal.php'; ?>
</body>
</html>