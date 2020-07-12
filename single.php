<?php get_header(); //header.phpを取得 ?>

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

	<div id="fh5co-blog" class="fh5co-section">
		<div class="container">

			<?php if ( have_posts() ) : //条件分岐：投稿があるなら ?>
				<?php while ( have_posts() ) : the_post();//繰り返し処理開始 ?>

					<?php if (has_post_thumbnail()): ?>
						<div class="col-md-10 col-md-offset-1 text-center fh5co-heading animate-box">
							<h2>Blog</h2>
						</div>
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
								<div class="fh5co-blog animate-box">
									<a href="<?php the_permalink(); ?>" class="blog-img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></a>
									<div class="blog-text">
										<div class="col-xs-6">
											<span class="entry-date_month"><?php echo get_post_time('M');//投稿月を表示 ?></span>
											<span class="entry-date_day"><?php the_time('d');//投稿日を表示 ?></span>
											<span class="entry-date_year"><?php the_time('Y');//投稿年を表示 ?></span>
										</div>
										<div class="col-xs-6">
											<p class="list-btn pull-right"><?php the_category(','); ?></p>
										</div>
										<div class="col-xs-12">
											<h3><a href="<?php the_permalink(); ?>"><?php the_title(); //投稿（固定ページ）のタイトルを表示 ?></a></h3>
											<p><?php echo get_the_content(); ?></p>
											<ul class="stuff">
												<li><?php echo do_shortcode('[addtoany]'); ?></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
								<div class="fh5co-blog animate-box">
									<div class="blog-text">
										<div class="col-md-10 col-md-offset-1"><?php comments_template(); //コメントテンプレートを取得 ?></div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
								<div class="row">
									<div class="col-xs-6"><?php next_post_link('%link', '&laquo; 次の記事' ); //新しい記事へのリンクを表示 ?></div>
									<div class="col-xs-6 text-right"><?php previous_post_link('%link', '前の記事 &raquo;' ); //古い記事へのリンクを表示 ?></div>
								</div>
							</div>
						</div>
				
					<?php endif; ?>
				<?php endwhile; // 繰り返し終了 ?>
					<?php else : //条件分岐：投稿が無い場合は ?>
						<h2>投稿がみつかりません。</h2>
						<p><a href="<?php echo home_url(); ?>">トップページに戻る</a></p>
					<?php endif; //条件分岐終了 ?>
				<!--
				<section class="clearfix">
					<?php wp_pagenavi(); ?>
				</section>
				-->
			</div>
		</div>
	</div>

<?php get_footer(); //footer.phpを取得　PHPで終了するので閉じタグは不要です