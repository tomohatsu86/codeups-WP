<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head prefix="og: http://ogp.me/ns#">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  if( is_single() && !is_home() || is_page() && !is_front_page()) {
  //タイトル
  $title = get_the_title();
  //ディスクリプション
  if(!empty($post->post_excerpt)) {
    $description = str_replace(array("\r\n", "\r", "\n", "&nbsp;"), '', strip_tags($post->post_excerpt));
  } elseif(!empty($post->post_content)) {
    $description = str_replace(array("\r\n", "\r", "\n", "&nbsp;"), '', strip_tags($post->post_content));
    $description_count = mb_strlen($description, 'utf8');
    if($description_count > 120) {
      $description = mb_substr($description, 0, 120, 'utf8').'…';
    }
  } else {
    $description = '';
  }
  //ページタイプ
  $page_type = 'article';
  //ページURL
  $page_url = get_the_permalink();
  //OGP用画像
  if(!empty(get_post_thumbnail_id())) {
    $ogp_img_data = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');
    $ogp_img = $ogp_img_data[0];
  }
  }else { //ループのページ(home・カテゴリー・タグなど)
  //先に投稿・固定ページ以外の詳細な条件分岐
  if(is_category()) {
    $title = single_cat_title("", false).'の記事一覧';
    if(!empty(category_description())) {
      $description = strip_tags(category_description());
    } else {
      $description = 'カテゴリー『'.single_cat_title("", false).'』の記事一覧ページです。';
    }
  }elseif(is_tag()) {
    $title = single_cat_title("", false).'の記事一覧';
    if(!empty(tag_description())) {
      $description = strip_tags(tag_description());
    } else {
      $description = 'タグ『'.single_cat_title("", false).'』の記事一覧ページです。';
    }
  }else {
    $title = '';
    $description = get_bloginfo( 'description' );
  }
  //ページタイプ
  $page_type = 'website';
  //ページURL
  $http = is_ssl() ? 'https'.'://' : 'http'.'://';
  $page_url = $http.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
  }
  //OGP用画像
  if(empty($ogp_img)) {
    $ogp_img = get_template_directory_uri().'/assets/img/top/top-mv8.jpg';//サイト全てに共通の画像へのパス
  }
  //タイトル
  if(!empty($title)) {
    $output_title = $title.' | '.get_bloginfo('name');
  } else {
    $title = get_bloginfo('name');
    $output_title = get_bloginfo('name');
  }
  ?>
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $output_title; ?></title>
  <!-- SEO系 -->
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="keywords" content="" />
  <!-- OGP -->
  <meta property="og:title" content="<?php echo $title; ?>">
  <meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>">
  <meta property="og:description" content="<?php echo $description; ?>">
  <meta property="og:type" content="<?php echo $page_type; ?>">
  <meta property="og:url" content="<?php echo $page_url; ?>">
  <meta property="og:image" content="<?php echo $ogp_img; ?>">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@tomohatsuchi86">
  <meta name="format-detection" content="telephone=no">
  <!-- タッチアイコン -->
  <link rel="apple-touch-icon" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo/apple-touch-icon.png">
  <link rel="icon" type="image/png" size="256x256" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo/android-chrome.png">
  <link rel="shortcut icon" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo/favicon.ico">
  <!-- ファビコン -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo/favicon.ico" />  
  <meta name=”robots” content=”noindex”>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <!-- ヘッダー -->
  <header class="p-header l-header js-header">
    <div class="p-header__inner">
      <h1 class="p-header__logo c-logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="c-logo__link">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/logo/CodeUps.svg" alt="ロゴ">
        </a>
      </h1>
      
      <!-- PC-グローバルナビ -->
      <?php
      $defaults = array(
        'theme_location'  => 'global',
        'depth'           => 1,
        'container'       => 'nav',
        'container_id'    => false,
        'container_class' => 'p-header-nav p-pc-global-nav',
        'menu_class'      => 'p-pc-global-nav__items',//ulのクラス
        'menu_id'         => false,
        'add_li_class'    => 'p-pc-global-nav__item', // liタグへclass追加
        'add_a_class'     => 'nav-link' // aタグへclass追加
      );
      wp_nav_menu( $defaults );
      ?>

      <!-- <div class="p-header-nav p-pc-global-nav">
        <ul class="p-pc-global-nav__items">
          <li class="p-pc-global-nav__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップ</a></li>
          <li class="p-pc-global-nav__item"><a href="<?php echo get_template_directory_uri() ?>/archive-news.php">お知らせ</a></li>
          <li class="p-pc-global-nav__item"><a href="<?php echo get_template_directory_uri() ?>/page-content.php">事業内容</a></li>
          <li class="p-pc-global-nav__item"><a href="<?php echo get_template_directory_uri() ?>/archive-works.php">制作実績</a></li>
          <li class="p-pc-global-nav__item"><a href="<?php echo get_template_directory_uri() ?>/page-overview.php">企業概要</a></li>
          <li class="p-pc-global-nav__item"><a href="<?php echo get_template_directory_uri() ?>/archive-blog.php">ブログ</a></li>
          <li class="p-pc-global-nav__item p-pc-global-nav__item--white"><a href="<?php echo get_template_directory_uri() ?>/page-contact.php">お問い合わせ</a></li>
        </ul>
      </div> -->

      <!-- ドロワーメニューボタン -->
      <button class="p-header__drawer c-hamburger js-drawer">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
    
    <!-- sp-グローバルナビ -->
    <?php
      $defaults = array(
        'theme_location'  => 'drawer',
        'depth'           => 1,
        'container'       => 'nav',
        'container_id'    => false,
        'container_class' => 'p-header-nav p-sp-global-nav js-drawer-menu',
        'menu_class'      => 'p-sp-global-nav__items',//ulのクラス
        'menu_id'         => false,
        'add_li_class'    => 'p-sp-global-nav__item', // liタグへclass追加
        'add_a_class'     => 'drawer-nav-link' // aタグへclass追加
      );
      wp_nav_menu( $defaults );
      ?>

    <!-- <div class="p-header-nav p-sp-global-nav js-drawer-menu">
      <ul class="p-sp-global-nav__items">
        <li class="p-sp-global-nav__item"><a href="<?php echo home_url(); ?>">トップ</a></li>
        <li class="p-sp-global-nav__item"><a href="<?php echo home_url( '/archive-news/'); ?>">お知らせ</a></li>
        <li class="p-sp-global-nav__item"><a href="<?php echo get_template_directory_uri() ?>/page-content.php">事業内容</a></li>
        <li class="p-sp-global-nav__item"><a href="<?php echo get_template_directory_uri() ?>/archive-works.php">制作実績</a></li>
        <li class="p-sp-global-nav__item"><a href="<?php echo get_template_directory_uri() ?>/page-overview.php">企業概要</a></li>
        <li class="p-sp-global-nav__item"><a href="<?php echo get_template_directory_uri() ?>/archive-blog.php">ブログ</a></li>
        <li class="p-sp-global-nav__item"><a href="<?php echo get_template_directory_uri() ?>/page-contact.php">お問い合わせ</a></li>
      </ul>
    </div> -->

  </header>
  <main>