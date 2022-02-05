<div class="p-recommend-article l-recommend-article">
      <h2 class="p-recommend-article__title">
        <span class="u-mobile">おすすめ記事</span>
        <span class="u-desktop">関連記事</span>
      </h2>
      <div class="p-recommend-article__content p-cards-4">
        
      <?php
      //カスタム投稿タイプを取得 
      $post_type = get_post_type( $post );
      //タクソノミースラッグ取得(単数)
      $taxonomy_slug = array_keys(get_the_taxonomies());
      //タクソノミー情報取得
      $taxonomy = get_taxonomy($taxonomy_slug[0]);
      //タクソノミー名取得
      $taxonomy_name = $taxonomy->name;//カスタムタクソノミースラッグ
      $taxonomy_terms_cat = wp_get_object_terms($post->ID, $taxonomy_name);
      $taxonomy_terms_cat_slug = $taxonomy_terms_cat[0]->slug; //タームスラッグ
      
        $my_query = new WP_Query(
          array(
            'posts_per_page' => 4, // 表示件数を指定
            'post_type' => $post_type, //カスタム投稿タイプ名
            'taxonomy' => $taxonomy_name, //タクソノミー名スラッグ
            'term' => $taxonomy_terms_cat_slug, //ターム名
            'orderby' => 'rand', //ランダム表示
            'post__not_in' => array($post->ID) //表示中の記事を除外
            )
          );
      ?>

      <?php if ( $my_query->have_posts() ) : ?>
      <?php while ( $my_query->have_posts() ) : ?>
      <?php $my_query->the_post(); ?>
        
        <a class="p-cards-4__item p-card-small" href="<?php the_permalink(); ?>">
          <figure class="p-card-small__img">
          <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail( 'full' ); ?>
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/no-image.jpg" alt="no image">
              <?php endif; ?>
          </figure>
          <div class="p-card-small__body">
            <h3 class="p-card-small__title"><?php the_title(); ?></h3>
            <div class="p-card-small__excerpt u-mobile"><?php the_excerpt(); ?></div>
          </div>
          <div class="p-card-small__info">
          <?php $term = get_the_terms($post->ID, $taxonomy_name); ?>
            <?php if ( !empty($term)){; ?>
              <span class="p-card-small__label c-label-card-yellow"><?php echo $term[0]->name; ?></span>
            <?php }; ?>
            <time class="p-card-small__date c-date-blog" datetime="2021-07-20">2021.07.20</time>
          </div>
        </a>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php else: ?>
      <!-- 投稿が無い場合の処理 -->
      <p>現在、関連記事はありません</p>
      <?php endif; ?>

      </div>
    </div>