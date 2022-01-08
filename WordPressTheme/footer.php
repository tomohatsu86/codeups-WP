<footer class="p-footer l-footer-top">
  <div class="p-footer__inner">
    <div class="p-footer__contents">
      <div class="p-footer__logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo__link">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/logo/CodeUps.svg" alt="ロゴ">
        </a>
      </div>
      <div class="p-footer__content p-sp-footer-nav">
        <ul class="p-sp-footer-nav__items">
          <li class="p-sp-footer-nav__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップ</a></li>
          <li class="p-sp-footer-nav__item"><a href="<?php echo get_template_directory_uri() ?>/archive-news.html">お知らせ</a></li>
          <li class="p-sp-footer-nav__item"><a href="<?php echo get_template_directory_uri() ?>/page-content.html">事業内容</a></li>
          <li class="p-sp-footer-nav__item"><a href="<?php echo get_template_directory_uri() ?>/page-overview.html">企業概要</a></li>
          <li class="p-sp-footer-nav__item"><a href="<?php echo get_template_directory_uri() ?>/archive-blog.html">ブログ</a></li>
          <li class="p-sp-footer-nav__item"><a href="<?php echo get_template_directory_uri() ?>/page-contact.html">お問い合わせ</a></li>
        </ul>
      </div>
      <div class="p-footer__content p-pc-footer-nav">
        <ul class="p-pc-footer-nav__items">
          <li class="p-pc-footer-nav__item"><a href="<?php echo get_template_directory_uri() ?>/archive-news.html">お知らせ</a></li>
          <li class="p-pc-footer-nav__item"><a href="<?php echo get_template_directory_uri() ?>/page-content.html">事業内容</a></li>
          <li class="p-pc-footer-nav__item"><a href="<?php echo get_template_directory_uri() ?>/archive-works.html">制作実績</a></li>
          <li class="p-pc-footer-nav__item"><a href="<?php echo get_template_directory_uri() ?>/page-overview.html">企業概要</a></li>
          <li class="p-pc-footer-nav__item"><a href="#">自社メディア</a></li>
          <li class="p-pc-footer-nav__item"><a href="<?php echo get_template_directory_uri() ?>/page-contact.html">お問い合わせ</a></li>
        </ul>
      </div>
    </div>
    <div class="p-footer__copyright">
      <p>&copy;  2021 CodeUps Inc.</p>
    </div>
  </div>
</footer>

<!-- トップスクロールボタン -->
<div class="p-page-top-scroll">
  <a href="#" class="p-page-top-scroll__btn c-top-btn"></a>
</div>

<?php wp_footer(); ?>
</body>
</html>