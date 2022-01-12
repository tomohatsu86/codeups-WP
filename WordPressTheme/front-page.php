<?php get_header(); ?>

<?php 
$home = esc_url( home_url( '/' ) );
$news = esc_url( home_url( '/news/' ) );
$content = esc_url( home_url( '/content/' ) );
$works = esc_url( home_url( '/works/' ) );
$overview = esc_url( home_url( '/overview/' ) );
$blog = esc_url( home_url( '/blog/' ) );
$contact = esc_url( home_url( '/contact/' ) );
?>

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

        <?php
          $news_query = new WP_Query(
            array(
              'post_type'      => 'post',
              'category_name' => 'news',
              'posts_per_page' => 4,
              // 'orderby' => 'date',
            )
          );
        ?>
        <?php if ( $news_query->have_posts() ) : ?>
        <?php while ( $news_query->have_posts() ) : ?>
        <?php $news_query->the_post(); ?>
        <li class="p-posts__item p-post" id="post-<?php the_ID(); ?>">
          <div class="p-post__header p-post-head">
            <time class="p-post-head__date c-date" datetime="<?php the_time( 'c' ); ?>"><?php the_time('Y.m.d'); ?></time>
            <span class="p-post-head__label c-label"><?php the_category(); ?></span>
          </div>
          <div class="p-post__body p-hover--underline">
            <a href="<?php the_permalink(); ?>" class=""><?php the_title() ?></a>
          </div>
        </li>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>


      </ul>
      <div class="p-news__btn">
        <a href="./archive-p-news.html" class="c-btn-all">すべて見る</a>
      </div>
      </div>
    </div>
  </section>


<!-- お問い合わせ -->
<?php get_template_part('template-parts/section-contact'); ?>
<?php get_footer(); ?>