<?php include './init.php'; ?>

<?php 
$obj = new base_class;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SGPA CALCULATOR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include './components/css.php' ?>
    <link rel="stylesheet" href="./assets/css/academics.css">
</head>
<body>
<?php include './components/nav.php'; ?>



<div class="chat-container">
<?php 

if(isset($_SESSION['user_name'])){
include './components/sidebar.php';
}else{
 include './components/sidebar_tmp.php';   
}

?>
    <section id="right-area">

    <?php include './components/sgpaece3.php'; ?>
       

    </section><!-- Close of right-area -->


</div>
<?php include './components/js.php'; ?>
</body>

</html>
