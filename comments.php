<?php if( comments_open() ){ ?>
	<div id="comments">
		<h3>Comments</h3>
		<?php if( have_comments() ){ ?>
		<ol id="comments-list">
			<?php wp_list_comments(); ?>
		</ol>
		<?php } ?>
		<?php comment_form(array('fields' => array(
        'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' . '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245"' . $aria_req . $html_req . ' /></p>',
        'email'  => '<input id="email" name="email" type="hidden" value="' . substr(md5($_SERVER["REMOTE_ADDR"].'kimonoyasuda'), 11, 10) . '@kimonoyasuda.jp' . '" />',
        'url'    => '',
        ),
        'title_reply' => 'コメントする',
        'comment_notes_before' => '<p>メッセージは承認後に反映されます。承認には数日かかる場合があります。</p>',
		//'comment_notes_after'  => '<p>コメント記入欄の下に表示するメッセージ</p>',
		'label_submit' => 'Submit'
        )); ?>
	</div>
<?php } ?>