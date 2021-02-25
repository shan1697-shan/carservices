<?php
session_start();
error_reporting(E_ALL);
                    ini_set("display_errors",0 );
if( $_SESSION['log']==true)
{
	header('location:index2.php');
}
else{
	
}


?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Car Service</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Car Services"
	/>

	<style type="text/css">
		
		#a11 {
  width: 130px;


  padding: 8px 20px;
  margin: 8px 0;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
  border: 1px solid grey;
   background: black;
   opacity: 0.6;
   color: white;
}

/* When the input field gets focus, change its width to 100% */
#a11:focus {
  width: 50%;
}
	</style>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css1/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link href="css/JiSlider.css" rel="stylesheet">
	<!-- //banner-slider -->
	<link rel="stylesheet" href="css/smoothbox.css" type='text/css' media="all" />
	<!-- gallery lightbox -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	
</head>

<body>
	<!-- banner & header section -->
	<div class="main">
		<!-- header -->
		<header >
			<div class="container-fluid " >
				<div class="row header-w3ls-top pt-lg-5 pt-md-4 pt-3 px-lg-5 px-3">
					<div class="col-xl-7 col-md-6 col-sm-5 col-4 logo">
						<h1 >
							<a href="index.php">
								<span>C</span>ar
								<span>S</span>ervices

							</a>
								
						</h1>

					</div>
						<div class="col-xl-3 col-md-3 col-sm-3 col-3 logo "><h4 style="float: right;"><button style="opacity: 0.7;" >
							<a href="brand.php">
								<span>book</span>
								<span>Now</span>

							</a>
							</button>	
						</h4></div>
					<div class="col-xl-2 col-md-3 col-sm-4 col-5 menu-agile text-center">

						<a href="#menu" id="toggle">

							<span></span>
						</a>

						<div id="menu" class="menustyles">
							<ul class="list-unstyled">
								<li>
									<a href="index.php">Home</a>
								</li>
								
								<li>
									<a href="#services" class="scroll">Services</a>
								</li>
								<li>
									<a href="#process" class="scroll">process</a>
								</li>
								<li>
									<a href="log.php" >Login/Sign Up</a>
								</li>
								<li>
									<a href="#gallery" class="scroll">Gallery</a>
								</li>
								
								<li>
									<a href="#about" class="scroll">About</a>
								</li>
								
							</ul>

						</div>
						


					</div>
					
				</div>
					<div>
						<form method="post" action="search.php">
						<p align="center" style="font-size: 20px;color: tomato" > <input  id="a11" type="text" name="search" placeholder="Search..." > &nbsp<button type="submit" class="btn btn-success" style="height: 54px;margin: -1px;opacity: 0.8;">Search</button></p>
					</form>
					</div>
			</div>
		</header>
		<!-- //header -->
		<!-- banner -->
		<div class="banner-silder">
			<div id="JiSlider" class="jislider">
				<ul>
					<li>
						<div class="banner-top banner-top1">
							<div class="container">
								<div class="banner-info">
									<h3 class="name text-white text-uppercase text-center">
										<span class="name-part w3l-text1">your</span>
										<span class="name-part w3l-text2">car</span>
										<span class="name-part w3l-text3">is always in great hands
											<label>with</label> us</span>
									</h3>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-top banner-top2">
							<div class="container">
								<div class="banner-info">
									<h3 class="name text-white text-uppercase text-center">
										<span class="name-part w3l-text1">we</span>
										<span class="name-part w3l-text2">love</span>
										<span class="name-part w3l-text3">your
											<label>car</label> the same as you do</span>
									</h3>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-top banner-top3">
							<div class="container">
								<div class="banner-info">
									<h3 class="name text-white text-uppercase text-center">
										<span class="name-part w3l-text1">your</span>
										<span class="name-part w3l-text2">car</span>
										<span class="name-part w3l-text3">is
											<label>always</label> in great hands with us</span>
									</h3>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-top banner-top4">
							<div class="container">
								<div class="banner-info">
									<h3 class="name text-white text-uppercase text-center">
										<span class="name-part w3l-text1">we</span>
										<span class="name-part w3l-text2">love</span>
										<span class="name-part w3l-text3">your car the same as
											<label>you</label> do</span>
									</h3>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- //banner -->
	</div>
	<!-- banner & header section -->
	<!-- services -->
	<div class="services py-5" id="services">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize text-dark text-center pb-3 mb-sm-5 mb-4">our services
				<span></span>
			</h3>
			<div class="row">
				<div class="col-md-7">
					<a href="brand.php"><div class="img1 img-grid  d-flex align-items-end justify-content-center p-3">
						<div class="img_text_w3ls px-4">
							<h4>Denting/ Painting</h4>
							<span> </span>
							<p class="text-white">Fix all the scratches and dents for a brand new look for your car. 1-year warranty. </p>
							
						</div>
					</div>
					</a>
				</div>
				<div class="col-md-5 px-md-0 my-md-0 mt-3">
					<a href="brand.php"><div class="img1 img2 img-grid  d-flex align-items-end justify-content-center p-3">
						<div class="img_text_w3ls px-3">
							<h4>Car Care</h4>
							<span> </span>
							<p class="text-white">Car Spa at your doorstep. Expert cleaners & quality products.</p>
							
						</div>
					</div>
					</a>
				</div>
			</div>
			<div class="row my-3">
				<div class="col-md-7">
					<a href="brand.php"><div class="img1 img3 img-grid  d-flex align-items-end justify-content-center p-3">
						<div class="img_text_w3ls px-4">
							<h4>Reparing</h4>
							<span> </span>
							<p class="text-white">All kinds of car repairs - clutch overhaul, brakes overhaul etc.</p>
							
						</div>
					</div>
					</a>
				</div>
				<div class="col-md-5 px-md-0 my-md-0 mt-3">
					<a href="brand.php"><div class="img1 img4 img-grid  d-flex align-items-end justify-content-center p-3">
						<div class="img_text_w3ls px-3">
							<h4>Emergency</h4>
							<span> </span>
							<p class="text-white">24*7 emergency services including battery jumpstart, flat tyre support etc.
 </p>
							
						</div>
					</div>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5 my-md-0 mb-3">
					<a href="brand.php"><div class="img1 img5 img-grid  d-flex align-items-end justify-content-center p-3">
						<div class="img_text_w3ls px-3">
							<h4>ENGINE DIAGNOSTICS</h4>
							<span> </span>
							<p class="text-white">Engine functionality and health check and
