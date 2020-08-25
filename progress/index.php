<?php include "../init.php"; 

?>

<?php
if(isset($_SESSION['mail_sent'])){
    $message = $_SESSION['mail_sent'];
    $text = "Didn't Found mail?, also please check in your spam folder";
    unset($_SESSION['mail_sent']);
}


if(isset($_SESSION['account_success'])){
     $message = $_SESSION['account_success'];
     unset($_SESSION['account_success']);
}

if(isset($_SESSION['password_updated'])){
     $message = $_SESSION['password_updated'];
     unset($_SESSION['password_updated']);
}


?>




<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="UTF-8">
<title>Incedium</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72.png">
<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57.png">
<link rel="shortcut icon" href="images/ico/favicon.png">
<!--[if IE]><![endif]-->
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/countdown.js"></script>
<script src="js/owlcarousel.js"></script>
<script src="js/uikit.scrollspy.js"></script>
<script src="js/scripts.js"></script>
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body id="backtotop">

<div class="fullwidth clearfix">
	<div id="topcontainer" class="bodycontainer clearfix" data-uk-scrollspy="{cls:'uk-animation-fade', delay: 300, repeat: true}">
		
		<p><span class="fa fa-signal"></span></p>
		<h1><span>INCEDIUM</span><br /><?php echo $message; ?></h1>
		<p>Please Login to <a href='http://www.incedium.com/login.php'>Incedium</a></p>
		<p><?php echo $text; ?></p>
		
	</div>
</div>


<!--
<div class="arrow-separator arrow-white"></div>



<div class="arrow-separator arrow-theme"></div>

 <div class="fullwidth colour2 clearfix">
	<div id="maincont" class="bodycontainer clearfix" data-uk-scrollspy="{cls:'uk-animation-fade', delay: 300, repeat: true}">

		<p><strong>Lorem ipsum dolor</strong> sit amet, consectetur adipiscing elit. <a title="" href="#">Donec quis enim nulla</a>. Suspendisse posuere arcu ac eros iaculis egestas commodo risus tempus. Fusce placerat nulla nisi. Proin congue erat non orci adipiscing nec porttitor lacus egestas. <em>Donec venenatis</em>, risus et hendrerit ultrices, libero sem lacinia risus, ut convallis massa sapien nec libero. Suspendisse arcu orci, gravida nec aliquet ut, lacinia non nisl.</p>
        <h2>Sign up and we'll let you know when we launch</h2>
        <p>If you would like to receive <strong>news and special offers</strong> please send us your email address below:</p>
	 <div id="signupform" class="sb-search clearfix">
			<form method="post" id="contact" class="clearfix">
				<input class="sb-search-input" placeholder="Enter email ..." type="text" value="">
				<input class="sb-search-submit" value="" type="submit">
				<button class="formbutton" type="submit"><span class="fa fa-search"></span></button>
			</form>
		</div> 
	
	</div>
</div> 

<div class="arrow-separator arrow-themelight"></div>
-->
<div class="fullwidth colour3 clearfix">
	<div id="quotecont" class="bodycontainer clearfix" data-uk-scrollspy="{cls:'uk-animation-fade', delay: 300, repeat: true}">

        <div id="commentslider" class="owl-carousel">
            <div class="item">
                <p>"Spread love everywhere you go. Let no one ever come to you without leaving happier."</p>
            	<p class="author">- Mother Teresa</p>
            </div>
            <div class="item">
                <p>"<strong>Problems</strong> are not stop signs, they are <em> guidelines</em>."</p>
            	<p class="author">- Robert H. Schuller</p>
            </div>
            <div class="item">
                <p>"<strong>You don't choose your family. </strong> They are God's gift to you, <em>as you are to them</em>."</p>
            	<p class="author">- Desmond Tutu</p>
            </div>
        </div>
	
	</div>
</div>

<div class="arrow-separator arrow-grey"></div>

<div class="fullwidth clearfix">
	<div id="footercont" class="bodycontainer clearfix" data-uk-scrollspy="{cls:'uk-animation-fade', delay: 300, repeat: true}">

		<p class="backtotop"><a title="" href="#backtotop"><span class="fa fa-angle-double-up"></span></a></p>
		<div id="socialmedia" class="clearfix">
			<ul>
				<li><a title="" href="#" rel="external"><span class="fa fa-facebook"></span></a></li>
				<li><a title="" href="#" rel="external"><span class="fa fa-twitter"></span></a></li>
				<li><a title="" href="#" rel="external"><span class="fa fa-google-plus"></span></a></li>
				<li><a title="" href="#" rel="external"><span class="fa fa-linkedin"></span></a></li>
				<li><a title="" href="#" rel="external"><span class="fa fa-pinterest"></span></a></li>
			</ul>
		</div>
		<!-- <p>Free Responsive Website Template by <a title="download website templates" href="http://www.downloadwebsitetemplates.co.uk" rel="external">Download Website Templates</a> - Icons by <a title="" href="http://fortawesome.github.io/Font-Awesome/" rel="external">Font Awesome</a></p> -->
	</div>
</div>
   
</body>
</html>