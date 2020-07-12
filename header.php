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

	<!--
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
	-->
	<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300;400;500;600;700&display=swap" rel="stylesheet">	
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); //使用中テーマディレクトリのURLを出力 ?>/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css">
	<!-- Lightbox -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css">
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); //使用中テーマのスタイルシートURLを出力 ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); //ピングバックURLを出力 ?>">

	<!-- Modernizr JS -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	<?php wp_head(); //wp_headはテーマの</head>タグ直前に必ず挿入します ?>

	</head>
	
	<body <?php body_class(); //bodyタグにページの種類に応じたクラス名を与える ?>>
    
	<div class="fh5co-loader"></div>
	
	<div id="page">

	<nav class="fh5co-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2 text-left logo-wrap">
						<div id="fh5co-logo">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo" height="70"></img>
							<!--
							<a href="<?php echo home_url(); //トップページのURLを出力 ?>">犬服 kimonoyasuda</a>
							-->
						</div>
					</div>
					<div class="col-xs-10 text-right menu-1 menu-wrap">
						<ul>
							<li class="active"><a href="<?php echo home_url(); //トップページのURLを出力 ?>">Top</a></li>
							<li><a href="<?php echo home_url( '/school/' ); ?>">犬服教室</a></li>
							<li><a href="<?php echo home_url( '/ordermade/' ); ?>">オーダーメイド犬服</a></li>
							<li><a href="<?php echo home_url( '/category/blog/' ); ?>">Yumiko's Eye</a></li>
							<li><a href="<?php echo home_url( '/contact/' ); ?>">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<header id="fh5co-page-header" class="fh5co-page-cover bg-slider" role="banner" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<!--
							<h1>犬服 kimonoyasuda</h1>
							<h2>Brought to you by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
							-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
