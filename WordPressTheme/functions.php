<?php
/**
 * Functions
 */

/**
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */
function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );



/**
 * CSSとJavaScriptの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function my_script_init()
{

	wp_enqueue_style( 'my', get_template_directory_uri() . '/assets/css/style.css', array('swiper'), '1.0.1', 'all' );
	wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/swiper/swiper-bundle.min.css', array(), '1.0.1', 'all' );

	wp_enqueue_script( 'my', get_template_directory_uri() . '/assets/js/script.js', array( 'swiper' ), '1.0.1', true );
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/swiper/swiper-bundle.min.js', array(), '1.0.1', true );
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.js', array(), '3.5.1', true );

}
add_action('wp_enqueue_scripts', 'my_script_init');




/**
 * メニューの登録
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */
function my_menu_init() {
	register_nav_menus(
		array(
			'global'  => 'グローバルメニュー',
			'utility' => 'ユーティリティメニュー',
			'drawer'  => 'ドロワーメニュー',
			'footer-sp'  => 'フッターメニューSP',
			'footer-pc'  => 'フッターメニューPC',
		)
	);
}
add_action( 'init', 'my_menu_init' );
/**
 * メニューの登録
 *
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */


// wp_nav_menuのliにclass追加
function add_additional_class_on_li($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
// wp_nav_menuのaにclass追加
function add_additional_class_on_a($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_a_class;
  }
  return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);


/**
 * ウィジェットの登録
 *
 * @codex http://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_sidebar
 */
// function my_widget_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => 'サイドバー',
// 			'id'            => 'sidebar',
// 			'before_widget' => '<div id="%1$s" class="p-widget %2$s">',
// 			'after_widget'  => '</div>',
// 			'before_title'  => '<div class="p-widget__title">',
// 			'after_title'   => '</div>',
// 		)
// 	);
// }
// add_action( 'widgets_init', 'my_widget_init' );


/**
 * アーカイブタイトル書き換え
 *
 * @param string $title 書き換え前のタイトル.
 * @return string $title 書き換え後のタイトル.
 */
function my_archive_title( $title ) {

	if ( is_home() ) { /* ホームの場合 */
		$title = 'お知らせ';
	} elseif ( is_category() ) { /* カテゴリーアーカイブの場合 */
		$title = '' . single_cat_title( '', false ) . '';
	} elseif ( is_tag() ) { /* タグアーカイブの場合 */
		$title = '' . single_tag_title( '', false ) . '';
	} elseif ( is_post_type_archive() ) { /* 投稿タイプのアーカイブの場合 */
		$title = '' . post_type_archive_title( '', false ) . '';
	} elseif ( is_tax() ) { /* タームアーカイブの場合 */
		$title = '' . single_term_title( '', false );
	} elseif ( is_search() ) { /* 検索結果アーカイブの場合 */
		$title = '「' . esc_html( get_query_var( 's' ) ) . '」の検索結果';
	} elseif ( is_author() ) { /* 作者アーカイブの場合 */
		$title = '' . get_the_author() . '';
	} elseif ( is_date() ) { /* 日付アーカイブの場合 */
		$title = '';
		if ( get_query_var( 'year' ) ) {
			$title .= get_query_var( 'year' ) . '年';
		}
		if ( get_query_var( 'monthnum' ) ) {
			$title .= get_query_var( 'monthnum' ) . '月';
		}
		if ( get_query_var( 'day' ) ) {
			$title .= get_query_var( 'day' ) . '日';
		}
	}
	return $title;
};
add_filter( 'get_the_archive_title', 'my_archive_title' );


/**
 * 抜粋文の文字数の変更
 *
 * @param int $length 変更前の文字数.
 * @return int $length 変更後の文字数.
 */
function my_excerpt_length( $length ) {
	return 38;
}
add_filter( 'excerpt_length', 'my_excerpt_length', 999 );


/**
 * 抜粋文の省略記法の変更
 *
 * @param string $more 変更前の省略記法.
 * @return string $more 変更後の省略記法.
 */
