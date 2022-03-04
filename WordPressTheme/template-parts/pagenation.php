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
      <div class="archive-btn">
        <?php if (is_singular( array( 'blog', 'works' )) ): ?>
          <?php $custom_slug = get_query_var('post_type');?>
          <a href="<?php echo esc_url( home_url('/'). $custom_slug .'/' ); ?>">一覧</a>
          <?php else: ?>
            <?php 
              $post_cat = get_the_category();
              $post_slug  = $post_cat[0]->slug;
            ?>
            <?php if( $post_slug === 'uncategorized' ) : ?>
            <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>">一覧</a>
            <?php else: ?>
            <a href="<?php echo esc_url( home_url('/'). $post_slug .'/' ); ?>">一覧</a>
            <?php endif; ?>
            
        <?php endif; ?>
      </div>
      <?php if (get_next_post()): ?>
        <?php next_post_link('%link', 'next'); ?>
      <?php endif; ?>
    </div>

  <?php elseif ( is_tax() ) : ?>

    <?php if (is_tax('blog_category')) : ?>
      <div id="archive-blog" class="p-pagenation__content c-wp-pagenavi--yellow">
      <?php if(function_exists('wp_pagenavi'))
        wp_pagenavi(); 
      ?>
      </div>
    <?php else: ?>
      <div class="p-pagenation__content c-wp-pagenavi">
      <?php if(function_exists('wp_pagenavi'))
        wp_pagenavi(); 
      ?>
      </div>
    <?php endif; ?>

  <?php elseif ( is_archive() ) : ?>

    <?php if (is_post_type_archive('blog')) : ?>
      <div class="p-pagenation__content c-wp-pagenavi--yellow">
      <?php if(function_exists('wp_pagenavi'))
        wp_pagenavi(); 
      ?>
      </div>
    <?php else: ?>
      <div class="p-pagenation__content c-wp-pagenavi">
      <?php if(function_exists('wp_pagenavi'))
        wp_pagenavi(); 
      ?>
      </div>
    <?php endif; ?>

  <?php else: ?>
    <div class="p-pagenation__content c-wp-pagenavi">
      <?php if(function_exists('wp_pagenavi'))
        wp_pagenavi(); 
      ?>
    </div>
  <?php endif; ?>

</div>