Consumable replacement (as required)
 </p>
							
						</div>
					</div>
					</a>
				</div>
				<div class="col-md-7 px-md-0">
					<a href="brand.php"><div class="img1 img6 img-grid  d-flex align-items-end justify-content-center p-3">
						<div class="img_text_w3ls px-4">
							<h4>Servicing</h4>
							<span> </span>
							<p class="text-white">Complete service including engine oil and filters change. Genuine spares used. </p>
							
						</div>
					</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle">Car Wash</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<img src="images/g1.jpg" alt=" " class="img-fluid">
					<h5 class="text-capitalize my-3">we give best services</h5>
					<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, quis nostrud exercitation ullamco laboris nisi ut
						aliquip ex ea commodo consequat.</p>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal -->
	<!-- //services -->
<div class="container-fluid">
	<img src="images/work1.png" class="img-fluid">
</div>

	<!-- about bottom -->
	<div class="about-bottom-wthree py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="row py-4 posi-w3ls-bottom">
				<div class="col-lg-4 bottom-w3ls1">
					<h4 class="text-white mb-4">WE MAKE IT EASY</h4>
					<p>Book a service online 24/7. Our mechanics will come to your home or office, even on evenings and weekends.</p>
					<i class="fas fa-users text-white"></i>
				</div>
				<div class="col-lg-4 bottom-w3ls1 my-lg-0 my-5">
					<h4 class="text-white mb-4">Happiness Guaranteed</h4>
					<p>We only work with highly rated mechanics.All our workshops use genuine OES/OEM parts.

Quality is of utmost importance to us</p>
					<i class="fas fa-tachometer-alt text-white"></i>
				</div>
				<div class="col-lg-4 bottom-w3ls1">
					<h4 class="text-white mb-4">Fair and transparent priceing</h4>
					<p>We offer fair and transparent pricing and savings up to 40% compared to other workshops.

Book with confidence. </p>
					<i class="fas fa-american-sign-language-interpreting text-white"></i>
				</div>
			</div>
		</div>
	</div>
	<!-- //about bottom -->
<div class="container-fluid">
	
	<img src="images/brand.png" class="img-fluid">
