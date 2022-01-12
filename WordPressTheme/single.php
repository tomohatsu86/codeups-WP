<?php get_header(); ?>

<!-- パンくずリスト -->
<div class="p-single-blog__breadcrumb">
<?php get_template_part('template-parts/breadcrumb'); ?>
</div>

<div class="p-single-blog__contents">
  <div class="l-inner">
    
    <div class="p-single-blog__mainbox">

      <div class="p-single-blog__header">
        <h1 class="p-single-blog__title">
          タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。
        </h1>
        <div class="p-single-blog__info">
          <time class="p-single-blog__date date" datetime="2021-06-13">2020/06/13</time>
          <span class="p-single-blog__label label">カテゴリ１</span>
        </div>
      </div>

      <div class="p-single-blog__body">
        <div class="p-single-blog__img">
          <img src="./assets/images/single-blog/single-blog-top.jpg" alt="写真：報告をしている男性と聞いている社員たち">
        </div>
        <div class="p-single-blog__item">
          <p class="p-single-blog__text">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </p>
        </div>
        <div class="p-single-blog__item">
          <h2 class="p-single-blog__title p-single-blog__title--h2">
            見出し2
          </h2>
        </div>
        <div class="p-single-blog__item">
          <p class="p-single-blog__text">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </p>
        </div>
        <div class="p-single-blog__item">
          <h3 class="p-single-blog__title p-single-blog__title--h3">
            見出し3見出し3見出し3
          </h3>
        </div>
        <div class="p-single-blog__item">
          <p class="p-single-blog__text">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </p>
        </div>
        <div class="p-single-blog__item">
          <div class="p-single-blog__img">
            <img src="./assets/images/single-blog/single-blog-img2.jpg" alt="写真：オレンジのテーブルに置かれたスマホ">
          </div>
        </div>
        <div class="p-single-blog__item">
          <ul class="p-single-blog__list-dot">
            <li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
            <li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
            <li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
            <li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
          </ul>
        </div>
        <div class="p-single-blog__item">
          <ol class="p-single-blog__list-number">
            <li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
            <li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
            <li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
            <li>リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li>
          </ol>
        </div>
        
        <!-- ページネーション -->
        <div class="p-single-blog__pagenation pagenation">
          <div class="p-pagenation__content c-wp-pagenavi">
            <a class="previouspostslink" rel="prev" href="#">prev</a>
            <a href="./archive-blog.html" class="archive">一覧</a>
            <a class="nextpostslink" rel="next" href="#">next</a>
          </div>
        </div>
        <!-- ページネーション -->
        <div class="p-single-blog__pagenation">
        <?php get_template_part('template-parts/pagenation'); ?>
        </div>
        
        <!-- ページネーション -->
        <div class="p-pagenation">
        <div class="p-pagenation__content c-wp-pagenavi">
        <?php wp_pagenavi(); ?>
          <!-- <a class="previouspostslink" rel="prev" href="#">prev</a>
          <span class="page current">1</span>
          <a href="#" class="page">2</a>
          <a href="#" class="page">3</a>
          <a href="#" class="page">4</a>
          <a class="nextpostslink" rel="next" href="#">next</a> -->
        </div>
      </div>
        
      </div>
    </div>

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