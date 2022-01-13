<?php get_header(); ?>

<!-- パンくずリスト -->
<?php get_template_part('template-parts/breadcrumb'); ?>

<div class="p-single-works__contents">
      <div class="l-inner">
        <div class="p-single-works__mainbox">
          <div class="p-single-works__header">
            <h1 class="p-single-works__title">
              〇〇株式会社　制作実績
            </h1>
            <div class="p-single-works__info">
              <time class="p-single-works__date date" datetime="2021-06-13">2020/06/13</time>
              <span class="p-single-works__label label">カテゴリ１</span>
            </div>
          </div>
          <div class="p-single-works__body">
            <div class="p-single-works__slider swiper">
              <!-- メインスライダー -->
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works3.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works5.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works6.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works7.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works8.jpg" alt=""></div>
              </div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
              <!-- サムネイル -->
            <div class="swiper p-single-works__thumbs">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works3.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works5.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works6.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works7.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./assets/images/sigle-works/single-works8.jpg" alt=""></div>
              </div>
            </div>

            <div class="p-single-works__item box">
              <span class="box__title">制作のポイント</span>
              <p class="box__text">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </p>
            </div>
            <div class="p-single-works__item box">
              <span class="box__title">デザインのポイント</span>
              <p class="box__text">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </p>
            </div>
            <div class="p-single-works__item box">
              <span class="box__title">その他</span>
              <p class="box__text">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </p>
            </div>
          </div>
          
          <!-- ページネーション -->
          <div class="p-single-works__pagenation pagenation">
            <div class="pagenation__content wp-pagenavi">
              <a class="previouspostslink" rel="prev" href="#">prev</a>
              <a href="./archive-works.html" class="archive">一覧</a>
              <a class="nextpostslink" rel="next" href="#">next</a>
            </div>
          </div>
        </div>
        <!-- ページネーション -->
        <div class="p-archive-news__pagenation p-pagenation u-desktop">
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
        
        <!-- おすすめ・関連記事 -->
        <div class="p-single-works__content recommend-article">
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