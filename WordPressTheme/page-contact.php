<?php get_header(); ?>

<!-- お問い合わせメインビュー -->
<div class="p-page-contact-mv p-underlayer-mv">
  <div class="p-underlayer-mv__container">
    <div class="p-underlayer-mv__text">
      <span class="mv__title"><?php echo get_the_title('291'); ?></span>
    </div>
  </div>
</div>

<!-- パンくずリスト -->
<?php get_template_part('template-parts/breadcrumb'); ?>

<!-- お問い合わせフォーム -->
<section class="p-page-contact l-page-contact" id="p-page-contact">
  <div class="l-inner">
  <div class="p-page-contact__contents">
  <form class="p-page-contact__form p-form" action="" method="POST">
  <?php if ( have_posts() ) : ?>
    <?php while( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile;?>
  <?php endif; ?>
  </form>
</div>

<!-- 
<div class="p-page-contact__contents">
  <form class="p-page-contact__form p-form" action="" method="POST">
    <div class="p-form__error">

    </div>

    <div class="p-form__item">
      <div class="p-form__title">
        <label class="" for="company">※会社名・団体名</label>
      </div>
      <div class="p-form__input">
        <input type="text" class="" name="company" id="company" placeholder="テキストがはいります">
      </div>
    </div>
    
    <div class="p-form__item">
      <div class="p-form__title">
        <label class="" for="department">※部署名</label>
      </div>
      <div class="p-form__input">
        <input type="text" class="" name="department" id="department" placeholder="テキストがはいります">
      </div>
    </div>
    <div class="p-form__item">
      <div class="p-form__title">
        <label class="" for="name">※お名前</label>
      </div>
      <div class="p-form__input">
        <input type="text" class="" name="name" id="name" placeholder="テキストがはいります">
      </div>
    </div>
    <div class="p-form__item">
      <div class="p-form__title">
        <label class="" for="ruby">※ふりがな</label>
      </div>
      <div class="p-form__input">
        <input type="text" class="" name="ruby" id="ruby" placeholder="テキストがはいります">
      </div>
    </div>
    <div class="p-form__item">
      <div class="p-form__title">
        <label for="question">※お問い合わせ内容</label>
      </div>
      <div class="p-form__input">
        <textarea name="question" id="question" placeholder="テキストがはいります"></textarea>
      </div>
    </div>
    <div class="p-form__btn">
      <input class="c-btn-submit" type="submit" value="送信">
    </div>
  </form>
</div> -->

  </div>
</section>


<!-- お問い合わせ -->
<div class="u-mobile">
<?php get_template_part('template-parts/section-contact'); ?>
</div>

<?php get_footer(); ?>