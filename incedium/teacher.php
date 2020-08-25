<?php include '../init.php'; ?>
<?php 
$obj = new base_class;
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from themelamp.com/html/learnedu/teacher.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 May 2019 01:06:17 GMT -->
<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="SITE KEYWORDS HERE" />
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Title -->
		<title>Incedium </title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="images/favicon.png">
		<!-- Web Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Fancy Box CSS -->
        <link rel="stylesheet" href="css/jquery.fancybox.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
		<!-- Slick Nav CSS -->
        <link rel="stylesheet" href="css/slicknav.min.css">
        <!-- Magnific Popup -->
		<link rel="stylesheet" href="css/magnific-popup.css">
		
		<!-- Learedu Stylesheet -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
		
		<!-- Learedu Color -->
		<link rel="stylesheet" href="css/color/color1.css">
		<!--<link rel="stylesheet" href="css/color/color2.css">-->
		<!--<link rel="stylesheet" href="css/color/color3.css">-->
		<!--<link rel="stylesheet" href="css/color/color4.css">-->
		<!--<link rel="stylesheet" href="css/color/color5.css">-->
		<!--<link rel="stylesheet" href="css/color/color6.css">-->
		<!--<link rel="stylesheet" href="css/color/color7.css">-->
		<!--<link rel="stylesheet" href="css/color/color8.css">-->
		<link rel="stylesheet" href="#" id="colors">	
    </head>
    <body>
	
		<!-- Book Preloader -->
        <div class="book_preload">
            <div class="book">
                <div class="book__page"></div>
                <div class="book__page"></div>
                <div class="book__page"></div>
            </div>
        </div>
		<!--/ End Book Preloader -->
	
		<!-- Mp Color -->

		<!--/ End Mp Color -->
	        
		<!-- Header -->
		<?php include "./components/header.php"; ?>
		<!-- End Header -->

		<section class="events section">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12">
								<!-- Single Event -->
									
<?php
$branch = $_GET['branch'];
$se=1;
    if(isset($_GET['year'])){
        $year = $_GET['year'];
        
        if(!isset($_GET['subject'])){
                    if($obj->Normal_Query("SELECT DISTINCT subject FROM academics WHERE sem=$se AND  branch = ? AND year= ?",[$branch,$year])){

    $subject_result = $obj->fetch_all();
$c=0;
$d=3;
$e=0;
$f=0;        
echo '<table>';
    echo '<tr>';
foreach($subject_result as $informations):
    $subject = $informations->subject;
        $c=$c+1;
        $e=$c%$d;
    if($subject!='' AND $f==$e ){
        
    echo    "
    <div class='single-event'>
    <div class='head overlay'>
    </div>
    <div class='event-content'>        
        <div class='button'>
            <center><a href='searchcourses.php?course={$subject}' class='btn'>$subject </a></center>
        </div>
    </div>
</div>
    ";
    }

echo '</tr>';
    endforeach;
}
 echo '</table>';
}     
    }
?>								<!--/ End Single Event -->
							</div>
                        <div class="col-lg-4 col-md-6 col-12">
								<!-- Single Event -->
									
<?php
$branch = $_GET['branch'];
$se=1;
    if(isset($_GET['year'])){
        $year = $_GET['year'];
        
        if(!isset($_GET['subject'])){
                    if($obj->Normal_Query("SELECT DISTINCT subject,sem FROM academics WHERE sem=$se AND branch = ? AND year= ?",[$branch,$year])){

    $subject_result = $obj->fetch_all();
$c=0;
$d=3;
$e=0;
$f=1;        
echo '<table>';
    echo '<tr>';
foreach($subject_result as $informations):
    $subject = $informations->subject;
        $c=$c+1;
        $e=$c%$d;
    if($subject!='' AND $f==$e ){
        
    echo    "
    <div class='single-event'>
    <div class='head overlay'>
    </div>
    <div class='event-content'>        
        <div class='button'>
            <center><a href='searchcourses.php?course={$subject}' class='btn'>$subject </a></center>
        </div>
    </div>
</div>
    ";
    }

echo '</tr>';
    endforeach;
}
 echo '</table>';
}     
    }
?>								<!--/ End Single Event -->
							</div>
                        <div class="col-lg-4 col-md-6 col-12">
								<!-- Single Event -->
									
<?php
$branch = $_GET['branch'];
$se=1;
    if(isset($_GET['year'])){
        $year = $_GET['year'];
        
        if(!isset($_GET['subject'])){
                    if($obj->Normal_Query("SELECT DISTINCT subject FROM academics WHERE sem=$se AND  branch = ? AND year= ?",[$branch,$year])){

    $subject_result = $obj->fetch_all();
$c=0;
$d=3;
$e=0;
$f=2;        
echo '<table>';
    echo '<tr>';
foreach($subject_result as $informations):
    $subject = $informations->subject;
        $c=$c+1;
        $e=$c%$d;
    if($subject!='' AND $f==$e ){
        
    echo    "
    <div class='single-event'>
    <div class='head overlay'>
    </div>
    <div class='event-content'>        
        <div class='button'>
           <center> <a href='searchcourses.php?course={$subject}' class='btn'>$subject</a></center>
        </div>
    </div>
</div>
    ";
    }

echo '</tr>';
    endforeach;
}
 echo '</table>';
}     
    }
?>								<!--/ End Single Event -->
							</div>
						</div>
					</div>
        </section>
			

				

		<!--/ End Team -->
		
		<!-- Footer -->
		<?php include "./components/footer.php"; ?>
		<!--/ End Footer -->
		
		<!-- Jquery JS-->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate.min.js"></script>
		<!-- Popper JS-->
        <script src="js/popper.min.js"></script>
		<!-- Bootstrap JS-->
        <script src="js/bootstrap.min.js"></script>
		<!-- Colors JS-->
        <script src="js/colors.js"></script>
		<!-- Jquery Steller JS -->
		<script src="js/jquery.stellar.min.js"></script>
		<!-- Particle JS -->
		<script src="js/particles.min.js"></script>
		<!-- Fancy Box JS-->
		<script src="js/facnybox.min.js"></script>
		<!-- Magnific Popup JS-->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Masonry JS-->
		<script src="js/masonry.pkgd.min.js"></script>
		<!-- Circle Progress JS -->
		<script src="js/circle-progress.min.js"></script>
		<!-- Owl Carousel JS-->
        <script src="js/owl.carousel.min.js"></script>
		<!-- Waypoints JS-->
        <script src="js/waypoints.min.js"></script>
		<!-- Slick Nav JS-->
        <script src="js/slicknav.min.js"></script>
		<!-- Counter Up JS -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- Easing JS-->
        <script src="js/easing.min.js"></script>
		<!-- Wow Min JS-->
		<script src="js/wow.min.js"></script>
		<!-- Scroll Up JS-->
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- Google Maps JS -->
		<script src="http://maps.google.com/maps/api/js?key=AIzaSyC0RqLa90WDfoJedoE3Z_Gy7a7o8PCL2jw"></script>
        <script src="js/gmaps.min.js"></script>
		<!-- Main JS-->
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from themelamp.com/html/learnedu/teacher.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 May 2019 01:06:28 GMT -->
</html>