<?php get_header(); //header.phpを取得 ?>

	<div id="fh5co-tabs" class="fh5co-section ar-content">
		<div class="container">
			<div class="row">
				<ul class="nav nav-tabs nav-justified">
					<li><a href="<?php echo home_url(); ?>">Top</a></li>
					<li class="active"><a href="<?php echo home_url( '/school/' ); ?>">犬服教室</a></li>
					<li><a href="<?php echo home_url( '/ordermade/' ); ?>">オーダーメイド</a></li>
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
					<h2>犬服教室</h2>
					<div class="row">
						<div class="col-md-6">
							<p>日本ペット服手作り協会公認の犬服教室です。ミシンが初めての方でも大丈夫。ハンドメイド歴がある方は、より深い学びにチャレンジしてみませんか？</p>
						</div>
					</div>
				</div>
				

				<div class="col-md-3 col-sm-4 fh5co-gallery_item">
					<div class="fh5co-bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/school_1.jpg);" data-trigger="zoomerang"></div>
					<div class="fh5co-bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/school_2.jpg);" data-trigger="zoomerang"></div>
				</div>
				<div class="col-md-6 col-sm-4 fh5co-gallery_item">
					<div class="fh5co-bg-img fh5co-gallery_big" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/school_5.jpg);" data-trigger="zoomerang"></div>
				</div>
				<div class="col-md-3 col-sm-4 fh5co-gallery_item">
					<div class="fh5co-bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/school_3.jpg);" data-trigger="zoomerang"></div>
					<div class="fh5co-bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/school_4.jpg);" data-trigger="zoomerang"></div>
				</div>
<!--
				<div class="col-md-3 col-sm-3 fh5co-gallery_item">
					<div class="fh5co-bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/school_5.jpg);" data-trigger="zoomerang"></div>
					<div class="fh5co-bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/school_6.jpg);" data-trigger="zoomerang"></div>
				</div>
				<div class="col-md-3 col-sm-3 fh5co-gallery_item">
					<div class="fh5co-bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/school_8.jpg);" data-trigger="zoomerang"></div>
					<div class="fh5co-bg-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/school_9.jpg);" data-trigger="zoomerang"></div>
				</div>
				<div class="col-md-6 col-sm-6 fh5co-gallery_item">
					<div class="fh5co-bg-img fh5co-gallery_big" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/school_10.jpg);" data-trigger="zoomerang"></div>
				</div>
-->
			</div>
		</div>
	</div>

	<div id="fh5co-blog" class="fh5co-section">
		<div class="container">

			<?php
			//　--------- 犬服教室を3件表示　---------
			//$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
			$args = array(
				'post_type'  => 'school',    // 「school」を読み込む
				'taxonomy' => 'seminar',
				'term' => 'beginner',
				'posts_per_page' => 3,         // 表示数　3件
			);
			$the_query = new WP_Query( $args );// 新規WP query を作成　変数args で定義したパラメータを参照
			if ( $the_query->have_posts() ) :
			// ここから表示する内容を記入
			?>
<!--
			<div class="row animate-box">
				<div class="col-md-10 col-md-offset-1 text-center fh5co-heading animate-box">
					<h2>犬服教室</h2>
					<p>コメント</p>
				</div>
			</div>
