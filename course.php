<?php include './init.php'; ?>
<?php 
$obj = new base_class;
$course_id = $_GET['id'];
if($obj->Normal_Query("SELECT * FROM online_courses WHERE course_id = ?",[$course_id])){

    $course_result = $obj->fetch_all();

foreach($course_result as $informations):
    $course_id = $informations->course_id;
    $course_title = ucwords($informations->course_title);
    
endforeach;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $course_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include './components/css.php' ?>
    <link rel="stylesheet" href="./assets/css/alert-style.css">
</head>
<body>
<?php include './components/nav.php'; ?>

<div class="chat-container">
<?php include './components/sidebar.php'; ?>
    <section id="right-area">

    <?php include './components/course_details.php'; ?>
       

    </section><!-- Close of right-area -->


  <section id="day-area">
    <?php include './components/day_area.php'; ?>

    </section><!-- close of day-area -->

</div>
<?php include './components/js.php'; ?>
</body>

</html>
