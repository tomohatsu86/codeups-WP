<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <!-- ヘッダー -->
  <header class="p-header l-header">
    <div class="p-header__inner">
      <h1 class="p-header__logo c-logo">
        <a href="<?php echo home_url(); ?>" class="c-logo__link">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/logo/CodeUps.svg" alt="ロゴ">
        </a>
      </h1>
      
      <!-- PC-グローバルナビ -->
      <div class="p-header-nav p-pc-global-nav">
        <ul class="p-pc-global-nav__items">
          <li class="p-pc-global-nav__item"><a href="<?php echo home_url(); ?>">トップ</a></li>
          <li class="p-pc-global-nav__item"><a href="<?php echo get_template_directory_uri() ?>/archive-news.php">お知らせ</a></li>
          <li class="p-pc-global-nav__item"><a href="<?php echo get_template_directory_uri() ?>/page-content.php">事業内容</a></li>
          <li class="p-pc-global-nav__item"><a href="<?php echo get_template_directory_uri() ?>/archive-works.php">制作実績</a></li>
          <li class="p-pc-global-nav__item"><a href="<?php echo get_template_directory_uri() ?>/404.php">企業概要</a></li>
          <li class="p-pc-global-nav__item"><a href="<?php echo get_template_directory_uri() ?>/archive-blog.php">ブログ</a></li>
          <li class="p-pc-global-nav__item p-pc-global-nav__item--white"><a href="<?php echo get_template_directory_uri() ?>/page-contact.php">お問い合わせ</a></li>
        </ul>
      </div>

      <!-- ドロワーメニューボタン -->
      <button class="p-header__drawer c-hamburger js-drawer-open" id="menu-button">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
    
    <!-- sp-グローバルナビ -->
    <div class="p-header-nav p-sp-global-nav js-drawer-menu">
      <ul class="p-sp-global-nav__items">
        <li class="p-sp-global-nav__item"><a href="<?php echo home_url(); ?>">トップ</a></li>
        <li class="p-sp-global-nav__item"><a href="<?php echo get_template_directory_uri() ?>/archive-news.php">お知らせ</a></li>
        <li class="p-sp-global-nav__item"><a href="<?php echo get_template_directory_uri() ?>/page-content.php">事業内容</a></li>
        <li class="p-sp-global-nav__item"><a href="<?php echo get_template_directory_uri() ?>/archive-works.php">制作実績</a></li>
        <li class="p-sp-global-nav__item"><a href="<?php echo get_template_directory_uri() ?>/page-overview.php">企業概要</a></li>
        <li class="p-sp-global-nav__item"><a href="<?php echo get_template_directory_uri() ?>/archive-blog.php">ブログ</a></li>
        <li class="p-sp-global-nav__item"><a href="<?php echo get_template_directory_uri() ?>/page-contact.php">お問い合わせ</a></li>
      </ul>
    </div>

  </header>