
	<div id="fh5co-started" class="fh5co-section" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/footer_02.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center fh5co-heading">
					<!--
					<h2>Book a Table</h2>
					-->
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo_m.png" alt="logo" height=100px></img>
					<!--
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae enim quae vitae cupiditate, sequi quam ea id dolor reiciendis consectetur repudiandae. Rem quam, repellendus veniam ipsa fuga maxime odio? Eaque!</p>
					<p><a href="#" class="btn btn-primary btn-outline">Book Now</a></p>
					-->
				</div>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<!--
					<h3>犬服 kimonoyasuda</h3>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
					-->
				</div>

				<div class="col-md-4 fh5co-widget text-center">
					<h3>犬服 kimonoyasuda</h3>
					<!--
					<h4>Contact Information</h4>
					<ul class="fh5co-footer-links">
						<li>198 West 21th Street, <br> XXXXXX-shi, Toyama-ken 999-9999</li>
						<li><a href="mailto:info@kimonoyasuda.jp">info@kimonoyasuda.jp</a></li>
					</ul>
					-->
				</div>

				<div class="col-md-4 fh5co-widget">
					<!--
					<h4>Links</h4>
					<ul class="fh5co-footer-links">
						<li><a href="<?php echo home_url(); ?>">Top</a></li>
						<li><a href="<?php echo home_url( '/school/' ); ?>">School</a></li>
						<li><a href="<?php echo home_url( '/ordermade/' ); ?>">Order Made</a></li>
						<li><a href="<?php echo home_url( '/category/blog/' ); ?>">Yumiko's Eye</a></li>
						<li><a href="<?php echo home_url( 'contact/' ); ?>">Contact</a></li>
					</ul>
					-->
				</div>

				<div class="col-md-12 fh5co-widget text-center">
					<h4>Links</h4>
					<ul class="fh5co-footer-links">
						<li><a href="<?php echo home_url(); ?>">Top</a></li>
						<li><a href="<?php echo home_url( '/school/' ); ?>">School</a></li>
						<li><a href="<?php echo home_url( '/ordermade/' ); ?>">Order Made</a></li>
						<li><a href="<?php echo home_url( '/category/blog/' ); ?>">Yumiko's Eye</a></li>
						<li><a href="<?php echo home_url( 'contact/' ); ?>">Contact</a></li>
					</ul>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2020 Ralph Shonan. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Custom by <a href="https://ralphshonan.jp" target="_blank">Ralph Shonan</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="https://www.facebook.com/profile.php?id=100024975699787"><i class="icon-facebook2"></i></a></li>
							<li><a href="https://www.instagram.com/kimonoyasuda"><i class="icon-instagram2"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	<ul id="js-footer-bar" class="c-footer-bar c-footer-bar-type1 is-active">
		<li class="col-xs-4 c-footer-bar_item">
			<a href="<?php echo home_url( '/school/' ); ?>"><span class="c-footer-bar_icon icon-calendar3">犬服教室</span></a>
		</li>
		<li class="col-xs-4 c-footer-bar_item">
			<a href="<?php echo home_url( '/ordermade/' ); ?>"><span class="c-footer-bar_icon icon-scissors2">オーダー犬服</span></a>
		</li>
		<li class="col-xs-4 c-footer-bar_item">
			<a href="<?php echo home_url( '/category/blog/' ); ?>"><span class="c-footer-bar_icon icon-text-document">ブログ</span></a>
		</li>
		<li class="col-xs-4 c-footer-bar_item">
			<a href="<?php echo home_url( 'contact/' ); ?>"><span class="c-footer-bar_icon icon-envelope2">お問い合わせ</span></a>
		</li>
	</ul>
	
	<!-- jQuery -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.waypoints.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider-min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/zoomerang.js"></script>
	<!-- BgSwitcher -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bgswitcher.js"></script>
	
	<script>
		$(function($) {
    		$('.bg-slider').bgSwitcher({
        		images: ['<?php echo get_template_directory_uri(); ?>/images/hero_y00.jpg','<?php echo get_template_directory_uri(); ?>/images/hero_y02.jpg','<?php echo get_template_directory_uri(); ?>/images/hero_y03.jpg'], // 切り替える背景画像を指定
    		});
		});
		//$(function() {
    	//	$('#fh5co-header img').fadeOut(5000);
		//});
	</script>
	<script>
		$(function() {
    		$('img').removeClass('show');
		});
	</script>
	<script>
		$(function($) {
    		$('.fh5co-page-cover').bgSwitcher({
        		images: ['<?php echo get_template_directory_uri(); ?>/images/hero_y04.jpg'], // 切り替える背景画像を指定
    		});
		});
	</script>
	
	<!-- Main -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

	<script>
		if (window.matchMedia('(max-width: 425px)').matches) {
			//スマホ処理
			Zoomerang
			.config({
				maxHeight: 284,
				maxWidth: 426,
				bgColor: '#000',
				bgOpacity: .85
			})
			.listen('[data-trigger="zoomerang"]')

		} else if (window.matchMedia('(min-width:425px)').matches) {
			//PC処理
			Zoomerang
			.config({
				maxHeight: 600,
				maxWidth: 900,
				bgColor: '#000',
				bgOpacity: .85
			})
			.listen('[data-trigger="zoomerang"]')
		}
	</script>

	<script>
		$(window).load(function(){
			$("#g-list-img img").click(function(){
				var img_src = $(this).attr("src");
				$("#display-img img").attr("src", img_src);
			});
		});
	</script>
	<script>
		$(window).load(function(){
			$("#g-list-img img").click(function(){
				var img_src = $(this).attr("src");
				$("#display-img a").attr("href", img_src);
			});
		});
	</script>

	<?php wp_footer(); ?>
	</body>
</html>