</div>
	<!-- about -->
	<div class="about py-5" id="about">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize text-dark text-center pb-3 mb-sm-5 mb-4">about us
				<span></span>
			</h3>
			<div class="row mb-5">
				<div class="col-lg-6 aboutright ml-2 mr-sm-0 mr-3">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="img-fluid" src="images/g1.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="img-fluid" src="images/g4.jpg" alt="Second slide">
							</div>
							<div class="carousel-item">
								<img class="img-fluid" src="images/g3.jpg" alt="Third slide">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<div class="col-lg-5 aboutleft ml-xl-4">
					<h4 class="about-left-agile text-dark text-capitalize mb-2">about our
						<span>CAR Servicies</span>
					</h4>
					<p class="border-left pl-3">We provides best online car service in India making car maintenance easy, affordable and completely transparent. We also provide you with the best car service deals. Full car service is faciliated at one of the Car Servicies service centre. So book car service now!				</p>
					<h4 class="about-left-agile text-dark text-capitalize mt-4 mb-2">Bring back your
						<span>CAR</span> gleaming like
						<span>NEW</span>!
					</h4>
					<p>We listen to customer's opinions always and reflect them to 
					our products. Through ceaseless feedback not discontinued as only once purchasing, we try to produce our produces as a 
					continuous partner for our customers. 
						</p>
				</div>
			</div>
		</div>
	</div>
	<!--//about-->

	<div class="container-fluid" id="process">
	<img src="images/process.png" class="img-fluid">
</div>
	<!-- gallery -->
	<div class="agileits-services text-center py-5" id="gallery">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize text-dark text-center pb-3 mb-sm-5 mb-4">Our Gallery
				<span></span>
			</h3>
			<div class="w3ls_gallery_grids">
				<div class="row agileits_w3layouts_gallery_grid">
					<div class="col-md-4 agileits_w3layouts_gallery_grid1 hover14">
						<div class="w3_agile_gallery_effect">
							<a href="images/g1.jpg" class="sb" title="we love your car the same as you do">
								<figure>
									<img src="images/g1.jpg" alt=" " class="img-fluid" />
								</figure>
							</a>
						</div>
					</div>
					<div class="col-md-4 agileits_w3layouts_gallery_grid1 hover14 my-md-0 my-2">
						<div class="w3_agile_gallery_effect">
							<a href="images/g4.jpg" class="sb" title="we love your car the same as you do">
								<figure>
									<img src="images/g4.jpg" alt=" " class="img-fluid" />
								</figure>
							</a>
						</div>
					</div>
					<div class="col-md-4 agileits_w3layouts_gallery_grid1 hover14">
						<div class="w3_agile_gallery_effect">
							<a href="images/g3.jpg" class="sb" title="we love your car the same as you do">
								<figure>
									<img src="images/g3.jpg" alt=" " class="img-fluid" />
								</figure>
							</a>
						</div>
					</div>
				</div>
				<div class="row agileits_w3layouts_gallery_grid mt-2">
					<div class="col-md-4 agileits_w3layouts_gallery_grid1 hover14">
						<div class="w3_agile_gallery_effect">
							<a href="images/ak5.jpg" class="sb" title="we love your car the same as you do">
								<figure>
									<img src="images/ak5.jpg" alt=" " class="img-fluid" />
								</figure>
							</a>
						</div>
					</div>
					<div class="col-md-4 agileits_w3layouts_gallery_grid1 hover14 my-md-0 my-2">
						<div class="w3_agile_gallery_effect">
							<a href="images/ak3.jpg" class="sb" title="we love your car the same as you do">
								<figure>
									<img src="images/ak3.jpg" alt=" " class="img-fluid" />
								</figure>
							</a>
						</div>
					</div>
					<div class="col-md-4 agileits_w3layouts_gallery_grid1 hover14">
						<div class="w3_agile_gallery_effect">
							<a href="images/ak2.jpg" class="sb" title="we love your car the same as you do">
								<figure>
									<img src="images/ak2.jpg" alt=" " class="img-fluid" />
								</figure>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //gallery -->

	
	

	<!-- iframe video -->
	<div class="video-w3ls bg-dark py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="row">
				<div class="col-lg-6 w3ls-agile-video">
					<iframe src="https://player.vimeo.com/video/16307238"></iframe>
				</div>
				<div class="col-lg-6 w3ls-agile-video-right mt-lg-0 mt-4">
					<h4 class="about-left-agile text-white text-capitalize mb-2">The Main Goal Of
						<span>CAR services</span>
					</h4>
					<p>We are India's first standardized network of workshops to provide car services. We provide affordable, transparent and convenient on-demand car services at the comfort of your home or your office. With expert mechanics, state-of-the-art machinery, top quality spares, standardized processes & pricing, We provides a uniform service experience to all its customers, across its workshops. Everything under one-roof : servicing, repairs, inspections, denting/painting, roadside assistance and car care.
