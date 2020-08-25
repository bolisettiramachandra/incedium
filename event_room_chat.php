<?php include './init.php'; ?>
<?php include './security.php'; ?>
<?php
$obj = new base_class;

$id = $_GET['id'];

    $toid = "<input type='hidden' value='$id' class='toid' >";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HOME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include './components/css.php'; ?>
</head>
<body>


<?php include './components/nav.php'; ?>
<div class="chat-container">
<?php include './components/sidebar.php'; ?>      
    <section id="right-area">
    <div class="messages"></div> 
    <?php include './components/chat-form.php'; ?>     
        <div class="emoji">
        <?php include './components/emoji.php'; ?>
        </div>
    </section><!-- Close of right-area -->
</div>
   <?php
   if(isset($id)){
       echo $toid;
   }
   ?> 
  <?php include './components/js_group.php'; ?>
</body>
</html>
