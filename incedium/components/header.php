<style>
/*Entregar imagem larga para browser com tela acima de 1024px*/
@media screen and (max-width:1024px){
  img.responsive {width: 100px;}
}

@media screen and (min-width:1025px){
  img.responsive{width: 300px;}
}

img.responsive{height: auto;}</style>		<!-- Header -->
		<header class="header">
			<!-- Topbar -->
		<!--	<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-12">
							
							<ul class="content">
								<li><i class="fa fa-phone"></i>123-456-789</li>
								<li><a href="mailto:info@yourdomain.com"><i class="fa fa-envelope-o"></i>contact@yourdomain.com</a></li>
								<li><i class="fa fa-clock-o"></i>Opening: 10:00am - 5:00pm</li>
							</ul>
							
						</div>
						<div class="col-lg-4 col-12">
							
							<ul class="social">
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus "></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							</ul>
						
						</div>
					</div>
				</div>
			</div> -->
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-4">
							<div class="logo">
								<a href="index.php"><img src="images/logo.png" class="responsive" alt="#"></a>
							</div>
							
						</div>
                        <div class="col-lg-2 col-md-2 col-sm-10"><div ><div class="mobile-menu"></div></div></div>
						<div class="col-lg-4 col-md-4 ">
                            <br>
                            <div><a><form action='search.php' method='POST'> <input class="form-control mr-sm-10" name='search' type="search" placeholder="Search Your Material Here" aria-label="Search"></form></a></div> </div>
                        
							<!-- Header Widget -->
                        
                        <div class="col-lg-3  col-md-3  col-sm-3">
							<div class="header-widget">
								<div class="single-widget">
									<i class="fa fa-envelope-o"></i>
									<h4>Send Message<a href="mailto:incediumcreations@gmail.com"><span>incediumcreations@gmail.com</span></a></h4>
								</div>
							</div>
							<!--/ End Header Widget -->
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
			<!-- Header Menu -->
			<div class="header-menu">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<nav class="navbar navbar-default">
								<div class="navbar-collapse">
									<!-- Main Menu -->
									<ul id="nav" class="nav menu navbar-nav">
										<li class="active"><a href="index.php">Home</a></li>
										<li><a href="#">ACADEMICS<i class="fa fa-angle-down"></i></a>
											<ul class="dropdown">
											<!--<li><a href="#">ENGINEERING<i class="fa fa-angle-right"></i></a>
                                            <ul class="dropdown submenu">  -->
														<li><a href="#">CSE<i class="fa fa-angle-right"></i></a>
                                                <ul class="dropdown submenu">
														<li><a href="teacher.php?branch=cse&year=2016">2016</a></li>
														<li><a href="teacher.php?branch=cse&year=2017">2017</a></li>
														<li><a href="teacher.php?branch=cse&year=2018">2018</a></li>
														<li><a href="teacher.php?branch=cse&year=2019">2019</a></li>
													</ul></li>
														<li><a href="#">ECE<i class="fa fa-angle-right"></i></a>
                                                <ul class="dropdown submenu">
														<li><a href="teacher.php?branch=ece&year=2016">2016</a></li>
														<li><a href="teacher.php?branch=ece&year=2017">2017</a></li>
														<li><a href="teacher.php?branch=ece&year=2018">2018</a></li>
														<li><a href="teacher.php?branch=ece&year=2019">2019</a></li>
													</ul></li>
														<li><a href="#">EEE<i class="fa fa-angle-right"></i></a>
                                                    <ul class="dropdown submenu">
														<li><a href="teacher.php?branch=eee&year=2016">2016</a></li>
														<li><a href="teacher.php?branch=eee&year=2017">2017</a></li>
														<li><a href="teacher.php?branch=eee&year=2018">2018</a></li>
														<li><a href="teacher.php?branch=eee&year=2019">2019</a></li>
													</ul></li>
                                                        <li><a href="#">ECM<i class="fa fa-angle-right"></i></a>
                                                    <ul class="dropdown submenu">
														<li><a href="teacher.php?branch=ecm&year=2016">2016</a></li>
														<li><a href="teacher.php?branch=ecm&year=2017">2017</a></li>
														<li><a href="teacher.php?branch=ecm&year=2018">2018</a></li>
														<li><a href="teacher.php?branch=ecm&year=2019">2019</a></li>
													</ul></li>
                                                        <li><a href="#">MECH<i class="fa fa-angle-right"></i></a>
                                                    <ul class="dropdown submenu">
														<li><a href="teacher.php?branch=me&year=2016">2016</a></li>
														<li><a href="teacher.php?branch=me&year=2017">2017</a></li>
														<li><a href="teacher.php?branch=me&year=2018">2018</a></li>
														<li><a href="teacher.php?branch=me&year=2019">2019</a></li>
													</ul></li>
                                                        <li><a href="#">CIVIL<i class="fa fa-angle-right"></i></a>
                                                    <ul class="dropdown submenu">
														<li><a href="teacher.php?branch=civil&year=2016">2016</a></li>
														<li><a href="teacher.php?branch=civil&year=2017">2017</a></li>
														<li><a href="teacher.php?branch=civil&year=2018">2018</a></li>
														<li><a href="teacher.php?branch=civil&year=2019">2019</a></li>
													</ul></li>
                                                        <li><a href="#">BIO-TECH<i class="fa fa-angle-right"></i></a>
                                                    <ul class="dropdown submenu">
														<li><a href="#">2016</a></li>
														<li><a href="#">2017</a></li>
														<li><a href="#">2018</a></li>
														<li><a href="#">2019</a></li>
													</ul></li>                                                 
													<!--</ul>    
                                                </li> -->
												<li><a href="#">NON-ENGINEERING<i class="fa fa-angle-right"></i></a>
													<ul class="dropdown submenu">
														<li><a href="#">BBA</a></li>
														<li><a href="#">BBA LLB</a></li>
														<li><a href="#">MBA</a></li>
														<li><a href="#">B.ARCH</a></li>
														<li><a href="#">FINE ARTS BSC</a></li>
														<li><a href="#">FINE ARTS BFA</a></li>
														<li><a href="#">B.PHARMACY</a></li>
														<li><a href="#">HOTEL MANAGEMENT</a></li>									
														<li><a href="#">B.COM</a></li>
														<li><a href="#">BA IAS</a></li>
														<li><a href="#">BCA</a></li>
													</ul>												
												</li>
												<li><a href="#">HIGHER EDUCATION<i class="fa fa-angle-right"></i></a>
													<ul class="dropdown submenu">
														<li><a href="#">GRE</a></li>
														<li><a href="#">TOFEL</a></li>
														<li><a href="#">GATE</a></li>
														<li><a href="#">IAS</a></li>
													</ul>	
												</li>
                                   
												<!--<li><a href="testimonials.html">Testimonials</a></li> -->
											</ul>
										</li>
										<li><a href="#">CLUBS<i class="fa fa-angle-down"></i></a> 
											<ul class="dropdown">
												<li><a href="https://www.kluniversity.in/pulse/index.html">PULSE</a></li>
												<li><a href="#">KLGLUG</a></li>
												<li><a href="#">BLOCKCHAIN CLUB</a></li>
                                                <li><a href="#">E-CLUB</a></li>
                                                <li><a href="#">CEA</a></li>
                                                <li><a href="#">AASTHA CLUB</a></li>
                                                <li><a href="#">AAROHANA CLUB</a></li>
                                                <li><a href="#">ABHINAYA CLUB</a></li>
                                                <li><a href="#">MAYA CLUB</a></li>
                                                <li><a href="#">NARTHANA CLUB</a></li>
                                                <li><a href="#">PRAKRUTHI CLUB</a></li>
                                                <li><a href="#">SAMSKRUTHI CLUB</a></li>
                                                <li><a href="#">YANTRANA CLUB</a></li>
                                                <li><a href="#">VACHAS CLUB</a></li>
                                                <li><a href="#">SWARA CLUB</a></li>
                                                <li><a href="#">AASTHA CLUB</a></li>
											</ul>
										</li>
										<li><a href="#">E-LEARNING<i class="fa fa-angle-down"></i></a> 
											<ul class="dropdown">
											<li><a href="#">CSE <i class="fa fa-angle-right"></i></a>
												<ul class="dropdown submenu">
														<li><a href="./elearning.php?branch=cse&year=2019">2019</a></li>
														<li><a href="./elearning.php?branch=cse&year=2018">2018</a></li>
														<li><a href="./elearning.php?branch=cse&year=2017">2017</a></li>
														<li><a href="./elearning.php?branch=cse&year=2016">2016</a></li>  
															</ul> 
											</li>
												<li><a href="#">ECE <i class="fa fa-angle-right"></i></a>
													<ul class="dropdown submenu">
														<li><a href="./elearning.php?branch=ece&year=2019">2019</a></li>
														<li><a href="./elearning.php?branch=ece&year=2018">2018</a></li>
														<li><a href="./elearning.php?branch=ece&year=2017">2017</a></li>
														<li><a href="./elearning.php?branch=ece&year=2016">2016</a></li>  
															</ul>   
												</li>
												<li><a href="#">EEE <i class="fa fa-angle-right"></i></a>												<ul class="dropdown submenu">
													<li><a href="./elearning.php?branch=eee&year=2019">2019</a></li>
													<li><a href="./elearning.php?branch=eee&year=2018">2018</a></li>
													<li><a href="./elearning.php?branch=eee&year=2017">2017</a></li>
													<li><a href="./elearning.php?branch=eee&year=2016">2016</a></li>  
														</ul>   
												</li>
												<li><a href="#">ECM <i class="fa fa-angle-right"></i></a>
													<ul class="dropdown submenu">
															<li><a href="./elearning.php?branch=ecm&year=2019">2019</a></li>
															<li><a href="./elearning.php?branch=ecm&year=2018">2018</a></li>
															<li><a href="./elearning.php?branch=ecm&year=2017">2017</a></li>
															<li><a href="./elearning.php?branch=ecm&year=2016">2016</a></li>  
																</ul> 
												</li>
												<li><a href="#">MECH <i class="fa fa-angle-right"></i></a>
													<ul class="dropdown submenu">
															<li><a href="./elearning.php?branch=me&year=2019">2019</a></li>
															<li><a href="./elearning.php?branch=me&year=2018">2018</a></li>
															<li><a href="./elearning.php?branch=me&year=2017">2017</a></li>
															<li><a href="./elearning.php?branch=me&year=2016">2016</a></li>  
																</ul> 
												</li>
												<li><a href="#">CIVIL <i class="fa fa-angle-right"></i></a>
													<ul class="dropdown submenu">
															<li><a href="./elearning.php?branch=civil&year=2019">2019</a></li>
															<li><a href="./elearning.php?branch=civil&year=2018">2018</a></li>
															<li><a href="./elearning.php?branch=civil&year=2017">2017</a></li>
															<li><a href="./elearning.php?branch=civil&year=2016">2016</a></li>  
																</ul> 
												</li>
												<li><a href="#">BIO-TECH <i class="fa fa-angle-right"></i></a>
													<ul class="dropdown submenu">
															<li><a href="#">2019</a></li>
															<li><a href="#">2018</a></li>
															<li><a href="#">2017</a></li>
															<li><a href="#">2016</a></li>  
																</ul> 
												</li> 
 
													<!--<li><a href="testimonials.html">Testimonials</a></li> -->
												</ul>
										</li>
										<li><a href="#">ABOUT US</a>
									
										</li>
                                        <li><a href="#">CONTACT US</a>
								
										</li>

										<li><a><form action='search.php' method='POST'> <input class="form-control mr-sm-2" name='search' type="search" placeholder="Search Your Material Here" aria-label="Search"></form></a></li>
										
									</ul>
									<!-- End Main Menu -->
									<!-- button -->


									<div class="button">
										<a href="../login.php" class="btn">
										<?php
if(isset($_SESSION['username'])){
	$user_name = $_SESSION['username'];
	echo $user_name;
}else{
 echo "Login || Sign Up";
}

?>

										
										</a>
									</div>
									<!--/ End Button -->
								</div> 
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Menu -->
		</header>
		<!-- End Header -->