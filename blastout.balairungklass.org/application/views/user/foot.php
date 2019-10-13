<!-- Footer -->
<div class="copyrights">
	<div class="container">
		<center>
			<h3 id="foot-h3">&copy Balairung Klaten Association &copy
			<a href="https://www.domainesia.com" target="_blank">
			<img alt="Hosting Murah Indonesia" title="DomaiNesia" src="<?php echo base_url('assets/images/badge-monowhite-300.png')?>" style="height: 50px;width: 200px;margin-top: -15px;"/></a> </h3>
			
		</center>
	</div>
	
</div>
<!-- //Footer -->

<!-- js-scripts -->	


<!-- js-files -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.1.4.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js')?>"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js-files -->

<!-- Baneer-js -->
<script src="<?php echo base_url('assets/js/responsiveslides.min.js')?>"></script>
<script>
	// You can also use "$(window).load(function() {"
	$(function () {
	  // Slideshow 4
	  $("#slider4").responsiveSlides({
		auto: true,
		pager:true,
		nav:false,
		speed: 500,
		namespace: "callbacks",
		before: function () {
		  $('.events').append("<li>before event fired.</li>");
		},
		after: function () {
		  $('.events').append("<li>after event fired.</li>");
		}
	  });

	});
</script>
<!-- //Baneer-js -->

<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
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
	<!-- //smooth-scrolling-of-move-up -->  
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/move-top.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/easing.js')?>"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	
<!-- smooth scrolling -->
<script src="<?php echo base_url('assets/js/SmoothScroll.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/jarallax.js')?>"></script> 
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>   

<!-- //smooth scrolling -->
<script src="<?php echo base_url('assets/js/numscroller-1.0.js')?>"></script>
<!-- carousel -->
<script src="<?php echo base_url('assets/js/owl.carousel.js')?>"></script>
	<script>
	$(document).ready(function() {
	  $("#owl-demo").owlCarousel({
		items :3,
		itemsDesktop : [768,2],
		itemsDesktopSmall : [414,1],
		lazyLoad : true,
		autoPlay : true,
		navigation :true,		
		navigationText :  false,
		pagination : true,
		
	  });
	  
	});
	</script>
<!-- //carousel -->
<!-- form -->
<script>
		$(".info-w3lsitem .btn").click(function() {
			  $(".main-agileinfo").toggleClass("log-in");
			});
			$(".container-form .btn").click(function() {
			  $(".main-agileinfo").addClass("active");
		});
</script>
<!-- //form -->
<!-- pricing-tablel -->
<script src="<?php echo base_url('assets/js/jquery.magnific-popup.js')?>" type="text/javascript"></script>
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
<!-- //pricing-tablel -->						
<!-- gallery-js -->
<script src="<?php echo base_url('assets/js/jquery.chocolat.js')?>"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/css/chocolat.css')?>" type="text/css" media="screen">
		<!-- light-box-files -->
		<script type="text/javascript">
		$(function() {
			$('.gallery a').Chocolat();
		});
		</script>
		<!-- //light-box-files -->
<!-- //gallery-js -->
<!-- //js-scripts -->
<script>
	
	var headeroffset = $('#detektor').offset().top;
	
	$(window).scroll(function(){

		var header = $('#maintop');
		var about = $('.welcome-w3');

		scroll = $(window).scrollTop();

		if (scroll >= headeroffset) {
			header.addClass('fixed-header');
			about.addClass('mode-fix');
		
		}else{
			header.removeClass('fixed-header');
			about.removeClass('mode-fix');
		

		}
			
	});	

</script>
</body>
</html>