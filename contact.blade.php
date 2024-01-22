<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    @vite(['resources/css/app.css',  
            "resources/css/font-awesome.min.css",  
            "resources/css/font-linearicons.css",
            "resources/css/bootstrap.css",
            "resources/css/bootstrap-theme.css",
            "resources/css/jquery.fancybox.css",
            "resources/css/jquery-ui.css",
            "resources/css/owl.carousel.css",
            "resources/css/owl.transitions.css",
            "resources/css/owl.theme.css",
            "resources/js/slideshow/settings.css",
            "resources/css/theme.css",
            "resources/css/responsive.css",

			"resources/js/bootstrap.bundle.min.js",
            'resources/Js1/app.js',
            "resources/js/jquery-1.12.0.min.js",
            "resources/js/bootstrap.min.js",
            "resources/js/jquery.fancybox.js",
            "resources/js/jquery-ui.js",
            "resources/js/owl.carousel.js",
            "resources/js/TimeCircles.js",
            "resources/js/slideshow/jquery.themepunch.revolution.js",
            "resources/js/slideshow/jquery.themepunch.plugins.min.js",
            "resources/js/theme.js"
    	])
</head>
<body>
<div class="wrap">
	<div id="header">
		<div class="top-header">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-4 col-xs-12">
						<ul class="top-menu">
							<li><a href="{{route('about')}}">About Us</a></li>
							<li><a href="blog-v2.html">FAQ</a></li>
							<li><a href="{{route('contact')}}">Contact Us</a></li>
						</ul>
					</div>
					<div class="col-md-9 col-sm-8 col-xs-12">
						<ul class="top-info">
							
							
							<li class="top-mobile"><a href="#">PM </a></li>
							<li class="top-mobile"><a href="#">Achieve </a></li>
							<li class="top-language has-child">
								<a href="#" class="language-selected"><img src="images/home1/flag-default.jpg" alt=""/>English </a>
								<ul class="sub-menu-top">
									<li><a href="#"><img src="images/home1/flag-england.jpg" alt=""/>English</a></li>
									<li><a href="#"><img src="images/home1/Khmer-flag.png" alt=""/>Khmer</a></li>
								</ul>
							</li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- End Top Header -->
		<div class="header">
			<div class="container">
				<div class="header-main">
					<div class="row grid">
						<div class="col-md-4 col-sm-3 col-xs-12">
							<div class="logo">
								<a href="index.html"><img src="images/home1/logo.png" alt="" /></a>
							</div>
						</div>
						<div class="col-md-1 col-sm-3 col-xs-12 hidden-xs">
							<div class="mini-cart">
								
							</div>
							<!-- End Mini Cart -->
						</div>
						<div class="col-md-7 col-sm-6 col-xs-12">
							<div class="smart-search">
								<div class="select-category">
									<a href="#" class="category-toggle-link"><span>Work Activities</span></a>
									<ul class="list-category-toggle sub-menu-top">
										<li><a href="grid.html">2019</a></li>
										<li><a href="list.html">2020</a></li>
										<li><a href="grid.html">2021</a></li>
										<li><a href="list.html">2022</a></li>
										<li><a href="grid.html">2023</a></li>
										<li><a href="list.html">2024</a></li>
									</ul>
								</div>
								<form class="smart-search-form">
									<input type="text" value="I am Looking for..." onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" />
									<input type="submit" value="" />
								</form>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<!-- End Header -->
		<div class="header-nav header-nav10">
			<div class="container">
				<nav class="main-nav main-nav10">
					<ul>
						<li>
							<a href="index.html">home</a>
		
						</li>
						<li>
							<a href="#">Spokesperson Unit</a>
					
						</li>
						<li >
							<a href="list.html">Press Briefing </a>
							
						</li>
						<li >
							<a href="grid.html">Public Schedule</a>
							
						</li>
						<li>
							<a href="grid.html">Press Release</a>
							
						</li>
						<li>
							<a href="list.html">Pentagonal Strategy</a>
						</li>
						<li>
							<a href="list.html">PM</a>
						</li>
						<li>
							<a href="blog-v1.html">Achieve</a>
							
						</li>
						<!-- <li >
							<a href="#">Contact us</a>
							
						</li> -->
					</ul>
					<a href="#" class="toggle-mobile-menu"><span>Menu</span></a>
				</nav>
				<!-- End Main Nav -->
			</div>
		</div>
	</div>
	<!-- End Header -->
	<div id="content">
		<div class="content-page">
			<div class="container">
				<div class="contact-map">
					<!-- <img src="images/pages/contact-map.jpg" alt="" /> -->
					<iframe width="100%" height="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2279.839403366876!2d104.91171682889481!3d11.569274822165951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109516a3948ea6f%3A0xbd2d0271c7ce783a!2sOffice%20of%20the%20Council%20of%20Ministers!5e0!3m2!1sen!2skh!4v1689336131419!5m2!1sen!2skh" width="350" height="250" style="border:0;"></iframe>
					<!-- <iframe class="map" width="100%" height="100%" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15635.782715259422!2d104.887681!3d11.555752!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951ed9d2cf44d%3A0x241dc4823004ef9f!2sPHSAR%20TECH!5e0!3m2!1sen!2skh!4v1681725810922!5m2!1sen!2skh" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
				</div>
				<!-- End Map -->
				<div class="contact-info-page">
					<div class="list-contact-info">
						<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="item-contact-info">
									<a class="contact-icon icon-phone" href="#"><i class="fa fa-phone"></i></a>
									<h2>Call: <a href="#">023 212 409</a></h2>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="item-contact-info ">
									<a class="contact-icon icon-email" href="mailto:7uptheme@gmail.com"><i class="fa fa-envelope"></i></a>
									<h2><a href="mailto:7uptheme@gmail.com">rgsu@gmail.com</a></h2>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="item-contact-info last-item">
									<a class="contact-icon icon-mobile" href="#"><i class="fa fa-home"></i></a>
									<h2>Address Mittapheap Building, 38 Confeceration de la Russie Biva (110), Phnom Penh, Kingdombt Cambodia.</h2>
								</div>
							</div>
						</div>
					</div>
					<!-- <p class="desc">If the supplier fails to ship your products on time or the product quality does not meet the standards set in your contract, Aloshop will refund the covered amount of your payment.</p> -->
				</div>
				<!-- Bootstrap 5 Contact Form Snippet -->

				<div class="container p-0 m-0">
					<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="card border rounded-3">
						<div class="card-body p-4">
							<div class="text-center">
							<div class="h1 fw-light">Contact Form</div>
							<!-- <p class="mb-4 text-muted">A functional, Bootstrap 5 contact form with validation built using SB Forms. Try it out!</p> -->
							</div>
				
							<!-- * * * * * * * * * * * * * *
							// * * SB Forms Contact Form * *
							// * * * * * * * * * * * * * * *
				
							// This form is pre-integrated with SB Forms.
							// To make this form functional, sign up at
							// https://startbootstrap.com/solution/contact-forms
							// to get an API token!
							-->
				
							<form id="contactForm" data-sb-form-api-token="API_TOKEN">
				
							<!-- Name Input -->
							<div class="form-floating mb-5">
								<input class="form-control p-5" id="name" type="text" placeholder="Name" data-sb-validations="required" />
								<label for="name">Name</label>
								<div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
							</div>

							<!-- Phone Input -->
							<div class="form-floating mb-5">
								<input class="form-control p-5" id="name" type="text" placeholder="Name" data-sb-validations="required" />
								<label for="name">Phone Number</label>
								<div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
							</div>
				
							<!-- Email Input -->
							<div class="form-floating mb-5">
								<input class="form-control p-5" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required,email" />
								<label for="emailAddress">Email</label>
								<div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
								<div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
							</div>
				
							<!-- Message Input -->
							<div class="form-floating mb-5">
								<textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 30rem;" data-sb-validations="required"></textarea>
								<label for="message">Message</label>
								<div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
							</div>
				
							<!-- Submit success message -->
							<div class="d-none" id="submitSuccessMessage">
								<div class="text-center mb-3">
								<div class="fw-bolder">Form submission successful!</div>
								<p>To activate this form, sign up at</p>
								<a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
								</div>
							</div>
				
							<!-- Submit error message -->
							<div class="d-none" id="submitErrorMessage">
								<div class="text-center text-danger mb-3">Error sending message!</div>
							</div>
				
							<!-- Submit button -->
							<div class="col-md-2 p-0 d-grid">
								<button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button>
							</div>
							</form>
							<!-- End of contact form -->
				
						</div>
						</div>
					</div>
					</div>
				</div>
				
				<!-- CDN Link to SB Forms Scripts -->
				
						</div>
					</div>
				</div>
	<!-- End Content -->
	<div id="footer">
		<div class="footer ">
			<div class="container">
				<div class="footer-top">
					<div class="logo-footer">
						<a href="#"><img src="images/home1/logo-footer.png" alt="" /></a>
					</div>
					<div class="menu-footer">
						<ul>
							<li><a href="#">The RGC’s six policies </a></li>
							<li><a href="#">Prime Minister</a></li>
							<li><a href="#">Pentagonal Strategy</a></li>
							<li><a href="#">Monthly updated</a></li>
							<li><a href="#">Spokespersons </a></li>
							<li><a href="#">Help</a></li>
						</ul>
					</div>
				</div>
				<div class="list-footer-box">
					<div class="row">
						
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="footer-box">
								<h2>Help</h2>
								<ul class="footer-menu-box">
									<li><a href="#">Press Briefing Schedule</a></li>
									<li><a href="#">Public Schedule </a></li>
									<li><a href="#">Press Release </a></li>
									
								</ul>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="footer-box">
								<h2>Further information</h2>
								<ul class="footer-menu-box">
									<li><a href="#">Drop Everything</a></li>
									<li><a href="#">Affiliate programme</a></li>
									<li><a href="#">Privacy</a></li>
									<li><a href="#">Terms & conditions</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="footer-box">
								<h2>Contact Us</h2>
								<ul class="footer-box-contact">
									<li><i class="fa fa-home"></i> Friendship Building, 38 Confederation de la Russie Blvd (110), Phnom Penh, Kingdom of Cambodia</li>
									<li><i class="fa fa-mobile"></i> 023 212 409</li>
									<li><i class="fa fa-envelope"></i> <a href="mailto:support@7-Up.com">info@rgsu.gov.kh/</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- End List Footer Box -->
				<div class="social-footer-box">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="newsletter-footer ">
								<label>news</label>
								<form>
									<input type="text"  value="Enter Your Email..." onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" />
									<input type="submit" value="" />
								</form>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="social-footer social-network">
								<label>Follow Us</label>
								<ul>
									<li><a href="#"><img src="images/home1/s1.png" alt="" /></a></li>
									<li><a href="#"><img src="images/home1/s2.png" alt="" /></a></li>
									<li><a href="#"><img src="images/home1/s3.png" alt="" /></a></li>
									<li><a href="#"><img src="images/home1/s4.png" alt="" /></a></li>
									<li><a href="#"><img src="images/home1/s5.png" alt="" /></a></li>
									<li><a href="#"><img src="images/home1/s6.png" alt="" /></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- End Social Footer Box -->
				
				
				<!-- End Footer Bottom -->
			</div>
		</div>
	</div>
	<!-- End Footer -->
</div>
</body>
</html>