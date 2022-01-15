<?php get_header(); ?>

<!-- お知らせ一覧メインビュー -->
<div class="p-archive-news-mv p-underlayer-mv">
  <div class="p-underlayer-mv__container">
    <div class="p-underlayer-mv__text">
      <span class="mv__title"><?php echo get_the_title('9'); ?></span>
    </div>
  </div>
</div>

<!-- パンくずリスト -->
<?php get_template_part('template-parts/breadcrumb'); ?>

<!-- お知らせ -->
<section class="p-archive-news l-news-archive" id="p-archive-news">
  <div class="p-archive-news__inner">
    <div class="news__contents">
      <ul class="news__content posts">

      <?php if ( have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
          <li class="p-posts__item p-post" id="post-<?php the_ID(); ?>">
            <div class="p-post__header p-post-head">
              <time class="p-post-head__date c-date" datetime="<?php the_time( 'c' ); ?>"><?php the_time('Y.m.d'); ?></time>
              <span class="p-post-head__label c-label"><?php the_category(); ?></span>
            </div>
            <div class="p-post__body p-hover--yellow">
              <a href="<?php the_permalink(); ?>" class=""><?php the_title() ?></a>
            </div>
          </li>
        <?php endwhile; ?>
        <?php endif; ?>
      </ul>
    </div>
    
    <!-- ページネーション -->
    <?php get_template_part('template-parts/pagenation'); ?>
    
  </div>
</section>

<!-- お問い合わせ -->
<?php get_template_part('template-parts/section-contact'); ?>

<?php get_footer(); ?>