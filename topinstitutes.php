<?php include './init.php'; ?>
<?php include './security.php'; ?>
<?php 
$obj = new base_class;

if(isset($_GET['inst'])){
$flag = $_GET['inst'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="description" content="incedium">
    <meta name="keywords" content="klu,klef,study materials,incedium,incedium.com,previous papers,notes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./assets/css/profile.css">
    <title>HOME</title>
    <script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include './components/css.php' ?>
<style> .details-div{
padding-left : 20px;
} </style>

</head>
<body>
<?php include './components/nav.php'; ?>

<div class="chat-container">
<?php include './components/sidebar.php'; ?>
    <section id="right-area">
    <div class="form-section">
            <div class="form-grid">
            <h2 class="form-heading"><?php if(isset($flag)){echo 'RAMSON';}else{echo 'TOP INSTITUTES!';} ?></h2>       
        <div class="group">

        </div><!--Close Group -->
            
            </div><!-- Close of Form- Grid-->

        </div><!--Close of For Grid -->
<?php

if(isset($flag)){
    echo "<div class='details-div'>
            <img class='details-img' src='./assets/img/blog/ramson.jpg' style='width:25%'/> 
            <h3 class='details-message'>RAMSON TECHLABS INDIA, Founded in the year 2015 by group of people passionate about creating solutions to the real life Problems and the incentive of this organization is to help engineering Students to transform their technical ideas into reality by bridging the gap between the theoretical and practical conception. 

            We provide peerless platform in the services like Workshops, Hands on trainings, Innovative seminars, National Events, student project guidance through our emerging research labs in reputed institutions like IIT’s, Universities and many other Colleges in India. Through our well-structured Programs and other practical sessions we make students to understand the complicated concepts of robotics in a interesting way. 
            
            We achieved 100% student’s satisfaction by improving their skills and employability, which is the pillar of our SUCCESS.
            
            </h3>
            </div>";
}else{
    echo '<div class="cards">
    <a href="topinstitutes.php?inst=ramson">   <div class="dash-card">
<img src="./assets/img/blog/ramson.jpg" alt="Avatar" style="width:100%">
<div class="dash-container">
<h4><b>RAMSON TECHLABS</b></h4> 
</div><!-- close of dash-container -->
</div><!-- close of dash-card -->
</a>
</div>';
}


?>


    </section><!-- Close of right-area -->




</div>
<?php include './components/js.php'; ?>
</body>

</html>
