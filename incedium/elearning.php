<?php include '../init.php'; ?>
<?php 
$obj = new base_class;
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="SITE KEYWORDS HERE" />
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Title -->
		<title>Incedium &minus; E-Learning</title>
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
	
	
	<?php include "./components/header.php"; ?>
				
		<!-- Start Breadcrumbs -->
		<section class="breadcrumbs overlay">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2>E-LEARNING</h2>
						<ul class="bread-list">
							<li><a href="index.html">Home<i class="fa fa-angle-right"></i></a></li>
							<li class="active"><a href="courses.html">E-Learning</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
		
		
		<!-- Courses -->
		<section class="courses archives section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<!-- <h2>Showing Subjects for <span></span></h2>
							<p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis. In pellentesque viverra purus. Sed risus est, molestie nec hendrerit hendreri </p> -->
						</div>
					</div>
				</div>
				<div class="row">

					
				<?php

 if(isset($_GET['year']) && isset($_GET['branch']) && isset($_GET['subject'])){
	$branch = $_GET['branch'];
	$year = $_GET['year'];
	$subject = $_GET['subject'];

	if($obj->Normal_Query("SELECT DISTINCT elearning.topic_name FROM elearning 
	WHERE  elearning.branch= ? AND elearning.batch= ? AND elearning.subject=?
	ORDER BY elearning.id DESC",[$branch,$year,$subject])){ 
		$academic_result = $obj->fetch_all();
		
		foreach($academic_result as $informations):

		$topic = $informations->topic_name;
		
		
echo "<div class='col-lg-4 col-md-6 col-12'>
		<div class='single-course'>
		<div class='single-content'>
		<h4><a href='./elearning_course.php?branch=$branch&year=$year&subject=$subject&topic=$topic'>$topic</a></h4>
		</div>
		</div>
		</div>";
		
		endforeach;
		}else{
			echo "not found";
		}
}else if(isset($_GET['branch']) && isset($_GET['year'])){
					$branch = $_GET['branch'];
					$year = $_GET['year'];
					if($obj->Normal_Query("SELECT DISTINCT elearning.subject FROM elearning 
					WHERE  elearning.branch= ? AND elearning.batch= ? 
					ORDER BY elearning.id DESC",[$branch,$year])){ 
						$academic_result = $obj->fetch_all();
						
						foreach($academic_result as $informations):

						$academic_subject = $informations->subject;
						
						
				echo "<div class='col-lg-4 col-md-6 col-12'>
						<div class='single-course'>
						<div class='single-content'>
						<h4><a href='./elearning.php?branch=$branch&year=$year&subject={$academic_subject}'>$academic_subject</a></h4>
						</div>
						</div>
						</div>";
						
						endforeach;
						}else{
							echo "not found";
						}						
				}
				

?>
				</div>
				<div class="row">
					<div class="col-12">
						<!-- Start Pagination -->
						<div class="pagination-main">
							<ul class="pagination">
								<li class="prev"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
								<li><a href="#">1</a></li>
								<li class="active"><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
							</ul>
						</div>
						<!--/ End Pagination -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Courses -->	
		
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

<!-- Mirrored from themelamp.com/html/learnedu/courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 May 2019 01:06:38 GMT -->
</html>