</p>
					
					
				</div>
			</div>
		</div>
	</div>
	<!-- //iframe video -->

	

	<!-- contact -->
	<div class="contact py-5" id="contact">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize text-white text-center pb-3 mb-sm-5 mb-4">contact us
				<span></span>
			</h3>
			<div class="d-flex">
				<div class="col-lg-6 contact-right">
					<div class="w3l-agile">
						<form action="#" method="post">
							<div class="form-group">
								<input type="text" name="name" placeholder="Your name" class="form-control" required="">
							</div>
							<div class="form-group">
								<input type="email" name="email" placeholder="Your email" class="form-control" required="">
							</div>
							<div class="form-group">
								<input type="text" name="subject" placeholder="Your subject" class="form-control" required="">
							</div>
							<div class="form-group">
								<input type="text" name="number" placeholder="Phone number" class="form-control" required="">
							</div>
							<div class="form-group">
								<textarea name="message" placeholder="Your message" class="form-control" required=""></textarea>
							</div>
							<input type="submit" name="send" value="Send">
						</form>
					</div>
				</div>
				<div class="col-lg-6 contact-left mt-lg-0 mt-5">
					<div class="w3l-agile ">
						<div class="address">
							<h4 class="text-white">
								<i class="fa fa-map-marker" aria-hidden="true"></i>Location</h4>
							<p>Near sbi digha patna 800011</p>
						</div>
						<div class="phone my-4">
							<h4 class="text-white">
								<i class="fa fa-phone" aria-hidden="true"></i>Phone</h4>
							<p>7717746843</p>
						</div>
						<div class="email">
							<h4 class="text-white">
								<i class="fas fa-envelope"></i>E-mail</h4>
							<p>
								<a href="mailto:info@example.com">shantanusk.sk@gmail.com</a>
							</p>
						</div>
						<!-- map -->
						<div class="map-w3ls mt-4">
							<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14387.228974660526!2d85.0887592!3d25.6445222!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1550132177766" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<!-- //map -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //contact -->
	<!-- footer -->
	<div class="footer-bot py-5 text-center">
		<div class="container">
			<div class="logo2">
				<h2>
					<a href="index.html">
						<span>C</span>ar
						<span>S</span>ervices
					</a>
				</h2>
			</div>
			<!-- social icons -->
			<div class="agileinfo_social_icons my-4">
				<ul class="agileits_social_list list-unstyled">
					<li>
						<a href="#" class="w3_agile_facebook">
							<i class="fab fa-facebook-f"></i>
						</a>
					</li>
					<li class="mx-2">
						<a href="#" class="agile_twitter">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#" class="w3_agile_dribble">
							<i class="fab fa-dribbble"></i>
						</a>
					</li>
					<li class="ml-2">
						<a href="#" class="w3_agile_google">
							<i class="fab fa-google-plus-g"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- social icons -->
			<!-- copyright -->
			<p class="copyright-w3ls"> &copy; 2019 Car Services. All Rights Reserved | Design by SHANTANU
				
			</p>
			<!-- //copyright -->
		</div>
	</div>
	<!-- //footer -->


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- <script src="js/jquery-1.11.3.min.js"></script> -->
	<!-- Default-JavaScript-File -->
	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!--banner-slider-->
	<script src="js/JiSlider.js"></script>
	<script>
		$(window).load(function () {
			$('#JiSlider').JiSlider({
				color: '#fff',
				start: 3,
				reverse: true
			}).addClass('ff')
		})
	</script>
	<!-- //banner-slider -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->

	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/car_services.js"></script>
	<!-- banner text -->
	<script src="js/text.js"></script>
	<!-- menu -->
	<script src="js/menu.js"></script>
	<!-- lightbox -->
	<script src="js/smoothbox.jquery2.js"></script>

	<!-- testimonials -->
	<!-- required-js-files-->
	<link href="css/owl.carousel.css" rel="stylesheet">
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo").owlCarousel({
				items: 1,
				lazyLoad: true,
				autoPlay: false,
				navigation: true,
				navigationText: true,
				pagination: true,
			});
		});
	</script>
	<!-- //required-js-files-->
	<!-- //Js files -->


 <?php
 include 'conn.php';
 if(isset($_POST['send']))
 {


$name=$_POST["name"]; 
$email=$_POST["email"];
$number=$_POST["number"];
$subject=$_POST["subject"];

$message=$_POST["message"];



$sqll="insert into message values ('$name','$email','$number','$subject','$message')";
mysqli_query($conn,$sqll);
echo"<script>";
echo"alert('we will contact you soon')";
echo"</script>";




 }
?>


</body>

</html>