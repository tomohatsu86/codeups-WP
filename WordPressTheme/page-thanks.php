<?php get_header(); ?>

<main>
    <div class="p-contact-thanks">
      <div class="p-contact-thanks__wrapper l-inner">
        <h2 class="p-contact-thanks__title"><?php echo get_the_title('298'); ?></h2>
        <p class="p-contact-thanks__text">3営業日以内に<br class="u-mobile">
          返信させて頂きます。</p>
        <div class="p-contact-thanks__btn">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="c-btn-more">TOPへ</a>
        </div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>