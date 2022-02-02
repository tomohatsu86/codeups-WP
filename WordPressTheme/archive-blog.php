<?php get_header(); ?>

<!-- ブログ一覧メインビュー -->
<div class="p-archive-blog-mv p-underlayer-mv">
  <div class="p-underlayer-mv__container">
    <div class="p-underlayer-mv__text">
      <span class="mv__title">ブログ</span>
    </div>
  </div>
</div>

<!-- パンくずリスト -->
<?php get_template_part('template-parts/breadcrumb'); ?>


<div class="p-archive-blog__contents">
  <div class="l-inner">

    <ul class="p-archive-blog__list p-category-list js-category-list">

      <li class="p-category-list__item current"><a href="<?php echo get_post_type_archive_link( 'blog' ); ?>">all</a></li>
      <?php
        $args = array(
        'taxonomy' => 'blog_category',
        'hide_empty'    => false,
        'orderby' => 'description'
        );
      ?>
      <?php $blog_categories = get_terms($args);
        if ( !empty($blog_categories)){
          foreach($blog_categories as $blog_category) {
          echo '<li><a class="p-category-list__item" href="'.get_term_link($blog_category).'">'.$blog_category->name.'</a></li>';
          };
        }
        ?>
    </ul>

    <div class="p-archive-blog__content p-cards-3">

    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : ?>
        <?php the_post(); ?>
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
                  <span class="c-card-new u-hidden-pc"></span>
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
              <p class="p-card-medium__excerpt"><?php the_excerpt(); ?></p>
            </div>
            <div class="p-card-medium__info">
            <?php
                $term = get_the_terms($post->ID,'blog_category'); ?>
                <?php if ( !empty($term)){; ?>
                  <span class="p-card-medium__label c-label-card-m">
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
  </div>
</div>

<!-- ページネーション -->
<?php get_template_part('template-parts/pagenation'); ?>

</section>

<!-- お問い合わせ -->
<?php get_template_part('template-parts/section-contact'); ?>

<?php get_footer(); ?>