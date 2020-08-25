<?php include './init.php'; ?>
<?php include './security.php'; ?>
<?php 
$obj = new base_class;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HOME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include './components/css.php' ?>
    <link rel="stylesheet" href="./assets/css/academics.css">
</head>
<body>
<?php include './components/nav.php'; ?>

<div class="chat-container">
<?php include './components/sidebar.php'; ?>
    <section id="right-area">

    <?php include './components/academics_branch.php'; ?>
       

    </section><!-- Close of right-area -->
    <section id="day-area">
    <?php include './components/day_area.php'; ?>

    </section><!-- close of day-area -->

</div>
<?php include './components/js.php'; ?>
</body>

</html>