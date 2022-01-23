<?php if( is_home() ) : ?>
<div class="p-pagenation u-hidden-tab">
<?php else: ?>
<div class="p-pagenation">
<?php endif; ?>

  <?php if ( is_single() ) : ?>
    
    <div class="p-pagenation__content c-wp-pagenavi">
      <?php if (get_previous_post()): ?>
        <?php previous_post_link('%link', 'prev'); ?>
      <?php endif; ?>
      <div class="archive">
        <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" class="archive">一覧</a>
      </div>
      <?php if (get_next_post()): ?>
        <?php next_post_link('%link', 'next'); ?>
      <?php endif; ?>
    </div>

  <?php elseif ( is_archive() ) : ?>
    
    <!-- <div class="p-pagenation__content c-wp-pagenavi"> -->

    <?php if (is_post_type_archive('blog')) : ?>
      <div class="p-pagenation__content c-wp-pagenavi--yellow">
      <?php else: ?>
      <div class="p-pagenation__content c-wp-pagenavi">
        aaaaaaaaaaaaaaaaa
    <?php endif; ?>
    
      <?php wp_pagenavi(array('query' => $GLOBALS['the_query'])); ?>

      </div>

  <?php else: ?>
    <div class="p-pagenation__content c-wp-pagenavi">
      <?php wp_pagenavi(); ?>
    </div>
  <?php endif; ?>

</div>