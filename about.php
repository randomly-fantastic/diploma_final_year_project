<?php include("header.php");?>
<hr>
<!-- stats -->
	<div class="stats" id="stats">
	<div class="w3-head-all  mb-5">
				<h3><?= _About  ?></h3>
			</div>
		<div class="container">
			<div class="row">
			<div class="col-md-3  col-sm-6 w3layouts_stats_left w3_counter_grid">
				<span class="fas fa-globe" aria-hidden="true"></span>
				<p class="counter">45</p>
				<h3><?= _PROJECTS  ?></h3>
			</div>
			<div class="col-md-3 col-sm-6 w3layouts_stats_left w3_counter_grid1">
				<span class="fas fa-users" aria-hidden="true"></span>
				<p class="counter">165</p>
				<h3><?=_HAPPY ?></h3>
			</div>
			<div class="col-md-3 col-sm-6 w3layouts_stats_left w3_counter_grid2">
				<span class="fas fa-handshake" aria-hidden="true"></span>
				<p class="counter">563</p>
				<h3><?= _TEAM ?> </h3>
			</div>
			<div class="col-md-3 col-sm-6 w3layouts_stats_left w3_counter_grid3">
				<span class="fa fa-trophy" aria-hidden="true"></span>
				<p class="counter">245</p>
				<h3><?=_YEARS ?> </h3>
			</div>
			<div class="clearfix"> </div>
		</div>
		</div>
	</div>
	<!-- //stats -->
<!-- services-bottom -->
	<div class="services-bottom wthree-sub py-5">
		<div class="container py-md-3">
			<div class="row">
			<div class="col-sm-6 col-xs-4 services_bottom_grid_left">
				
			<a class="navbar-brand" href="index.php"><img src="images/logo1.jpg" alt=""></a>
				
			</div>
			<div class="col-sm-6 col-xs-8 services_bottom_grid_right">
				<h3><?=_Why ?></h3>  
				<div class='bar_group'>
					<div class='bar_group__bar thin elastic' label='100% <?=_Safe ?>' value='230'></div>
					<div class='bar_group__bar thin elastic' label='100% <?=_support ?>' value='130'></div>
					<div class='bar_group__bar thin elastic' label='<?=_Fast?> ' value='160'></div>
				</div> 
			</div>
			<div class="clearfix"> </div>
		</div> 
		</div> 
	</div>
<!-- /modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-uppercase" id="exampleModalLongTitle">Transload</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<img src="images/modal1.png" class="img-fluid mb-4" alt="Modal Image" />
        Vivamus eget est in odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum, ut auctor turpis cursus. Sed sed odio pharetra, aliquet velit cursus, vehicula enim. Mauris porta aliquet magna, eget laoreet ligula.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br><br><br><br><br><br><br>
<!-- //modal -->	
	
	
<?php include("footer.php");?>	
	
	
	
	
	
	
	
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
	
	
 </body>
</html>
