<?php get_header(); ?>

<!-- メインビュー -->
<div class="p-mv">
  <div class="p-mv__container p-mv-swiper swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="p-mv-slide-img">
          <img src="<?php echo get_template_directory_uri() ?>./assets/img/top/top-mv1.jpg" alt="画像：オフィスビルを見上げた景色">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="p-mv-slide-img">
          <img src="<?php echo get_template_directory_uri() ?>./assets/img/top/top-mv2.jpg" alt="画像：オフィスビルを見上げた画像">
        </div>
      </div>
      <div class="swiper-slide">
        <div class="p-mv-slide-img">
          <img src="<?php echo get_template_directory_uri() ?>./assets/img/top/top-mv3.jpg" alt="画像：オフィス街を見下ろした画像">
        </div>
      </div>
    </div>
  </div>
  <div class="p-mv__text">
    <span class="p-mv__title">メインタイトルが入ります</span>
    <span class="p-mv__sub-title">サブタイトルが入ります</span>
  </div>
</div>

<!-- お知らせ -->
<section class="p-news l-news-top" id="p-news">
  <div class="p-news__inner">
    <div class="p-news__contents">
      <ul class="p-news__content p-posts">
        <li class="p-posts__item p-post">
          <div class="p-post__header p-post-head">
            <time class="p-post-head__date c-date" datetime="2020-07-20">2020.07.20</time>
            <span class="p-post-head__label c-label">お知らせ</span>
          </div>
          <div class="p-post__body p-hover--underline">
            <a href="#" class="">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。</a>
          </div>
        </li>
      </ul>
      <div class="p-news__btn">
        <a href="./archive-p-news.html" class="c-btn-all">すべて見る</a>
      </div>
      </div>
    </div>
  </section>









<?php get_footer(); ?>