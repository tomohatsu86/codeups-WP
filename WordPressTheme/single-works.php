<?php get_header(); ?>

<!-- パンくずリスト -->
<?php get_template_part('template-parts/breadcrumb'); ?>

<div class="p-single-works__contents">
  <div class="l-inner">

    <div class="p-single-works__mainbox">
    <?php if ( have_posts() ) : ?>
    <?php while( have_posts() ) : the_post(); ?>
      <div class="p-single-works__header">
        <h1 class="p-single-works__title">
          <?php the_title(); ?>
        </h1>
        <div class="p-single-works__info">
          <time class="p-single-works__date c-date" datetime="<?php the_time( 'c' ); ?>"><?php the_time('Y/m/d'); ?></time>
        <?php
          $term = get_the_terms($post->ID,'works_category'); ?>
          <?php if ( !empty($term)){; ?>
          <span class="p-single-works__label c-label">
            <?php echo $term[0]->name; ?>
          </span>
        <?php }; ?>
        </div>
      </div>
      <div class="p-single-works__body">
        <div class="p-single-works__slider swiper">
          <!-- メインスライダー -->
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works6.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works7.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works8.jpg" alt=""></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
          <!-- サムネイル -->
        <div class="swiper p-single-works__thumbs">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works6.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works7.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works8.jpg" alt=""></div>
          </div>
        </div>

        <div class="p-single-works__item box">
          <span class="box__title">制作のポイント</span>
          <p class="box__text">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </p>
        </div>
        <div class="p-single-works__item box">
          <span class="box__title">デザインのポイント</span>
          <p class="box__text">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </p>
        </div>
        <div class="p-single-works__item box">
          <span class="box__title">その他</span>
          <p class="box__text">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </p>
        </div>
      </div>
    </div>

  <?php endwhile;?>
  <?php endif; ?>



<!-- ページネーション -->
<?php get_template_part('template-parts/pagenation'); ?>

<!-- おすすめ・関連記事一覧 -->
<?php get_template_part('template-parts/recommend-article'); ?>

  </div>
</div>

<!-- お問い合わせ -->
<?php get_template_part('template-parts/section-contact'); ?>

<?php get_footer(); ?>