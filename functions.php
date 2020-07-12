<?php

/**
 * ウィジェットエリアを定義します。
 */
register_sidebar(array(

  'name'          => 'デモサイトのサイドバー',
  'id'            => 'primary-widget-area',
  'description'   => 'サイドバーに表示されるウィジェットエリアです。',
  'before_widget' => '<section id="%1$s" class="widget %2$s">',
  'after_widget'  => '</section>',
  'before_title'  => '<h3 class="widget-title">',
  'after_title'   => '</h3>',

));
	
function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
  
if(empty($first_img)){ //Defines a default image
        $first_img = "/images/image.jpg";
    }
    return $first_img;
}

register_post_type(
'ordermade',
  array(
  // 'supports'に'thumbnail'を追記
  'supports' => array('title','editor','thumbnail','comments') 
  )
);
register_post_type(
'school',
  array(
  // 'supports'に'thumbnail'を追記
  'supports' => array('title','editor','thumbnail','comments') 
  )
);

// アイキャッチ画像の有効化

add_theme_support( 'post-thumbnails', array( 'post','page','news','ordermade','school' ) );

function search_template_redirect() {
  global $wp_query;
  $wp_query->is_search = true;
  $wp_query->is_home = false;
  if (file_exists(TEMPLATEPATH . '/search.php')) { 
    include(TEMPLATEPATH . '/search.php');
  }
  exit;
}
if (isset($_GET['s']) && $_GET['s'] == false) {
  add_action('template_redirect', 'search_template_redirect');
}

/*
function pagination($pages = '', $range = 1)
{
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><div class=\"pagination-box\"><span class=\"page-of\">Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">&rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div></div>\n";
     }
}

function change_posts_per_page( $query ) {
  if ( is_admin() || ! $query->is_main_query() ) {
    return;
  }
  if ( $query->is_search() ) {
    $query->set( 'posts_per_page', 9 );
  }
  if ( $query->is_category() ) {
    $query->set( 'posts_per_page', 9 );
  }
  if ( $query->is_archive('news') ) { //カスタム投稿タイプを指定
        $query->set( 'posts_per_page', 9 ); //表示件数を指定
  }
  if ( $query->is_archive('ordermade') ) { //カスタム投稿タイプを指定
        $query->set( 'posts_per_page', 12 ); //表示件数を指定
  }
    if ( $query->is_tax() ) { //カスタム投稿タイプを指定
        $query->set( 'posts_per_page', 12 ); //表示件数を指定
  }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );
*/

//本文抜粋を取得する関数
//使用方法：http://nelog.jp/get_the_custom_excerpt
function get_the_custom_excerpt($content, $length) {
  $length = ($length ? $length : 70);//デフォルトの長さを指定する
  $content =  preg_replace('/<!--more-->.+/is',"",$content); //moreタグ以降削除
  $content =  strip_shortcodes($content);//ショートコード削除
  $content =  strip_tags($content);//タグの除去
  $content =  str_replace("&nbsp;","",$content);//特殊文字の削除（今回はスペースのみ）
  $content =  mb_substr($content,0,$length);//文字列を指定した長さで切り取る
  return $content;
}
//コメント欄タグを無効化
function my_comment_tag_disable($data) {
	global $allowedtags;
	$allowedtags = array();
	return $data;
}
add_filter('preprocess_comment', 'my_comment_tag_disable');
remove_filter('comment_text', 'make_clickable', 9);