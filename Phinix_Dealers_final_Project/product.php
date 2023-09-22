
<?php include("header.php");?>
<hr>
	<!-- //services-bottom -->
	<!-- services-main -->
	<div class="testimonials  py-5">
		<div class="container  py-md-3">
			<div class="w3-head-all  mb-5">
				<h3><?=_PRODUCT?></h3>
			</div>
			<div class="w3_testimonials_grids">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
												<!-- s1 -->
								<div class="about-top w3ls-agile row">
									<div class="col-md-6 ser_w3">
										<img class="img-responsive img-fluid" src="images/12ton.png" alt="">
									</div>
									<div class="col-md-6 come">
										<div class="about-wel">
											<h3><?=_12Ton?></h3><br>
											<h5><span><?=_RATED?></span></h5>
										<strong><?=_12Tons?></strong><br><br>
											
											<h3><?=_ENGINE?></h3>
											<p style="text-align:justify"><?=_SimpsonFourCylinder?></p>
											
										</div>
												
											
										
									
									<div class="button-styles">
											<!--<a href="#" data-toggle="modal" data-target="#exampleModalCenter"><?=_More?></a>-->
											<a href="12 ton.php"><?=_12Ton?></a>
										</div>
									</div>
									
								</div>
						
									<!-- //welcome -->
	
							</li>
							<li>
							<div class="about-top w3ls-agile row">
								<div class="col-md-6 come">
									<div class="about-wel">
										<h3><?=_14Ton?></h3><br>
										<h5><span><?=_RATED?></span></h5>
										<strong><?=_14Tons?></strong><br><br>
                                           <h3><?=_ENGINE?></h3>
										<p style="text-align:justify"><?=_SimpsonFourCylinder?></p>
										
									</div>
									<div class="button-styles">
											<!--<a href="#" data-toggle="modal" data-target="#exampleModalCenter"><?=_More?></a>-->
											<a href="14 ton.php"><?=_14Ton?></a>
										</div>
								</div>
								<div class="col-md-6 ser_w3">
									<img class="img-responsive img-fluid" src="images/14ton.png" alt="">
								</div>
								
							</div>
							</li>
	
							<li>
								<div class="about-top w3ls-agile row">
				<div class="col-md-6 ser_w3">
					<img class="img-responsive img-fluid" src="images/15ton65.png" alt="">
				</div>
				<div class="col-md-6 come">
					<div class="about-wel">
                                       <strong><h3><?=_15Ton?></h3><br></strong>
										<h5><span><?=_RATED?></span></h5>
										<strong><?=_15Ton?></strong><br><br>
										        <h3><?=_ENGINE?></h3>
						<p style="text-align:justify"><?=_SimpsonFourCylinder?></p>
						
					</div>
					<div class="button-styles">
											<!--<a href="#" data-toggle="modal" data-target="#exampleModalCenter"><?=_More?></a>-->
											<a href="15 ton65.php"><?=_15Ton?></a>
										</div>
				</div>
				
			</div>
	
							</li>
							<li>
								<div class="about-top w3ls-agile row">
				
				<div class="col-md-6 come">
					<div class="about-wel">
						<strong><h3><?=_15Ton72?></h3><br></strong>
										<h5><span> <?=_RATED?></span></h5>
										<strong><?=_15Ton72?></strong><br><br>
										        <h3><?=_ENGINE?></h3>
						<p style="text-align:justify"><?=_SimpsonFourCylinder?>.</p>
							
					</div>
					<div class="button-styles">
											<!--<a href="#" data-toggle="modal" data-target="#exampleModalCenter"><?=_More?></a>-->
											<a href="15 ton72.php"><?=_15Ton72?></a>
										</div>
				</div>
				<div class="col-md-6 ser_w3">
					<img class="img-responsive img-fluid" src="images/15ton72.png" alt="" >
				</div>
			</div>
	
							</li>
						</ul>
					</div>
				</section>

			</div>
		</div>
	</div>
	
	
	
	<!--//Projects-->
	<!-- //services-main -->
	
<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->


<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->
<!-- bars.js -->   
	<script src="js/bars.js"></script>
	<!-- //bars.js -->

	<!-- flexSlider (for testimonials) -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<script defer src="js/jquery.flexslider.js"></script>
	<script>
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider (for testimonials) -->
	<!-- simpleLightbox -->
	<script src="js/simpleLightbox.js"></script>
	<script>
		$('.proj_gallery_grid a').simpleLightbox();
	</script>
	<!-- //simpleLightbox -->
<!--popup-js-->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
</script>
<!--//popup-js-->
<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	
	
	<!-- smooth scrolling js -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling js -->
 <?php include("footer.php");?>
	
	
	
	