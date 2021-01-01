<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact Us</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
    
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	
	<!--web font-->
	<link href="http://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext" rel="stylesheet">
	<!--//web font-->

</head>

<body>

<!-- header -->
<header>
	<div class="container-fliud px-sm-5 px-3">
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="index.php">
				 Family <span>Portrait</span>
			</a>
			<button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto text-center">
					<li class="nav-item mr-lg-3">
						<a class="nav-link" href="index.php">Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item  mr-lg-3">
						<a class="nav-link" href="photographers.php">Photographers</a>
					</li>
					<li class="nav-item mr-lg-3">
						<a class="nav-link" href="gallery.php">Gallery</a>
					</li>
					<li class="nav-item dropdown mr-lg-3 active">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							Get started
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item " href="booking.php">Booking</a>
							<a class="dropdown-item active" href="contact.php">Contact</a>
						</div>
					</li>
					
				</ul>
				<div class="buttons mt-lg-0 mt-3">
					<a href="#"><i class="fab mr-3 fa-facebook-f"></i></a>
					<a href="#"><i class="fab mr-3 fa-twitter"></i></a>
					<a href="#"><i class="fab mr-3 fa-linkedin-in"></i></a>
				</div>
				
			</div>
		</nav>
	</div>
</header>
<!-- //header -->

<!-- banner -->
<section class="inner-banner">
	
</section>
<!-- //banner -->

<!-- contact form -->
<section class="contact booking py-5">
	<div class="container py-sm-1">
		<h1 class="heading text-capitalize mb-lg-5 mb-4"><i class="fas mr-2 fa-phone"></i>Contact Us</h1>
        <hr>
        <h4>Please contect us, if you want to know more.</h4>
		<form action="#" method="post">
			<div class="row main-agile-sectns">
				<div class="col-md-6 agileits-btm-spc form-text1">
					<input type="text" name="Name" placeholder="Enter Your Name" required="">
				</div>
				<div class="col-md-6 agileits-btm-spc form-text2">
					<input type="text" name="Phone no" placeholder="Enter Phone Number" required="">
				</div>
			</div>
			<div class="row main-agile-sectns">
				<div class="col-md-6 agileits-btm-spc form-text1">
					<input type="text" name="subject" placeholder="Enter the Subject" required="">
				</div>
				
				<div class="col-md-6 agileits-btm-spc form-text1">
					<input type="email" name="email" placeholder="Enter Your Email" required="">
				</div>
			</div>
			<div class="main-agile-sectns ">
				<div class="agileits-btm-spc form-text2 p-0">
					<textarea placeholder="What do you want to konw from us?"></textarea>
				</div>
			</div>
			<input type="submit" value="Send">
		</form>
	</div>
</section>
<!-- contact form -->
<section class="map">
	<div class="container">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96426.29616763402!2d-1.3479162807625924!3d50.91147076837977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48738957be152909%3A0xa78c5a6a4cda71f0!2z5L-u5ZK46aCT!5e0!3m2!1sen-UK!2suk!4v1585932148652!5m2!1en-UK!2suk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		<div class="location">
			<p> <i class="fas mr-1 fa-map-marker"></i> 1 Street, Southampton, UK </p>
		</div>
	</div>
</section>
<!-- footer -->
    
<?php
require('includes/footer.php')
?>
    
<!-- //footer -->

	<!-- js -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->	
	
	<!-- start-smoth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script>
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->

</body>
</html>

<!The framework source collected from cssmoban.com .(2017).http://demo.qfpffmp.cn/cssthemes5/cpts_1333_bzx/>