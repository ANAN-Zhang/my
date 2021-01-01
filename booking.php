<!DOCTYPE html>
<html lang="en">
<head>
<title>Book Your Shoot</title>
	
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
	
	<link rel="stylesheet" href="css/jquery-ui.css" />

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
							<a class="dropdown-item active" href="booking.php">Booking</a>
							<a class="dropdown-item" href="contact.php">Contact</a>
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

<!-- booking form -->
<section class="booking py-5">
	<div class="container py-md-1">
		<h1 class="heading text-capitalize mb-lg-5 mb-4"> <i class="fas mr-2 fa-camera-retro"></i>Get started</h1>
        <hr>
		<div class="book-agileinfo-form">
			<h4>It is our pleasure to be of service to you!</h4>
            <p><i>Hi! In order to get the best service, please enter your information and your requirement for your family portrait photography or your own portrait photography. We can  capture your families either in our studio or on other locations.</i></p>
            
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
						<input type="text" name="Address" placeholder="Enter Your Address" required="">
					</div>
					
					<div class="col-md-6 agileits-btm-spc form-text1">
						<input type="email" name="email" placeholder="Enter Your Email" required="">
					</div>
				</div>
				<div class="clear"></div>
				<div class="row main-agile-sectns">
					<div class="col-md-6 agileits-btm-spc form-text1">
						<input id="datepicker" name="Text" type="text" placeholder="Select Event Date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
							required="">
					</div>							
					<div class="col-md-6 form-text2 agileits-btm-spc">
						<select id="days" onchange="change_country(this.value)" class="frm-field required sect" required="">
							<option value="">Select No. Of Days for Shoot</option>
							<option value="">1 day</option>
							<option value="">2 days</option>
							<option value="">3 days</option>         
							<option value="">4 days</option>
							<option value="">5 days</option>
							<option value="">Above 5 days</option>
						</select>
					</div>
				</div>
                <div class="clear"></div>
                <div class="row main-agile-sectns">
                <div class="col-md-6 form-text2 agileits-btm-spc">
						<select id="days" onchange="change_country(this.value)" class="frm-field required sect" required="">
							<option value="">Select No. Of People</option>
							<option value="">1</option>
							<option value="">2</option>
							<option value="">3</option>         
							<option value="">4</option>
							<option value="">5</option>
							<option value="">Above 5</option>
						</select>
					</div>
              
                </div>
                <div class="main-agile-sectns ">
					<div class="agileits-btm-spc form-text2 p-0">
						<textarea placeholder="Please Brief Your Requirement Here"></textarea>
					</div>
				</div>
				<input type="submit" value="Book Your Shoot">
			</form>
		</div>

	</div>
</section>
<!-- //booking form -->



<!-- footer -->
    
<?php
require('includes/footer.php')
?> 
    
<!-- //footer -->

	<!-- js -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->	
	
	<!-- Calendar -->
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->

	

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