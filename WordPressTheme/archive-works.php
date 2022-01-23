<?php get_header(); ?>

<!-- ブログ一覧メインビュー -->
<div class="p-archive-works-mv p-underlayer-mv">
  <div class="p-underlayer-mv__container">
    <div class="p-underlayer-mv__text">
      <span class="mv__title">制作実績</span>
    </div>
  </div>
</div>

<!-- パンくずリスト -->
<?php get_template_part('template-parts/breadcrumb'); ?>


<div class="p-archive-blog__contents">
  <div class="l-inner">

    <ul class="p-archive-blog__list p-category-list">

      <li class="p-category-list__item current"><a href="#">all</a></li>
      <?php
        $args = array(
        'taxonomy' => 'works_category',
        'hide_empty'    => false,
        'orderby' => 'description'
        );
      ?>
      <?php $works_categories = get_terms($args);
        if ( !empty($works_categories)){
          foreach($works_categories as $works_category) {
          echo '<li><a class="p-category-list__item" href="'.get_term_link($works_category).'">'.$works_category->name.'</a></li>';
          };
        }
        ?>
      <!-- <li class="p-category-list__item"><a href="#">カテゴリ１</a></li>
      <li class="p-category-list__item"><a href="#">カテゴリカテゴリ</a></li>
      <li class="p-category-list__item"><a href="#">カテ</a></li> -->
    </ul>

    <div class="p-archive-works__content p-cards-2">
    <?php
      $the_query = new WP_Query(
        array(
          'post_type' => 'works', //カスタム投稿タイプを指定
          'taxonomy' => 'works_category', //カスタムタクソノミーを指定
          'posts_per_page' => 6, //表示する記事数
          'paged' => get_query_var('paged'),//現在何ページ目かを取得
        )
      ); 
    ?>
    <?php if ( $the_query->have_posts() ) : ?>
      <?php while ( $the_query->have_posts() ) : ?>
        <?php $the_query->the_post(); ?>
          <?php $terms = get_the_terms($post->ID, 'works_category'); ?>
          <a class="p-cards-2__item p-card-large" href="<?php the_permalink(); ?>">
            <figure class="p-card-large__img">
              <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail( 'full' ); ?>
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/no-image.jpg" alt="no image">
              <?php endif; ?>
              <?php
                $term = get_the_terms($post->ID,'works_category'); ?>
                <?php if ( !empty($term)){; ?>
                  <span class="p-card-large__label c-label-card-l">
                    <?php echo $term[0]->name; ?>
                  </span>
                <?php }; 
              ?>
            </figure>
            <div class="p-card-large__body">
              <h3 class="p-card-large__title"><?php the_title() ?></h3>
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

<!-- ページネーション -->
<!-- <div class="archive-blog__pagenation pagenation">
  <div class="pagenation__content wp-pagenavi--yellow">
    <a class="previouspostslink" rel="prev" href="#">prev</a>
    <span class="page current">1</span>
    <a href="#" class="page">2</a>
    <a href="#" class="page">3</a>
    <a href="#" class="page">4</a>
    <a class="nextpostslink" rel="next" href="#">next</a>
  </div>
</div> -->
</section>

<!-- お問い合わせ -->
<?php get_template_part('template-parts/section-contact'); ?>

<?php get_footer(); ?>