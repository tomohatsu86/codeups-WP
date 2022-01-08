<?php get_header(); ?>

<div class="p-page-404">
  <div class="p-page-404__wrapper l-inner">
    <h2 class="p-page-404__title">404 Not Found</h2>
    <p class="p-page-404__text">お探しのページは<br class="u-mobile">
      見つかりませんでした。</p>
    <div class="p-page-404__btn u-desktop">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="c-btn-more">TOPへ</a>
    </div>
  </div>
</div>

<?php get_footer(); ?>