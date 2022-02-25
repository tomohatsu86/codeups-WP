<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
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