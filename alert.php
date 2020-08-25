<?php include './init.php'; ?>
<?php 
$obj = new base_class;
$alert_id = $_GET['id'];
if($obj->Normal_Query("SELECT * FROM alerts WHERE alert_id = ?",[$alert_id])){

    $alert_result = $obj->fetch_all();

foreach($alert_result as $informations):
    $alert_id = $informations->alert_id;
    $alert_title = ucwords($informations->alert_title);
    
endforeach;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $alert_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include './components/css.php' ?>
    <link rel="stylesheet" href="./assets/css/alert-style.css">
</head>
<body>
<?php include './components/nav.php'; ?>

<div class="chat-container">
<?php include './components/sidebar.php'; ?>
    <section id="right-area">

    <?php include './components/alert_details.php'; ?>
       

    </section><!-- Close of right-area -->


  <section id="day-area">
    <?php include './components/day_area.php'; ?>

    </section><!-- close of day-area -->

</div>
<?php include './components/js.php'; ?>
</body>

</html>
