<?php get_header('index'); //header.phpを取得 ?>

	<div id="fh5co-tabs" class="fh5co-section ar-content">
		<div class="container">
			<div class="row">
				<ul class="nav nav-tabs nav-justified">
					<li class="active"><a href="<?php echo home_url(); ?>">Top</a></li>
					<li><a href="<?php echo home_url( '/school/' ); ?>">犬服教室</a></li>
					<li><a href="<?php echo home_url( '/ordermade/' ); ?>">オーダーメイド</a></li>
					<li><a href="<?php echo home_url( '/category/blog/' ); ?>">Yumiko's Eye</a></li>
					<li><a href="<?php echo home_url( '/contact/' ); ?>">Contact</a></li>
				</ul>
			</div>
		</div>
    </div>

	<div id="fh5co-featured-testimony" class="fh5co-section">
		<div class="container fh5co-section">
			<div class="row">
				<div class="col-md-8 col-xs-12 cover-row center-block">
					<div class="cover-img" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/top01.jpg);">
						<div class="col-xs-12 cover-text center-block">
							<p>富山初&#133;</br>
							<a href="<?php echo home_url( '/ordermade/' ); ?>">ドッグウェアクリエイター&reg;</a>認定講師の</p>
							<p class="text-right">Yumikoです。</p>
						</div>
					</div>
					<div class="overlay"></div>
				</div>
			</div>
		</div>
		<div class="container fh5co-section">
			<div class="row">
				<div class="col-md-8 col-xs-12 cover-row center-block">
					<div class="cover-img" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/top02.jpg);">
						<div class="col-xs-12 cover-text center-block">
							<p>先代が始めた</br>
							呉服店「きものやすだ」がアトリエ。</p>
							<p class="text-height">その空間で</br>
							<a href="https://petwear.or.jp/" target=”_blank”>日本ペット服手作り協会</a>公認の</p>
							<p class="text-right">犬服教室を始めました。</p>
						</div>
					</div>
					<div class="overlay"></div>
				</div>
			</div>
		</div>
		<div class="container fh5co-section">
			<div class="row">
				<div class="col-md-8 col-xs-12 cover-row center-block">
					<div class="cover-img" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/top03.jpg);">
						<div class="col-xs-12 cover-text center-block">
							<p>ミシンが初めての方は教室内で</p>
							<p class="text-right">練習してスタート。</p>
							<p>ハンドメイド歴がある方は、</p>
							<p class="text-right">より深い学びにチャレンジ。</p>
							<p>「犬服」「手作り」「素敵なLIFE」</p>
							<p class="text-right">はじめませんか？</p>
						</div>
					</div>
					<div class="overlay"></div>
				</div>
			</div>
		</div>
	</div>
    <?php
   	//　--------- Newsを3件表示　---------
   	$args = array(
   		'post_type'  => 'news',     // 「news」を読み込む
   		'taxonomy' => 'update',
   		'posts_per_page' => 3        // 表示数　3件
   	);
   	$the_query = new WP_Query( $args );// 新規WP query を作成　変数args で定義したパラメータを参照
   	if ( $the_query->have_posts() ) :
   	// ここから表示する内容を記入
    ?>
	
	<div id="fh5co-blog" class="fh5co-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-10 col-md-offset-1 text-center fh5co-heading animate-box">
					<h2>新着情報</h2>
					<p>更新情報や講習開催等のお知らせ致します。</p>
				</div>
			</div>
			<div class="row">
				
				<?php while ( $the_query->have_posts() ) : $the_query->the_post();
				// -------- ここから繰り返し---------- ?>
				
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="<?php the_permalink(); ?>" class="blog-bg" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></a>
						<div class="blog-text">
							<span class="entry-date_month"><?php echo get_post_time('M');//投稿月を表示 ?></span>
							<span class="entry-date_day"><?php the_time('d');//投稿日を表示 ?></span>
							<span class="entry-date_year"><?php the_time('Y');//投稿年を表示 ?></span>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php echo get_the_custom_excerpt( get_the_content(), 50 ) ?> […]</p>
							<ul class="stuff">
								<li><i class="icon-heart2"></i><?php the_terms($post->ID,'update'); ?></li>
								<li><a href="<?php the_permalink(); ?>">Read More<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div> 
					</div>
				</div>
				
				<?php // -------- 繰り返しここまで-----------
				endwhile; ?>
				
			</div>
			
			<p class="p-list-btn">
				<a class="list-btn" href="<?php echo home_url(); ?>/news/">News 一覧</a>
			</p>
		</div>
		
		<?php else : // 条件分岐：投稿が無い場合は ?>
			<h2>Newsに投稿がみつかりません。</h2>
			<p><a href="<?php echo home_url(); ?>">トップページに戻る</a></p>
		<?php
     	// -------- 新着情報WP_query終了-----------
    	wp_reset_postdata();
    	endif;
    	?>
	</div>

<?php get_footer(); //footer.phpを取得　PHPで終了するので閉じタグは不要です