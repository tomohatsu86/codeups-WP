<?php get_header(); ?>

<!-- お知らせ一覧メインビュー -->
<div class="p-archive-news-mv p-underlayer-mv">
  <div class="p-underlayer-mv__container">
    <div class="p-underlayer-mv__text">
      <span class="mv__title">お知らせ</span>
    </div>
  </div>
</div>

<!-- パンくずリスト -->
<nav class="breadcrumb">
  <div class="l-inner">
    <div class="breadcrumb__body">
      <ol itemscope itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemtype="https://schema.org/ListItem">
          <a itemprop="item" href="./index.html">
            <span itemprop="name">トップ</span>
          </a>
          <meta itemprop="position" content="1" />
        </li>
        <li itemprop="itemListElement" itemtype="https://schema.org/ListItem">
          <a itemprop="item" href="./p-archive-news.html">
            <span itemprop="name">お知らせ一覧</span>
          </a>
          <meta itemprop="position" content="2" />
        </li>
      </ol>
    </div>
  </div>
</nav>

<!-- お知らせ -->
<section class="p-archive-news l-news-top" id="p-archive-news">
  <div class="p-archive-news__inner">
    <div class="news__contents">
      <ul class="news__content posts">

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
        <li class="p-posts__item p-post">
          <div class="p-post__header p-post-head">
            <time class="p-post-head__date c-date" datetime="<?php the_time( 'c' ); ?>"><?php the_time('Y.m.d'); ?></time>
            <span class="p-post-head__label c-label">お知らせ</span>
          </div>
          <div class="p-post__body p-hover--underline">
            <a href="<?php the_permalink(); ?>" class=""><?php the_title() ?></a>
          </div>
        </li>

        <li class="posts__item post">
          <div class="post__header post-head">
            <time class="post-head__date date" datetime="2020-07-20">2020.07.20</time>
            <span class="post-head__label label">お知らせ</span>
          </div>
          <div class="post__body hover--yellow">
            <a href="#" class="">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。</a>
          </div>
        </li>

        <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

      </ul>
    </div>

    
    
    <!-- ページネーション -->
    <div class="p-archive-news__pagenation pagenation u-desktop">
      <div class="pagenation__content wp-pagenavi">
        <a class="previouspostslink" rel="prev" href="#">prev</a>
        <span class="page current">1</span>
        <a href="#" class="page">2</a>
        <a href="#" class="page">3</a>
        <a href="#" class="page">4</a>
        <a class="nextpostslink" rel="next" href="#">next</a>
      </div>
    </div>

  </div>
</section>


<!-- お問い合わせ -->
<section class="p-contact l-contact-top" id="p-contact">
  <div class="l-inner">
    <div class="p-contact__header p-section-head">
      <span class="p-section-head__title-en">Contact</span>
      <h2 class="p-section-head__title-ja">お問い合わせ</h2>
    </div>
    <div class="p-contact__content">
      <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
    </div>
    <div class="p-contact__btn">
      <a href="./page-contact.html" class="c-btn-contact">お問い合わせへ</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>