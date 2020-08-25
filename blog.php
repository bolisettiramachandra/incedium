<?php include './init.php'; ?>
<?php include './security.php'; ?>
<?php 
$obj = new base_class;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="description" content="incedium">
    <meta name="keywords" content="klu,klef,study materials,incedium,incedium.com,previous papers,notes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./assets/css/profile.css">
    <link rel="stylesheet" href="./assets/css/alert-style.css">
    <title>HOME</title>
    <script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include './components/css.php' ?>
</head>
<body>
<?php include './components/nav.php'; ?>

<div class="chat-container">
<?php include './components/sidebar.php'; ?>
    <section id="right-area">

    <?php include './components/blog.php'; ?>
       

    </section><!-- Close of right-area -->




</div>
<?php include './components/js.php'; ?>
</body>

</html>
