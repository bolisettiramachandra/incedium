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
						<h2><?php echo $_GET['subject']; ?></h2>
						<ul class="bread-list">
							<li><a href="index.html">Home<i class="fa fa-angle-right"></i></a></li>
							<li class="active"><a href="course-single-video.html">E-Learning</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
		
		<!-- Courses -->
		<section class="courses single section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="single-main">
							<div class="row">
								<div class="col-lg-8 col-12">
									<!-- Single Course -->
									<?php
				if(isset($_GET['branch']) && isset($_GET['year']) && isset($_GET['subject']) && isset($_GET['topic'])){
					$branch = $_GET['branch'];
					$year = $_GET['year'];
					$subject = $_GET['subject'];
					$topic = $_GET['topic'];
					if($obj->Normal_Query("SELECT * FROM  elearning  WHERE delete_post = 0 AND branch=? AND batch=? AND subject=? AND topic_name=? ORDER BY id",[$branch,$year,$subject,$topic])){ 
						$academic_result = $obj->fetch_all();
						
						foreach($academic_result as $informations):
                            $id = $informations->id;
                            $title = ucwords($informations->topic_name);
                            $description = $informations->description;
                            $video_link = $informations->video;
							$image = $informations->image;
							$lecturer_name = $informations->lecturer_name;
							$lecturer_image =$informations->lecturer_image;
						
						if($title!=''){
							echo  
						"<div class='single-course'>
                        <div class='course-head'>		
                            <div class='embed-responsive embed-responsive-16by9'>
								<iframe height='450' src='$video_link'></iframe>
                            </div>
                        </div>			
                    </div>";
						}
						
						
						
						
						endforeach;
						
						}
						
						
				}

?>

									<!--/ End Single Course -->
								</div>	
								<div class="col-lg-4 col-12">
									<!-- Course Features -->
									<div class="course-feature">
										<div class="feature-main">
											<h4>Course Features</h4>
											<!-- Single Feature -->
											<div class="single-feature">
												<i class="fa fa-files-o"></i>
												<span class="label">Lectures</span>
												<span class="value">8</span>
											</div>
											<!--/ End Single Feature -->
											<!-- Single Feature -->
											<div class="single-feature">
												<i class="fa fa-puzzle-piece"></i>
												<span class="label">Quizzes</span>
												<span class="value">1</span>
											</div>
											<!--/ End Single Feature -->
											<!-- Single Feature -->
											<div class="single-feature">
												<i class="fa fa-clock-o"></i>
												<span class="label">Duration</span>
												<span class="value">1 Year</span>
											</div>
											<!--/ End Single Feature -->
											<!-- Single Feature -->
											<div class="single-feature">
												<i class="fa fa-magic"></i>
												<span class="label">Skill Level</span>
												<span class="value">Beginner</span>
											</div>
											<!--/ End Single Feature -->
											<!-- Single Feature -->
											<div class="single-feature">
												<i class="fa fa-user"></i>
												<span class="label">Students</span>
												<span class="value">50</span>
											</div>
											<!--/ End Single Feature -->
											<!-- Single Feature -->
											<div class="single-feature">
												<i class="fa fa-check-square-o"></i>
												<span class="label">Certificate</span>
												<span class="value">Yes</span>
											</div>
											<!--/ End Single Feature -->
											<!-- Single Feature -->
											<div class="single-feature">
												<i class="fa fa-check-square-o"></i>
												<span class="label">Assessments</span>
												<span class="value">Yes</span>
											</div>
											<!--/ End Single Feature -->
										</div>
									</div>
									<!--/ End Course Features -->
								</div>	
							</div>	
							<div class="row">
								<div class="col-12">
									<!-- Course Meta -->
									<div class="course-meta">
										<!-- Course Info -->
										<div class="course-info">
											<div class="single-info author">
												<img src="<?php echo $lecturer_image; ?>" alt="#">
												<h4>Teacher:<a href="#"><span><?php echo $lecturer_name; ?></span></a></h4>
											</div>
											<div class="single-info category">
												<i class="fa fa-bolt"></i>
												<h4>Subject<a href="#"><span><?php echo $subject; ?></span></a></h4>
											</div>
											<!-- <div class="single-info s-enroll">
												<i class="fa fa-users"></i>
												<h4>Enrolled:<span>302 Student Enrolled</span></h4>
											</div>
											<div class="single-info rattings">
												<i class="fa fa-clock-o"></i>
												<h4>Course Time:<span>05 Years</span></h4>
											</div> -->
										</div>
										<!--/ End Course Info -->
										<!-- Course Price -->
										<!-- <div class="course-price">
											<p>$33.50</p>
											<a href="#" class="btn"><i class="fa fa-users"></i>Enroll Now</a>
											</div> -->
										<!--/ End Course Price -->
									</div>
									<!--/ End Course Meta -->
								</div>
								<div class="col-12">
									<div class="content">
										<h2><a href="#"><?php echo $title; ?></a></h2>
										<p><?php echo $description; ?></p>
									</div>
								</div>
								<div class="col-12">
									<div class="course-required">
										<h4>Course Requirement</h4>
										<ul>
											<li><span>02</span>World's Fast Online Courses.</li>
											<li><span>01</span>Over 34 lectures and 99M hours of content!</li>
											<li><span>03</span>Learn Web Programming at your home!</li>
											<li><span>04</span>Best Online tutorial platform</li>
											<li><span>05</span>With Available zero to hero course</li>
											<li><span>06</span>We have 300M+ Active Student.</li>
											<li><span>07</span>Improve your skill with learning our courses</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
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

<!-- Mirrored from themelamp.com/html/learnedu/course-single-video.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 May 2019 01:06:39 GMT -->
</html>