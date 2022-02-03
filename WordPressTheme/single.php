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
        // ターム情報を取得
        $term = get_the_terms($post->ID, $taxonomy_slug);

        var_dump($post_type);
        var_dump($taxonomy_slug);
        var_dump($term);
      ?>
      <?php
        $args = array(
          'numberposts' => 8, //８件表示(デフォルトは５件)
          'post_type' => $post_type, //カスタム投稿タイプ名
          'taxonomy' => $taxonomy_slug, //タクソノミー名
          'term' => $term->slug, //ターム名 ←ここが追加
          'orderby' => 'rand', //ランダム表示
          'post__not_in' => array($post->ID); //表示中の記事を除外
      ?>

      <?php $myPosts = get_posts($args); if($myPosts) : ?>
      <?php foreach($myPosts as $post) : setup_postdata($post); ?>
        <p><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?><?php the_title(); ?></a></p>
      <?php endforeach; ?>
      <?php else : ?>
        <p>関連アイテムはまだありません。</p>
      <?php endif; wp_reset_postdata(); ?>
      

        <a class="p-cards-4__item p-card-small">
          <figure class="p-card-small__img">
            <img src="./assets/images/single-blog/single-blog1.jpg" alt="写真：水の入ったグラスとノートパソコン">
          </figure>
          <div class="p-card-small__body">
            <h3 class="p-card-small__title">タイトルが入ります。タイトルが入ります。</h3>
            <p class="p-card-small__excerpt u-mobile">説明文が入ります。説明文が入ります。説明文が入ります。</p>
          </div>
          <div class="p-card-small__info">
            <span class="p-card-small__label c-label-card-yellow">カテゴリ</span>
            <time class="p-card-small__date c-date-blog" datetime="2021-07-20">2021.07.20</time>
          </div>
        </a>


        <a class="p-cards-4__item p-card-small">
          <figure class="p-card-small__img">
            <img src="./assets/images/single-blog/single-blog2.jpg" alt="写真：沢山のモニターがある部屋">
          </figure>
          <div class="p-card-small__body">
            <h3 class="p-card-small__title">タイトルが入ります。タイトルが入ります。</h3>
            <p class="p-card-small__excerpt u-mobile">説明文が入ります。説明文が入ります。説明文が入ります。</p>
          </div>
          <div class="p-card-small__info">
            <span class="p-card-small__label c-label-card-yellow">カテゴリ</span>
            <time class="p-card-small__date c-date-blog" datetime="2021-07-20">2021.07.20</time>
          </div>
        </a>
        <a class="p-cards-4__item p-card-small">
          <figure class="p-card-small__img">
            <img src="./assets/images/single-blog/single-blog3.jpg" alt="写真：タブレットを操作する男性">
          </figure>
          <div class="p-card-small__body">
            <h3 class="p-card-small__title">タイトルが入ります。タイトルが入ります。</h3>
            <p class="p-card-small__excerpt u-mobile">説明文が入ります。説明文が入ります。説明文が入ります。</p>
          </div>
          <div class="p-card-small__info">
            <span class="p-card-small__label c-label-card-yellow">カテゴリ</span>
            <time class="p-card-small__date c-date-blog" datetime="2021-07-20">2021.07.20</time>
          </div>
        </a>
        <a class="p-cards-4__item p-card-small">
          <figure class="p-card-small__img">
            <img src="./assets/images/single-blog/single-blog4.jpg" alt="写真：お洒落な部屋のモニター">
          </figure>
          <div class="p-card-small__body">
            <h3 class="p-card-small__title">タイトルが入ります。タイトルが入ります。</h3>
            <p class="p-card-small__excerpt u-mobile">説明文が入ります。説明文が入ります。説明文が入ります。</p>
          </div>
          <div class="p-card-small__info">
            <span class="p-card-small__label c-label-card-yellow">カテゴリ</span>
            <time class="p-card-small__date c-date-blog" datetime="2021-07-20">2021.07.20</time>
          </div>
        </a>
      </div>
    </div>
    
  </div>
</div>


<!-- お問い合わせ -->
<?php get_template_part('template-parts/section-contact'); ?>

<?php get_footer(); ?>