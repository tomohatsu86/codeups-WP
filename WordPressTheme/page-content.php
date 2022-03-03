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
      <p class="p-page-content__text">３つの企業理念をもとにWeb制作の活動しております。</p>
    </div>
    <div class="p-page-content__contents">

      <div class="p-page-content__item p-media" id="item01">
        <figure class="p-media__img">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/page-content/page-content-img4.jpg" alt="写真：グラフの写真">
        </figure>
        <div class="p-media__body">
          <h3 class="p-media__title">企業理念１<br class="u-mobile"> -理想を形に-</h3>
          <p class="p-media__text">コミュニケーションを大切にし、お客様が思い描く理想を形にしていきます。妥協することなく、イメージをすり合わせていきます。お互い納得がいくまで話し合い、形にしていきましょう</p>
        </div>
      </div>
      
      <div class="p-page-content__item p-media" id="item02">
        <figure class="p-media__img">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/page-content/page-content-img5.jpg" alt="写真：グラフの写真">
        </figure>
        <div class="p-media__body">
          <h3 class="p-media__title">企業理念２<br class="u-mobile"> -理想の実装を-</h3>
          <p class="p-media__text">BEMやFLOCSSなどのCSS設計手法を用いて、予測・再利用・保守・拡張しやすいコーディングで実装いたします。どのデバイスでも表示崩れを起こさず、修正も容易です。またデザイン通りに再現し、ピクセルパーフェクトで実装いたします。</p>
        </div>
      </div>
      <div class="p-page-content__item p-media" id="item03">
        <figure class="p-media__img">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/page-content/page-content-img6.jpg" alt="写真：グラフの写真">
        </figure>
        <div class="p-media__body">
          <h3 class="p-media__title">企業理念３<br class="u-mobile"> -理想の姿へ-</h3>
          <p class="p-media__text">常に理想の姿を追い求め、挑戦、成長し続けます。新しい技術を取り込み、必要なスキルの習得に努めます。自社にないスキルをもった人材は、積極的に採用し、可能性を広げ続けます。</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- お問い合わせ -->
<?php get_template_part('template-parts/section-contact'); ?>

<?php get_footer(); ?>