<?php get_header(); //header.phpを取得 ?>

	<div id="fh5co-blog" class="fh5co-section">
		<div class="container">

			<div class="row animate-box">
				<div class="col-md-10 col-md-offset-1 text-center fh5co-heading animate-box">
					<h2><?php the_search_query(); ?> の検索結果</h2>
				</div>
			</div>
			<div class="row">

                <?php if ( have_posts() && get_search_query() ) : //条件分岐：投稿があるなら ?>
                	<?php while ( have_posts() ) : the_post();//繰り返し処理開始 ?>
                
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
                            		<!--
                            		<li><i class="icon-heart2"></i>1.2K</li>
                            		<li><i class="icon-eye2"></i>2K</li>
                            		-->
									<li><a href="<?php the_permalink(); ?>">Read More<i class="icon-arrow-right22"></i></a></li>
								</ul>
                        		</div> 
                    		</div>
                		</div>

                <?php // -------- 繰り返しここまで-----------
                endwhile; ?>
            </div>
			<?php else : // 条件分岐：投稿が無い場合は ?>
				<h2>Blogに投稿がみつかりません。</h2>
				<p><a href="<?php echo home_url(); ?>">トップページに戻る</a></p>
			<?php endif; ?>
			<div class="pager">
				<?php if (function_exists("pagination")) : 
					pagination($the_query->max_num_pages); ?>
				<?php endif; ?>
			</div>
			<?php    // -------- 新着情報WP_query終了-----------
				wp_reset_postdata(); ?>      
		</div>

    </div>

<?php get_footer(); //footer.phpを取得　PHPで終了するので閉じタグは不要です