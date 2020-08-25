<?php include '../init.php'; ?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from themelamp.com/html/learnedu/course-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 May 2019 01:06:38 GMT -->
<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="SITE KEYWORDS HERE" />
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Title -->
		<title>LearnEdu &minus; Education & Courses HTML5 Template</title>
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
		
		<!-- Start Breadcrumbs -->
		<section class="breadcrumbs overlay">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2>Course Pages</h2>
						<ul class="bread-list">
							<li><a href="index.html">Home<i class="fa fa-angle-right"></i></a></li>
							<li class="active"><a href="course-single.html">Course Single</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
		
		<!-- Courses -->
		
		

		<!-- Courses -->
		<section class="courses section-bg section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Related <span>Courses</span> You Are Searching For!!</h2>
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="course-slider">

<?php 
$obj = new base_class;


if(isset($_POST['search']))
{
	$result=$_POST['search'];



if($obj->Normal_Query("SELECT * from academics where title LIKE '%$result%'")){

    $academic_result = $obj->fetch_all();


foreach($academic_result as $informations):
    $id = $informations->id;
    $academic_title = ucwords($informations->title);
    $academic_title = implode(' ', array_slice(explode(' ', $academic_title), 0, 10));
    $academic_message = $obj->security($informations->body);
    $academic_message = implode(' ', array_slice(explode(' ', $academic_message), 0, 10));
	$academic_image = $informations->image;
	

    
    if($academic_title!=''){
        
	echo"<div class='single-course'>
    <div class='course-head overlay'>
		<img src='../adminpanel/assets/img/alerts/$academic_image' alt='#' width='400' height='150'>
		
		<a href='course-single.php?id=$id' class='btn'><i class='fa fa-link'></i></a>
		
	</div>
	
    <div class='single-content'>
        <h4><a href='course-single.php?id=$id'><span></span>$academic_title </a></h4>
        <p>$academic_message</p>
    </div>
</div>";

    }
    endforeach;
  }
}
					?>



							
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

<!-- Mirrored from themelamp.com/html/learnedu/course-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 May 2019 01:06:39 GMT -->
</html>