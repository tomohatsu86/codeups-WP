<?php get_header(); ?>

<!-- 事業内容メインビュー -->
<div class="p-page-content-mv p-underlayer-mv">
  <div class="p-underlayer-mv__container">
    <div class="p-underlayer-mv__text">
      <span class="mv__title"><?php echo get_the_title('131'); ?></span>
    </div>
  </div>
</div>

<!-- パンくずリスト -->
<?php get_template_part('template-parts/breadcrumb'); ?>

<!-- 企業理念 -->
<section class="p-page-content p-page-content-top" id="p-page-content">
  <div class="l-inner">
    <div class="p-page-content__head">
      <h2 class="p-page-content__title">企業理念</h2>
      <p class="p-page-content__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
    </div>
  </div>

  <div class="p-page-content__contents">
    <span id="item01" class="l-link-position"></span>
    <div class="p-page-content__item p-media">
      <div class="p-media__inner">
        <figure class="p-media__img">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/page-content/page-content-img1.jpg" alt="写真：グラフの写真">
        </figure>
        <div class="p-media__body">
          <h3 class="p-media__title">企業理念１</h3>
          <p class="p-media__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </div>
      </div>
    </div>
    <span id="item02" class="l-link-position"></span>
    <div class="p-page-content__item p-media">
      <div class="p-media__inner">
        <figure class="p-media__img">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/page-content/page-content-img2.jpg" alt="写真：グラフの写真">
        </figure>
        <div class="p-media__body">
          <h3 class="p-media__title">企業理念２</h3>
          <p class="p-media__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </div>
      </div>
    </div>
    <span id="item03" class="l-link-position"></span>
    <div class="p-page-content__item p-media">
      <div class="p-media__inner">
        <figure class="p-media__img">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/page-content/page-content-img3.jpg" alt="写真：グラフの写真">
        </figure>
        <div class="p-media__body">
          <h3 class="p-media__title">企業理念３</h3>
          <p class="p-media__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- お問い合わせ -->
<?php get_template_part('template-parts/section-contact'); ?>

<?php get_footer(); ?>