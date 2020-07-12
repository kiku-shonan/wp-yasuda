<!DOCTYPE HTML>
<html <?php language_attributes(); //html要素のlang属性を出力 ?>>
	<head>
	<meta charset="<?php bloginfo( 'charset' ); //文字エンコーディング情報を出力 ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title( '|', true, 'right' ); //ページタイトルを出力 ?><?php bloginfo('name'); //サイト名を表示 ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="富山初、ドッグウェアクリエイター認定講師の犬服教室とオーダーメイド犬服の紹介です。" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
	CUSTOM by Ralph SHONAN
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<<?php echo get_template_directory_uri(); //使用中テーマディレクトリのURLを出力 ?>/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); //使用中テーマのスタイルシートURLを出力 ?>">

	<!-- Modernizr JS -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	<?php wp_head(); //wp_headはテーマの</head>タグ直前に必ず挿入します ?>

	</head>
	
	<body  <?php body_class(); //bodyタグにページの種類に応じたクラス名を与える ?>>
    
	<div class="fh5co-loader"></div>
	
	<div id="page">

	<nav class="fh5co-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center logo-wrap">
						<div id="fh5co-logo"><a href="index.html">犬服 kimonoyasuda</a></div>
					</div>
					<div class="col-xs-12 text-center menu-1 menu-wrap">
						<ul>
							<li class="active"><a href="<?php echo home_url(); //トップページのURLを出力 ?>">Top</a></li>
							<li><a href="<?php echo home_url( '/school/' ); ?>">犬服教室</a></li>
							<li><a href="<?php echo home_url( '/order/' ); ?>">オーダーメイド犬服</a></li>
							<li><a href="<?php echo home_url( '/blog/' ); ?>">Yumiko's Eye</a></li>
							<li><a href="<?php echo home_url( '/contact/' ); ?>">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<header id="fh5co-header" class="fh5co-cover js-fullheight bg-slider" role="banner" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<h1>犬服 kimonoyasuda</h1>
							<h2>Brought to you by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-tabs" class="fh5co-section">
		<div class="container">
			<div class="row">
				<ul class="nav nav-tabs nav-justified">
					<li class="active"><a href="<?php echo home_url(); ?>">Top</a></li>
					<li><a href="<?php echo home_url( '/school/' ); ?>">犬服教室</a></li>
					<li><a href="<?php echo home_url( '/order/' ); ?>">オーダーメイド犬服</a></li>
					<li><a href="<?php echo home_url( '/blog/' ); ?>">Yumiko's Eye</a></li>
					<li><a href="<?php echo home_url( '/contact/' ); ?>">Contact</a></li>
				</ul>
			</div>
		</div>
    </div>

	<div id="fh5co-featured-testimony" class="fh5co-section">
		<div class="container fh5co-section">
			<div class="row">
				<!--
				<div class="col-md-12 fh5co-heading animate-box">
					
					<h2>Testimony</h2>
					<div class="row">
						<div class="col-md-6">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam voluptates corporis et tempora consequuntur ipsam, itaque, nesciunt similique commodi omnis.</p>
						</div>
					</div>
					
				</div>
				-->
				<div class="col-md-5 animate-box img-to-responsive animate-box" data-animate-effect="fadeInRight">
						<img src="<?php echo get_template_directory_uri(); ?>/images/top01.jpg" alt="">
				</div>
				<div class="col-md-7 animate-box" data-animate-effect="fadeInLeft">
					<blockquote>
						<p>富山初&#133;<br><a href scr="<?php echo home_url( '/order/' ); ?>">ドッグウェアクリエイター&reg;</a>認定講師の<font color=”#4682b4”>Yumiko</font>です。</p>
					</blockquote>
				</div>
			</div>
		</div>
		<div class="container fh5co-section">
			<div class="row">
				<div class="col-md-5 animate-box img-to-responsive animate-box" data-animate-effect="fadeInRight">
						<img src="<?php echo get_template_directory_uri(); ?>/images/top02.jpg" alt="">
				</div>
				<div class="col-md-7 animate-box" data-animate-effect="fadeInLeft">
					<blockquote>
						<p>先代が始めた呉服店<br>「きものやすだ」がアトリエ。<br>
						その空間で<a href scr="https://petwear.or.jp/">日本ペット服手作り協会</a>公認の<a href scr="<?php echo home_url( '/school/' ); ?>">犬服教室</a>を始めました。</p>
					</blockquote>
				</div>
			</div>
		</div>
		<div class="container fh5co-section">
			<div class="row">
				<div class="col-md-5 animate-box img-to-responsive animate-box" data-animate-effect="fadeInRight">
						<img src="<?php echo get_template_directory_uri(); ?>/images/top03.jpg" alt="">
				</div>
				<div class="col-md-7 animate-box" data-animate-effect="fadeInLeft">
					<blockquote>
						<p>ミシンが初めての方は教室内で練習して作品づくりスタート。<br>
						ハンドメイド歴がある方は、より深い学びにチャレンジ。<br>
						「犬服」「手作り」「素敵なLIFE」はじめませんか？</p>
					</blockquote>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-slider" class="fh5co-section animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 animate-box">
					<div class="fh5co-heading">
						<h2>Our Best <em>&amp;</em> Unique Menu</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis!</p>
					</div>
				</div>
				<div class="col-md-6 col-md-push-1 animate-box">
					<aside id="fh5co-slider-wrwap">
					<div class="flexslider">
						<ul class="slides">
					   	<li style="background-image: url(images/gallery_7.jpeg);">
					   		<div class="overlay-gradient"></div>
					   		<div class="container-fluid">
					   			<div class="row">
						   			<div class="col-md-12 col-md-offset-0 col-md-pull-10 slider-text slider-text-bg">
						   				<div class="slider-text-inner">
						   					<div class="desc">
													<h2>Crab <em>with</em> Curry Sources</h2>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt eveniet quae, numquam magnam doloribus eligendi ratione rem, consequatur quos natus voluptates est totam magni! Nobis a temporibus, ipsum repudiandae dolorum.</p>
													<p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
						   					</div>
						   				</div>
						   			</div>
						   		</div>
					   		</div>
					   	</li>
					   	<li style="background-image: url(images/gallery_6.jpeg);">
					   		<div class="overlay-gradient"></div>
					   		<div class="container-fluid">
					   			<div class="row">
						   			<div class="col-md-12 col-md-offset-0 col-md-pull-10 slider-text slider-text-bg">
						   				<div class="slider-text-inner">
						   					<div class="desc">
													<h2>Tuna <em>&amp;</em> Roast Beef</h2>
													<p>Ink is a free html5 bootstrap and a multi-purpose template perfect for any type of websites. A combination of a minimal and modern design template. The features are big slider on homepage, smooth animation, product listing and many more</p>
													<p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
						   					</div>
						   				</div>
						   			</div>
						   		</div>
					   		</div>
					   	</li>
					   	<li style="background-image: url(images/gallery_5.jpeg);">
					   		<div class="overlay-gradient"></div>
					   		<div class="container-fluid">
					   			<div class="row">
						   			<div class="col-md-12 col-md-offset-0 col-md-pull-10 slider-text slider-text-bg">
						   				<div class="slider-text-inner">
						   					<div class="desc">
													<h2>Egg <em>with</em> Mushroom</h2>
													<p>Ink is a free html5 bootstrap and a multi-purpose template perfect for any type of websites. A combination of a minimal and modern design template. The features are big slider on homepage, smooth animation, product listing and many more</p>
													<p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
						   					</div>
						   				</div>
						   			</div>
						   		</div>
					   		</div>
					   	</li>		   	
					  	</ul>
				  	</div>
				</aside>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-started" class="fh5co-section" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/footer_02.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Book a Table</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae enim quae vitae cupiditate, sequi quam ea id dolor reiciendis consectetur repudiandae. Rem quam, repellendus veniam ipsa fuga maxime odio? Eaque!</p>
					<p><a href="#" class="btn btn-primary btn-outline">Book Now</a></p>
				</div>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h4>犬服 kimonoyasuda</h4>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				</div>
				<div class="col-md-2 col-md-push-1 fh5co-widget">
					<h4>Links</h4>
					<ul class="fh5co-footer-links">
						<li><a href="<?php echo home_url(); ?>">Top</a></li>
						<li><a href="<?php echo home_url( '/school/' ); ?>">School</a></li>
						<li><a href="<?php echo home_url( '/order//' ); ?>">Order Made</a></li>
						<li><a href="<?php echo home_url( '/blog/' ); ?>">Yumiko's Eye</a></li>
						<li><a href="<?php echo home_url( 'contact/' ); ?>">Contact</a></li>
					</ul>
				</div>
