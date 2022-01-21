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
        <?php wp_reset_postdata(); ?>
        <?php else: ?>
        <!-- 投稿が無い場合の処理 -->
        <p>現在、投稿がありません</p>
        <?php endif; ?>


      </ul>
      <div class="p-news__btn">
        <a href="<?php echo $news ?>" class="c-btn-all">すべて見る</a>
      </div>
      </div>
    </div>
  </section>

  <!-- 事業内容 -->
  <section class="p-content l-content-top" id="p-content">
    <span class="c-bg-line01"></span>
    <div class="p-content__header p-section-head">
      <span class="p-section-head__title-en">Content</span>
      <h2 class="p-section-head__title-ja">事業内容</h2>
    </div>
    <div class="p-content__contents">
      <div class="p-content__block">
        <div class="p-content__item c-img-link">
          <div class="c-img-link__wrapper">
            <a href="<?php echo $content ?>">
              <img src="<?php echo get_template_directory_uri() ?>./assets/img/top/top-content1.jpg" alt="画像：手に持たれた電球">
              <p class="c-img-link__text">経営理念ページへ</p>
            </a>
          </div>
        </div>
        <div class="p-content__item c-img-link">
          <figure class="c-img-link__wrapper">
            <a href="<?php echo $content ?>#item01">
              <img src="<?php echo get_template_directory_uri() ?>./assets/img/top/top-content2.jpg" alt="画像：談笑している写真">
              <p class="c-img-link__text">理念1へ</p>
            </a>
          </figure>
        </div>
      </div>
      <div class="p-content__block">
        <div class="p-content__item c-img-link">
          <figure class="c-img-link__wrapper">
            <a href="<?php echo $content ?>#item02">
              <img src="<?php echo get_template_directory_uri() ?>./assets/img/top/top-content3.jpg" alt="画像：グラフの写真">
              <p class="c-img-link__text">理念2へ</p>
            </a>
          </figure>
        </div>
        <div class="p-content__item c-img-link">
          <figure class="c-img-link__wrapper">
            <a href="<?php echo $content ?>#item03">
              <img src="<?php echo get_template_directory_uri() ?>./assets/img/top/top-content4.jpg" alt="画像：手に持たれたスマホ">
              <p class="c-img-link__text">理念3へ</p>
            </a>
          </figure>
        </div>
      </div>
    </div>
  </section>



    
<!-- お問い合わせ -->
<?php get_template_part('template-parts/section-contact'); ?>
<?php get_footer(); ?>