function my_excerpt_more( $more ) {
	return '...';

}
add_filter( 'excerpt_more', 'my_excerpt_more' );



// 投稿ページのページネーションに関して
//prev_post_linkとnext_post_linkのaタグにクラスを付与
function add_prev_post_link_class($output) {
  return str_replace('<a href=', '<a class="previouspostslink" href=', $output);
}
add_filter( 'previous_post_link', 'add_prev_post_link_class' );

function add_next_post_link_class($output) {
  return str_replace('<a href=', '<a class="nextpostslink" href=', $output);
}
add_filter( 'next_post_link', 'add_next_post_link_class' ); 

// 参考：https://www.nxworld.net/wp-add-class-previous-posts-link-and-next-posts-link.html


// アーカイブページのメインクエリのデータ取得条件を変更する
function my_custom_query_vars( $query ) {
	if ( !is_admin() && $query->is_main_query()) {
		// ページによって条件変更
			if ( is_post_type_archive('blog') || is_tax('blog_category')) {
					$query->set( 'posts_per_page' , 9 );

			}elseif( is_post_type_archive('works') || is_tax('works_category')) {
					$query->set( 'posts_per_page' , 6 );

			}elseif( is_post_type_archive('news') || is_tax('works_category')) {
					$query->set( 'posts_per_page' , 10 );
					
			}
	}
	return $query;
}
add_action( 'pre_get_posts', 'my_custom_query_vars' );


// MW WP form でpタグが自動挿入されるのを無効にする
function mvwpform_autop_filter() {
  if ( class_exists( 'MW_WP_Form_Admin' ) ) {
    $mw_wp_form_admin = new MW_WP_Form_Admin();
    $forms = $mw_wp_form_admin->get_forms();
    foreach ( $forms as $form ) {
      add_filter( 'mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false' );
    }
  } 
}
mvwpform_autop_filter();


//-------------------------------------------------------
// MW WP form でエラーメッセージの変更
function my_error_message($error, $key, $rule){
	if($key === 'input' && $rule === 'noempty'){
			return '※必要事項を入力してください';
	}
	return $error;
}
add_filter('mwform_error_message_mw-wp-form-300', 'my_error_message', 10, 3);


//-------------------------------------------------------
// MW WP form でエラーメッセージをひとつにまとめる
// function add_mwform_validation_rule( $Validation, $data ) {
// 	$validation_message = 'いずれかの項目が未入力です。';
//   if ( empty( $data['会社名'] ) ) {
// 		$Validation->set_rule( '会社名', 'noempty', array( 'message' => $validation_message ) );
//   } elseif ( empty( $data['名前'] ) ) {
// 		$Validation->set_rule( '名前', 'noempty', array( 'message' => $validation_message ) );
//   } elseif ( empty( $data['ふりがな'] ) ) {
// 		$Validation->set_rule( 'ふりがな', 'noempty', array( 'message' => $validation_message ) );
//   } elseif ( empty( $data['メール'] ) ) {
// 		$Validation->set_rule( 'メール', 'noempty', array( 'message' => $validation_message ) );
//   } elseif ( empty( $data['内容'] ) ) {
// 		$Validation->set_rule( '内容', 'noempty', array( 'message' => $validation_message ) );
//   }
//   return $Validation;
// }
// add_filter( 'mwform_validation_mw-wp-form-312', 'add_mwform_validation_rule', 10, 2 );

//↓上記をforeachで書き直す↓ 
function add_mwform_validation_rule( $Validation, $data ) {
	$validation_message = '※必要事項を入力してください';
	$args = array(
		'会社名',
		'名前',
		'ふりがな',
		'メール',
		'内容'
	);
	foreach($args as $val){
		if ( empty( $data[$val] ) ) {
			$Validation->set_rule( $val, 'noempty', array( 'message' => $validation_message ) );
			return $Validation;
		} 
	}
}
add_filter( 'mwform_validation_mw-wp-form-312', 'add_mwform_validation_rule', 10, 2 );