<!--
				<div class="col-md-2 col-md-push-1 fh5co-widget">
					<h4>Categories</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Landing Page</a></li>
						<li><a href="#">Real Estate</a></li>
						<li><a href="#">Personal</a></li>
						<li><a href="#">Business</a></li>
						<li><a href="#">e-Commerce</a></li>
					</ul>
				</div>
-->
				<div class="col-md-4 col-md-push-1 fh5co-widget">
					<h4>Contact Information</h4>
					<ul class="fh5co-footer-links">
						<li>198 West 21th Street, <br> Suite 721 New York NY 10016</li>
						<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
						<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
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
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-instagram2"></i></a></li>
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
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- BgSwitcher -->
	<script src="js/jquery.bgswitcher.js"></script>
	
	<script>
		jQuery(function($) {
    		$('.fh5co-cover').bgSwitcher({
        		images: ['images/hero_y00.jpg','images/hero_y02.jpg','images/hero_y03.jpg'], // 切り替える背景画像を指定
    		});
		});
	</script>
	
	<!-- Main -->
	<script src="js/main.js"></script>
	<!-- jQuery UI --><!--
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/dark-hive/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script type="text/javascript">
		$(function() {
			$( "#tabs" ).tabs();
		});
	</script>
	-->
	<?php wp_footer(); ?>
	</body>
</html>
