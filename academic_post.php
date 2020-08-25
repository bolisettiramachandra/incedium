<?php include './init.php'; ?>
<?php 
$obj = new base_class;
$academic_id = $_GET['id'];
if($obj->Normal_Query("SELECT * FROM academics WHERE id = ?",[$academic_id])){

    $academic_result = $obj->fetch_all();

foreach($academic_result as $informations):
    $academic_id = $informations->id;
    $academic_title = ucwords($informations->title);
    
endforeach;

}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $academic_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include './components/css.php' ?>
    <link rel="stylesheet" href="./assets/css/alert-style.css">
</head>
<body>
<?php include './components/nav.php'; ?>

<div class="chat-container">
    
<?php if(isset($_SESSION['user_name'])){
include './components/sidebar.php';
}else{
 include './components/sidebar_tmp.php';   
} ?>
    <section id="right-area">

    <?php include './components/academic_post.php'; ?>
       

    </section><!-- Close of right-area -->


  <section id="day-area">
    <?php include './components/day_area.php'; ?>

    </section><!-- close of day-area -->

</div>
<?php include './components/js.php'; ?>
</body>

</html>
