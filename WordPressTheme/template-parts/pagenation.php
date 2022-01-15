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

<?php else: ?>

  <div class="p-pagenation__content c-wp-pagenavi">
  <?php wp_pagenavi(); ?>
    <!-- <a class="previouspostslink" rel="prev" href="#">prev</a>
    <span class="page current">1</span>
    <a href="#" class="page">2</a>
    <a href="#" class="page">3</a>
    <a href="#" class="page">4</a>
    <a class="nextpostslink" rel="next" href="#">next</a> -->
  </div>

<?php endif; ?>

</div>