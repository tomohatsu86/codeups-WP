<?php get_header(); ?>

<!-- パンくずリスト -->
<?php get_template_part('template-parts/breadcrumb'); ?>


<div class="p-single__contents l-single">
  <div class="l-inner">
    
    <div class="p-single__mainbox">
    <?php if ( have_posts() ) : ?>
    <?php while( have_posts() ) : the_post(); ?>
      <div class="p-single__header">
        <h1 class="p-single__title">
          <?php the_title(); ?>
        </h1>
        <div class="p-single__info">
          <time class="p-single__date c-date" datetime="<?php the_time( 'c' ); ?>"><?php the_time('Y/m/d'); ?></time>

          <?php if (get_post_type() === 'post'): ?>
          <?php 
            $cat = get_the_category(); ?>
            <span class="p-single__label c-label"><?php echo $cat[0]->name; ?></span>

          <?php elseif(get_post_type() === 'blog'): ?>
          <?php
            $term = get_the_terms($post->ID,'blog_category'); ?>
            <?php if ( !empty($term)){; ?>
              <span class="p-single__label c-label">
                <?php echo $term[0]->name; ?>
              </span>
            <?php }; ?>

          <?php endif; ?>
        </div>
      </div>
      <div class="p-single__body">
        <div class="p-single__thumbnail">
        <?php if (has_post_thumbnail()): ?>
          <?php the_post_thumbnail( 'full' ); ?>
        <?php else: ?>
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/no-image.jpg" alt="no image">
        <?php endif; ?>
        </div>
        
        <?php the_content(); ?>
                
        <!-- ページネーション -->
        <?php get_template_part('template-parts/pagenation'); ?>
        
      </div>
      <?php endwhile;?>
      <?php endif; ?>
    </div>
    
    <!-- おすすめ・関連記事一覧 -->
    <?php get_template_part('template-parts/recommend-article'); ?>
    
    
  </div>
</div>


<!-- お問い合わせ -->
<?php get_template_part('template-parts/section-contact'); ?>

<?php get_footer(); ?>