-->
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2>入門講座</h2>
				</div>

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
				<h2>犬服教室に投稿がみつかりません。</h2>
				<p><a href="<?php echo home_url(); ?>">トップページに戻る</a></p>
			<?php endif; ?>
			<p class="p-list-btn">
				<a class="list-btn" href="<?php echo home_url(); ?>/seminar/beginner/">入門講座 一覧</a>
			</p>
			<?php    // -------- 新着情報WP_query終了-----------
				wp_reset_postdata(); ?>      
		</div>
		<div class="container">

			<?php
			//　--------- 犬服教室を3件表示　---------
			$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
			$args = array(
				'post_type'  => 'school',    // 「school」を読み込む
				'taxonomy' => 'seminar',
				'term' => 'hobby',
				'posts_per_page' => 3,         // 表示数　3件
			);
			$the_query = new WP_Query( $args );// 新規WP query を作成　変数args で定義したパラメータを参照
			if ( $the_query->have_posts() ) :
			// ここから表示する内容を記入
			?>

			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2>ホビー講座</h2>
				</div>

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
				<h2>犬服教室に投稿がみつかりません。</h2>
				<p><a href="<?php echo home_url(); ?>">トップページに戻る</a></p>
			<?php endif; ?>
			<p class="p-list-btn">
				<a class="list-btn" href="<?php echo home_url(); ?>/seminar/hobby/">ホビー講座 一覧</a>
			</p>
			<?php    // -------- 新着情報WP_query終了-----------
				wp_reset_postdata(); ?>      
		</div>

    </div>

	<div id="fh5co-about" class="fh5co-section">
		<div class="container">
			<div class="row">
				<!--
				<div class="col-md-6 col-md-pull-4 img-wrap animate-box" data-animate-effect="fadeInLeft">
					<img src="images/hero_1.jpeg" alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
				</div>
				-->
				<div class="col-md-10 col-md-push-1 animate-box">
					<div class="section-heading">
						<h2>①教室の運営方法</h2>
						<p>・<a href="https://petwear.or.jp/" target=”_blank”>日本ペット服手作り協会</a>の教材を使用し、カリキュラムに沿って教室を運営しています。</p>
					</div>
				</div>
				<div class="col-md-10 col-md-push-1 animate-box">
					<div class="section-heading">
						<h2>②受講条件</h2>
						<p>どなたでも受講できます。</p>
						<p>まずは全員入門講座からスタート！</p>
						<div class="col-xs-12 fchart">
							<p class="text-center btn btn-outline center-block">入門講座（修了証をお渡しします）</p>
							<div class"row">
								<div class="col-xs-6 text-center">
									<p class="btn"><span class="glyphicon glyphicon-arrow-down"></span></p>
								</div>
								<div class="col-xs-6 text-center">
									<p class="btn"><span class="glyphicon glyphicon-arrow-down"></span></p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 text-center">
									<!--
									<p class="col-xs-12 center-block"><span class="col-xs-12 btn btn-outline">中級講座<br>（認定試験有り。認定証をお渡しします）</span></p>
									-->
									<p class="col-xs-12 btn btn-outline">中級講座<br>（認定試験有り。認定証をお渡しします）</p>
									<p class="col-xs-12 btn center-block"><span class="glyphicon glyphicon-arrow-down"></span></p>
									<p class="col-xs-12 btn btn-outline">上級講座<br>（認定試験有り。ドッグクリエイター&reg;取得）</p>
								</div>
								<div class="col-xs-6 text-center">
									<p class="col-xs-12 btn btn-outline">ホビー講座<br>※中級講座・上級講座と併用して受講できます。</p>
								</div>
							</div>
						</div>
						<p class="text-right">※必ず<a href="#" target=”_blank”>講座受講規約</a>をお読み下さい。</p>
					</div>
				</div>
				<div class="col-md-10 col-md-push-1 animate-box">
					<div class="section-heading">
						<h2>③入門講座の内容</h2>
						<p>Ⅰ. 入門講座　計３回（１回につき４時間の講座）</p>
						<div class="container-fluid">
							<div class"row">
								<div class="cover-flow">
									<img class="img-responsive img-rounded center-block"src="<?php echo get_template_directory_uri(); ?>/images/school_6.jpg"/>
									<p class="text-center">１回目</p>
								</div>
								<div class="cover-flow">
									<img class="img-responsive img-rounded center-block"src="<?php echo get_template_directory_uri(); ?>/images/school_7.jpg"/>
									<p class="text-center">２回目</p>
								</div>
								<div class="cover-flow">
									<img class="img-responsive img-rounded center-block"src="<?php echo get_template_directory_uri(); ?>/images/school_8.jpg"/>
									<p class="text-center">３回目</p>
								</div>
							</div>
						</div>
						<p>Ⅱ. 受講費用</p>
						<ul class="row-list1">
							<li>受講料 ー　21,120円（税込）</li>
							<li>テキスト＆型紙代 ー　2,255円（税込）</li>
							<li>入門講座教材費 ー　3,000円（税込）〜</li>
							<li class="list-unstyled">（サイズにより異なります。）</li>
							<li class="list-unstyled">※入門講座のみ教材は、こちらで準備します。</li>
						</ul>
					</div>
				</div>
				<div class="col-md-10 col-md-push-1 animate-box">
					<div class="section-heading">
						<h2>④持ち物（裁縫道具）</h2>
						<ul class="row-list">
							<li>裁ちハサミ</li>
							<li>まち針</li>
							<li>紙用ハサミ</li>
							<li>チャコ</li>
							<li>糸切ハサミ</li>
							<li>手縫い針　など</li>
						</ul>
					</div>
				</div>
				<div class="col-md-10 col-md-push-1 animate-box">
					<div class="section-heading">
						<h2>⑤募集講座</h2>
						<p><a href="<?php echo home_url( '/news/' ); ?>" >新着情報</a>をご覧下さい。</p>
					</div>
				</div>
				<div class="col-md-10 col-md-push-1 animate-box">
					<div class="section-heading">
						<h2>⑥ホビー講座の内容</h2>
						<p>Ⅰ. ホビー講座　（１回につき４時間の講座）<br>
						（１回で作品完成。入門講座を終了された方が受講できます。）</p>
						<p>作品例）</p>
						<div class="container-fluid">
							<div class"row">
								<div class="cover-flow">
									<img class="img-responsive img-rounded center-block"src="<?php echo get_template_directory_uri(); ?>/images/school_9.jpg"/>
									<p class="text-center">なみなみタンクトップ</p>
								</div>
								<div class="cover-flow">
									<img class="img-responsive img-rounded center-block"src="<?php echo get_template_directory_uri(); ?>/images/school_10.jpg"/>
									<p class="text-center">ちゃんちゃんこ</p>
								</div>
								<div class="cover-flow">
									<img class="img-responsive img-rounded center-block"src="<?php echo get_template_directory_uri(); ?>/images/school_11.jpg"/>
									<p class="text-center">パンプキンコスチューム</p>
								</div>
								<div class="cover-flow">
									<img class="img-responsive img-rounded center-block"src="<?php echo get_template_directory_uri(); ?>/images/school_12.jpg"/>
									<p class="text-center">浴衣</p>
								</div>
							</div>
						</div>
						<p>Ⅱ. 受講費用</p>
						<ul class="row-list1">
							<li>受講料 ー　7,040円（税込）</li>
							<li>テキスト＆型紙代</li>
							<li class="list-unstyled">※作品の内容、サイズの違いにより異なります。</li>
						</ul>
						<p>Ⅲ. 教材</p>
						<ul class="row-list1">
							<li class="list-unstyled">※ご自分でご準備いただきます。</li>
						</ul>
					</div>
				</div>
				<div class="col-md-10 col-md-push-1 animate-box">
					<div class="section-heading">
						<h2>⑦お申し込み方法</h2>
						<p>HP内<a href="<?php echo home_url( '/contact/' ); ?>" >お問い合わせフォーム</a>または、<a href="https://www.instagram.com/kimonoyasuda"><i class="icon-instagram2"></i>&nbsp;Instagram</a>のDMよりご連絡下さい。</p>
						<p><a href="<?php echo home_url( '/contact/' ); ?>" class="btn btn-primary btn-outline">Contact</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); //footer.phpを取得　PHPで終了するので閉じタグは不要です