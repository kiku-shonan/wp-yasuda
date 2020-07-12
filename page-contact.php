<?php get_header(); //header.phpを取得 ?>

	<div id="fh5co-tabs" class="fh5co-section ar-content">
		<div class="container">
			<div class="row">
				<ul class="nav nav-tabs nav-justified">
					<li><a href="<?php echo home_url(); ?>">Top</a></li>
					<li><a href="<?php echo home_url( '/school/' ); ?>">犬服教室</a></li>
					<li><a href="<?php echo home_url( '/ordermade/' ); ?>">オーダーメイド</a></li>
					<li><a href="<?php echo home_url( '/category/blog/' ); ?>">Yumiko's Eye</a></li>
					<li class="active"><a href="<?php echo home_url( '/contact/' ); ?>">Contact</a></li>
				</ul>
			</div>
		</div>
    </div>

	<div id="fh5co-contact" class="fh5co-section animate-box">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>お問い合わせ</h2>
					<p>犬服教室やオーダーについてのご質問等は、こちらからお問い合わせ下さい。<br>
					数日中にはお返事させて頂きます。もし、返信がない場合はお手数ですが<br>
					もう一度お問い合わせ頂くか&nbsp;<a href="https://www.instagram.com/kimonoyasuda"><i class="icon-instagram2"></i>&nbsp;Instagram</a>のダイレクトメッセージよりご連絡下さい。</p>
					<p><a href="mailto:info@yourdomainname.com" class="btn btn-primary btn-outline">E-mail</a></p>
				</div>
			</div>
			
			<div class="row">
				<div id="form-wrap" class="col-md-6 col-md-push-3 col-sm-6 col-sm-push-3">
					<?php if ( have_posts() ) : //条件分岐：投稿があるなら ?>
						<?php while ( have_posts() ) : the_post();//繰り返し処理開始 ?>
							<?php the_content(); //投稿（固定ページ）の本文を表示 ?>
				        <?php endwhile; // 繰り返し終了 ?>
					<?php else : //条件分岐：投稿が無い場合は ?>
						<h2>投稿がみつかりません。</h2>
						<p><a href="<?php echo home_url(); ?>">トップページに戻る</a></p>
					<?php endif; //条件分岐終了 ?>
				</div>
			</div>

		</div>
	</div>

<?php get_footer(); //footer.phpを取得　PHPで終了するので閉じタグは不要です