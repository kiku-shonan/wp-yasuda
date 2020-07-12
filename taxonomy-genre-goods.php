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

	<div id="fh5co-blog" class="fh5co-section">
		<div class="container">

			<?php
			//　--------- オーダーメイド犬服を9件表示　---------
			//$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
			$args = array(
				'post_type'  => 'ordermade',    // 「投稿」を読み込む
				'taxonomy' => 'genre',
				'term' => 'goods',
				'posts_per_page' => 9,         // 表示数　9件
			//	'paged' => $paged
			);
			$the_query = new WP_Query( $args );// 新規WP query を作成　変数args で定義したパラメータを参照
			if ( $the_query->have_posts() ) :
			// ここから表示する内容を記入
			?>

			<div class="row animate-box">
				<div class="col-md-10 col-md-offset-1 text-center fh5co-heading animate-box">
					<h2>オーダーメイド犬服</h2>
					<p class="list-btn">グッズ</p>
				</div>
			</div>
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
                            <li><i class="icon-eye2"></i><?php the_terms($post->ID,'genre'); ?></li>
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