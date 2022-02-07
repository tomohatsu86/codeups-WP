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

        <?php $works_images = scf::get('works_images'); 
        if( !empty( $works_images[0]['works-img'] )){ ?>
        
        <!-- スライダー -->
        <div class="p-single-works__slider swiper js-single-works__slider">

          <!-- メインスライダー -->
          <div class="swiper-wrapper">
            <?php foreach ($works_images as $fields ) {;
              $imgurl = wp_get_attachment_image_src($fields['works-img'] , 'full'); ?>
              <div class="swiper-slide">
                <img src="<?php echo $imgurl[0]; ?>">
              </div>
            <?php }; ?>

          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>

          <!-- サムネイル -->
        <div class="p-single-works__thumbs swiper js-single-works__thumbs">
          <div class="swiper-wrapper">
          <?php foreach ($works_images as $fields ) {;
              $imgurl = wp_get_attachment_image_src($fields['works-img'] , 'full'); ?>
              <div class="swiper-slide">
                <img src="<?php echo $imgurl[0]; ?>">
              </div>
          <?php }; ?>
          </div>
        </div>
        <?php } ?>

        
        <?php
        $boxes = SCF::get('boxes');
        foreach ($boxes as $fields) {; ?>
          <div class="p-single-works__item p-box">
            <span class="p-box__title"><?php echo $fields['box-title']; ?></span>
            <p class="p-box__text">
              <?php echo $fields['box-text']; ?>
            </p>
          </div>
        <?php } ?>

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