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
    <div class="p-single-blog__content recommend-article">
      <div class="recommend-article__btn recommend-btn">
        <a href="#" class="btn-recommend u-mobile">おすすめ記事</a>
        <a href="#" class="btn-recommend u-desktop">関連記事</a>
      </div>
      <div class="recommend-article__content cards-4">
        <a class="cards-4__item card-small">
          <figure class="card-small__img">
            <img src="./assets/images/single-blog/single-blog1.jpg" alt="写真：水の入ったグラスとノートパソコン">
          </figure>
          <div class="card-small__body">
            <h3 class="card-small__title">タイトルが入ります。タイトルが入ります。</h3>
            <p class="card-small__excerpt u-mobile">説明文が入ります。説明文が入ります。説明文が入ります。</p>
          </div>
          <div class="card-small__info">
            <span class="card-small__label label-blog">カテゴリ</span>
            <time class="card-small__date date-blog" datetime="2021-07-20">2021.07.20</time>
          </div>
        </a>
        <a class="cards-4__item card-small">
          <figure class="card-small__img">
            <img src="./assets/images/single-blog/single-blog2.jpg" alt="写真：沢山のモニターがある部屋">
          </figure>
          <div class="card-small__body">
            <h3 class="card-small__title">タイトルが入ります。タイトルが入ります。</h3>
            <p class="card-small__excerpt u-mobile">説明文が入ります。説明文が入ります。説明文が入ります。</p>
          </div>
          <div class="card-small__info">
            <span class="card-small__label label-blog">カテゴリ</span>
            <time class="card-small__date date-blog" datetime="2021-07-20">2021.07.20</time>
          </div>
        </a>
        <a class="cards-4__item card-small">
          <figure class="card-small__img">
            <img src="./assets/images/single-blog/single-blog3.jpg" alt="写真：タブレットを操作する男性">
          </figure>
          <div class="card-small__body">
            <h3 class="card-small__title">タイトルが入ります。タイトルが入ります。</h3>
            <p class="card-small__excerpt u-mobile">説明文が入ります。説明文が入ります。説明文が入ります。</p>
          </div>
          <div class="card-small__info">
            <span class="card-small__label label-blog">カテゴリ</span>
            <time class="card-small__date date-blog" datetime="2021-07-20">2021.07.20</time>
          </div>
        </a>
        <a class="cards-4__item card-small">
          <figure class="card-small__img">
            <img src="./assets/images/single-blog/single-blog4.jpg" alt="写真：お洒落な部屋のモニター">
          </figure>
          <div class="card-small__body">
            <h3 class="card-small__title">タイトルが入ります。タイトルが入ります。</h3>
            <p class="card-small__excerpt u-mobile">説明文が入ります。説明文が入ります。説明文が入ります。</p>
          </div>
          <div class="card-small__info">
            <span class="card-small__label label-blog">カテゴリ</span>
            <time class="card-small__date date-blog" datetime="2021-07-20">2021.07.20</time>
          </div>
        </a>
      </div>
    </div>
    
  </div>
</div>


<!-- お問い合わせ -->
<?php get_template_part('template-parts/section-contact'); ?>

<?php get_footer(); ?>