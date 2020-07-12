<?php get_header(); //header.phpを取得 ?>

	<div id="fh5co-tabs" class="fh5co-section ar-content">
		<div class="container">
			<div class="row">
				<ul class="nav nav-tabs nav-justified">
					<li><a href="<?php echo home_url(); ?>">Top</a></li>
					<li><a href="<?php echo home_url( '/school/' ); ?>">犬服教室</a></li>
					<li class="active"><a href="<?php echo home_url( '/ordermade/' ); ?>">オーダーメイド</a></li>
					<li><a href="<?php echo home_url( '/category/blog/' ); ?>">Yumiko's Eye</a></li>
					<li><a href="<?php echo home_url( '/contact/' ); ?>">Contact</a></li>
				</ul>
			</div>
		</div>
    </div>

	<div id="fh5co-gallery" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2>オーダーメイド犬服</h2>
					<div class="row">
						<div class="col-md-6">
							<p>飼い主さんのお洋服を犬服にリメイク…<br>特別な１着にお仕立てします。<br>
							ex.)&nbsp;&nbsp;ダックスましゃくんが噛んで穴の開いたトレーナーを「目玉Ｔシャツ」へリメイク。</p>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-sm-6 fh5co-gallery_item">
					<div class="fh5co-bg-img fh5co-gallery_big" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/gallery_1.jpg);" data-trigger="zoomerang"></div>
				</div>
				<div class="col-md-6 col-sm-6 fh5co-gallery_item">
					<div class="fh5co-bg-img fh5co-gallery_big" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/gallery_2.jpg);" data-trigger="zoomerang"></div>
				</div>
				<h3>オーダーメイド例</h3>
				<div class="col-md-3 col-sm-6 fh5co-gallery_item">
					<div class="fh5co-bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/gallery_3.jpg);" data-trigger="zoomerang"></div>
					<div class="fh5co-bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/gallery_4.jpg);" data-trigger="zoomerang"></div>
				</div>
				<div class="col-md-3 col-sm-6 fh5co-gallery_item">
					<div class="fh5co-bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/gallery_8.jpg);" data-trigger="zoomerang"></div>
					<div class="fh5co-bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/gallery_7.jpg);" data-trigger="zoomerang"></div>
				</div>
				<div class="col-md-6 col-sm-6 fh5co-gallery_item">
					<div class="fh5co-bg-img fh5co-gallery_big" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/gallery_10.jpg);" data-trigger="zoomerang"></div>
				</div>
				<div class="col-md-6 col-sm-6 fh5co-gallery_item">
					<div class="fh5co-bg-img fh5co-gallery_big" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/gallery_5.jpg);" data-trigger="zoomerang"></div>
				</div>	
				<div class="col-md-6 col-sm-6 fh5co-gallery_item">
					<div class="fh5co-bg-img fh5co-gallery_big" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/gallery_6.jpg);" data-trigger="zoomerang"></div>
				</div>

			</div>
		</div>
	</div>

	<div id="fh5co-about" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-push-1 animate-box">
					<div class="section-heading">
						<h2>①打ち合わせ</h2>
						<p>・採寸はワンちゃんにお会いして実寸を計ります。<br>・デザインは、その時にお伺いして決めて行きます。</p>
						<p>※お会いして打ち合わせ出来ない場合は、ご相談下さい。</p>
					</div>
				</div>
				<div class="col-md-10 col-md-push-1 animate-box">
					<div class="section-heading">
						<h2>②金額</h2>
						<p>・布（お洋服）持ち込み　ー　2,000円（税込）〜</p>
						<p>・生地（布）お任せも承ります　ー　3,000円（税込）〜</p>
					</div>
				</div>
				<div class="col-md-10 col-md-push-1 animate-box">
					<div class="section-heading">
						<h2>③お申し込み方法</h2>
						<p>HP内<a href="<?php echo home_url( '/contact/' ); ?>" >お問い合わせフォーム</a>または、<a href="https://www.instagram.com/kimonoyasuda"><i class="icon-instagram2"></i>&nbsp;Instagram</a>のDMよりご連絡下さい。</p>
						<p><a href="<?php echo home_url( '/contact/' ); ?>" class="btn btn-primary btn-outline">Contact</a></p>
					</div>
				</div>
				<div class="col-md-10 col-md-push-1 animate-box">
					<img class="img-responsive img-rounded center-block" src="<?php echo get_template_directory_uri(); ?>/images/gallery_11.jpg" />
					<!--
					<div class="fh5co-bg-img fh5co-gallery_big" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/gallery_11.jpg);" data-trigger="zoomerang"></div>
					-->
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-blog" class="fh5co-section">
		<div class="container">

			<?php
			//　--------- オーダーメイドを9件表示　---------
			//$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
			$args = array(
				'post_type'  => 'ordermade',    // 「ordermade」を読み込む
				'taxonomy' => 'genre',
				'posts_per_page' => 9,         // 表示数　9件
			);
			$the_query = new WP_Query( $args );// 新規WP query を作成　変数args で定義したパラメータを参照
			if ( $the_query->have_posts() ) :
			// ここから表示する内容を記入
			?>
			<div class="row">

                <?php while ( $the_query->have_posts() ) : $the_query->the_post();
                // -------- ここから繰り返し---------- ?>
                
                <div class="col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="<?php the_permalink(); ?>" class="blog-bg" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></a>
                        <div class="blog-text">
                        <!--
                        <span class="posted_on">Feb. 15th 2016</span>
                        -->
                        <span class="entry-date_month"><?php echo get_post_time('M');//投稿月を表示 ?></span>
                        <span class="entry-date_day"><?php the_time('d');//投稿日を表示 ?></span>
                        <span class="entry-date_year"><?php the_time('Y');//投稿年を表示 ?></span>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php echo get_the_custom_excerpt( get_the_content(), 50 ) ?> […]</p>
                        <ul class="stuff">
                            <li><i class="icon-heart2"></i><?php the_terms($post->ID,'genre'); ?></li>
							<li><a href="<?php the_permalink(); ?>">Read More<i class="icon-arrow-right22"></i></a></li>
						</ul>
                        </div> 
                    </div>
                </div>

                <?php // -------- 繰り返しここまで-----------
                endwhile; ?>
            </div>
			<?php else : // 条件分岐：投稿が無い場合は ?>
				<h2>オーダーメイド犬服に投稿がみつかりません。</h2>
				<p><a href="<?php echo home_url(); ?>">トップページに戻る</a></p>
			<?php endif; ?>
			<section class="clearfix">
				<?php wp_pagenavi(); ?>
			</section>
			<?php    // -------- 新着情報WP_query終了-----------
				wp_reset_postdata(); ?>      
		</div>

    </div>

<?php get_footer(); //footer.phpを取得　PHPで終了するので閉じタグは不要です