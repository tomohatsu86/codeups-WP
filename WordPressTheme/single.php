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
          <span class="p-single__label c-label"><?php the_category(); ?></span>
        </div>
      </div>
      <div class="p-single__body">

        <?php the_content(); ?>

        <div class="p-single__img">
          <img src="./assets/images/single-blog/single-blog-top.jpg" alt="写真：報告をしている男性と聞いている社員たち">
        </div>
        <div class="p-single__item">
          <p class="p-single__text">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </p>
        </div>
        <div class="p-single__item">
          <h2 class="p-single__title p-single__title--h2">
            見出し2
          </h2>
        </div>
        <div class="p-single__item">
          <p class="p-single__text">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </p>
        </div>
        <div class="p-single__item">
          <h3 class="p-single__title p-single__title--h3">
            見出し3見出し3見出し3
          </h3>
        </div>
        <div class="p-single__item">
          <p class="p-single__text">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </p>
        </div>
        <div class="p-single__item">
          <div class="p-single__img">
            <img src="./assets/images/single/single-img2.jpg" alt="写真：オレンジのテーブルに置かれたスマホ">
          </div>
        </div>
        <div class="p-single__item">
          <ul class="p-single__list-dot">
            <li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
            <li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
            <li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
            <li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
          </ul>
        </div>
        <div class="p-single__item">
          <ol class="p-single-blog__list-number">
            <li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
            <li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
            <li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
            <li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
          </ol>
        </div>
        
        <!-- ページネーション -->
        <div class="p-single__pagenation pagenation">
          <div class="p-pagenation__content c-wp-pagenavi">
            <a class="previouspostslink" rel="prev" href="#">prev</a>
            <a href="./archive-blog.html" class="archive">一覧</a>
            <a class="nextpostslink" rel="next" href="#">next</a>
          </div>
        </div>

        
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