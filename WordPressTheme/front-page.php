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
<section class="p-top-news l-top-news" id="p-top-news">
  <div class="p-top-news__inner">
    <div class="p-top-news__contents">
      <ul class="p-top-news__content p-posts">

        <?php
          $news_query = new WP_Query(
            array(
              'post_type'      => 'post',
              'category_name' => 'news',
              'posts_per_page' => 1,
              'orderby' => 'date',
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
      <div class="p-top-news__btn">
        <a href="<?php echo $news ?>" class="c-btn-all">すべて見る</a>
      </div>
      </div>
    </div>
  </section>


  <!-- 事業内容 -->
  <section class="p-top-content l-top-content" id="p-top-content">
    <span class="c-bg-line01"></span>
    <div class="l-inner">
      <div class="p-top-content__header p-section-head">
        <span class="p-section-head__title-en l-text-align-left">Content</span>
        <h2 class="p-section-head__title-ja">事業内容</h2>
      </div>
    </div>
    <div class="p-top-content__contents">
      <div class="p-top-content__block">
        <div class="p-top-content__item c-img-link">
          <div class="c-img-link__wrapper">
            <a href="<?php echo $content ?>">
              <img src="<?php echo get_template_directory_uri() ?>./assets/img/top/top-content1.jpg" alt="画像：手に持たれた電球">
              <p class="c-img-link__text">経営理念ページへ</p>
            </a>
          </div>
        </div>
        <div class="p-top-content__item c-img-link">
          <figure class="c-img-link__wrapper">
            <a href="<?php echo $content ?>#item01">
              <img src="<?php echo get_template_directory_uri() ?>./assets/img/top/top-content2.jpg" alt="画像：談笑している写真">
              <p class="c-img-link__text">理念1へ</p>
            </a>
          </figure>
        </div>
      </div>
      <div class="p-top-content__block">
        <div class="p-top-content__item c-img-link">
          <figure class="c-img-link__wrapper">
            <a href="<?php echo $content ?>#item02">
              <img src="<?php echo get_template_directory_uri() ?>./assets/img/top/top-content3.jpg" alt="画像：グラフの写真">
              <p class="c-img-link__text">理念2へ</p>
            </a>
          </figure>
        </div>
        <div class="p-top-content__item c-img-link">
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


  <!-- 制作実績 -->
  <section class="p-top-works l-top-works" id="p-top-works">
    <div class="l-inner">
      <div class="p-top-works__header p-section-head">
        <span class="p-section-head__title-en l-text-align-right">Works</span>
        <h2 class="p-section-head__title-ja">制作実績</h2>
      </div>
    </div>

    <div class="p-top-works__wrapper">
      <div class="p-top-works__contents">
        <div class="p-top-works__img p-top-works__swiper swiper">
          <div class="swiper-wrapper">
            <?php
              $works_query = new WP_Query(
                array(
                  'post_type' => 'works',
                  'post_status' => 'publish', // 公開済の投稿を指定
                  'posts_per_page' => 3,
                  'orderby' => 'date',
                )
              );
            ?>
            <?php if ( $works_query->have_posts() ) : ?>
            <?php while ( $works_query->have_posts() ) : ?>
            <?php $works_query->the_post(); ?>
              <div class="swiper-slide">
                <div class="p-top-works-slide-img">
                  <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail( 'full' ); ?>
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/no-image.jpg" alt="no image">
                  <?php endif; ?>
                </div>
              </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else: ?>
            <!-- 投稿が無い場合の処理 -->
            <p>現在、投稿がありません</p>
            <?php endif; ?>
          </div>
          <!-- Add Pagination -->
          <div class="p-top-works-swiper-pagination">
          </div>
        </div>
        <div class="p-top-works__body">
          <h3 class="p-top-works__title">メインタイトルが入ります</h3>
          <p class="p-top-works__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          <div class="p-top-works__btn">
            <a href="<?php echo $works ?>" class="c-btn-more">詳しく見る</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- 企業概要 -->
  <section class="p-top-overview l-top-overview" id="p-top-overview">
    <span class="c-bg-line02"></span>
    <div class="l-inner">
      <div class="p-top-overview__header p-section-head">
        <span class="p-section-head__title-en l-text-align-left">Overview</span>
        <h2 class="p-section-head__title-ja">企業概要</h2>
      </div>
    </div>

    <div class="p-top-overview__wrapper p-top-media">
      <div class="p-top-media__items">
        <figure class="p-top-media__img">
          <img src="<?php echo get_template_directory_uri() ?>./assets/img/top/top-overview.jpg" alt="">
        </figure>
        <div class="p-top-media__item">
          <h3 class="p-top-media__title p-top-media__title--overview">メインタイトルが入ります。</h3>
          <p class="p-top-media__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          <div class="p-top-media__btn">
            <a href="<?php echo $overview ?>" class="c-btn-more">詳しく見る</a>
          </div>
        </div>
      </div>
    </div>

  </section>


  <!-- ブログ -->
  <section class="p-top-blog l-top-blog" id="p-top-blog">
    <div class="l-inner">
      <div class="p-top-blog__header p-section-head">
        <span class="p-section-head__title-en l-text-align-right">Blog</span>
        <h2 class="p-section-head__title-ja">ブログ</h2>
      </div>
      <div class="p-top-blog__contents p-cards-3">
      <?php
        $blog_query = new WP_Query(
          array(
            'post_type' => 'blog',
            'post_status' => 'publish', // 公開済の投稿を指定
            'posts_per_page' => 3,
            'orderby' => 'date',
          )
        );
      ?>

      <?php if ( $blog_query->have_posts() ) : ?>
        <?php while ( $blog_query->have_posts() ) : ?>
          <?php $blog_query->the_post(); ?>
            <a class="p-cards-3__item p-card-medium" href="<?php the_permalink(); ?>">
              <figure class="p-card-medium__img">
              <!-- 3件以内かつ3日以内の記事に「New」をつける -->
                <?php
                  $limit = 1;
                  $num = $wp_query->current_post;//何件目の記事かを取得
                  
                  if ( $limit > $num ):
                    $days = 30;
                    $today = date_i18n('U');
                    $entry_day = get_the_time('U');
                    $keika = date('U',($today - $entry_day)) / 86400;//1日の秒数（60秒×60分×24時間=86400）
                    if ( $days > $keika ): ?>
                    <span class="c-card-new"></span>
                  <?php endif; ?>  
                <?php endif; ?>  

                <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail( 'full' ); ?>
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/no-image.jpg" alt="no image">
                <?php endif; ?>

              </figure>
              <div class="p-card-medium__body">
                <h3 class="p-card-medium__title"><?php the_title() ?></h3>
                <div class="p-card-medium__excerpt"><?php the_excerpt(); ?></div>
              </div>
              <div class="p-card-medium__info">
              <?php
                  $term = get_the_terms($post->ID,'blog_category'); ?>
                  <?php if ( !empty($term)){; ?>
                    <span class="p-card-medium__label c-label-card-yellow">
                      <?php echo $term[0]->name; ?>
                    </span>
                  <?php }; ?>
                <time class="p-card-medium__date c-date-blog" datetime="<?php the_time( 'c' ); ?>"><?php the_time('Y.m.d'); ?></time>
              </div>
            </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php else: ?>
        <!-- 投稿が無い場合の処理 -->
        <p>現在、投稿がありません</p>
      <?php endif; ?>
      </div>

      <div class="p-top-blog__btn">
        <a href="<?php echo $blog ?>" class="c-btn-more">詳しく見る</a>
      </div>
    </div>
  </section>

<!-- お問い合わせ -->
<?php get_template_part('template-parts/section-contact'); ?>
<?php get_footer(); ?>