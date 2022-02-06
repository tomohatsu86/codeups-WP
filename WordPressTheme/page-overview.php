<?php get_header(); ?>

<!-- 企業概要メインビュー -->
<div class="p-page-overview-mv p-underlayer-mv">
  <div class="p-underlayer-mv__container">
    <div class="p-underlayer-mv__text">
      <span class="mv__title"><?php echo get_the_title('136'); ?></span>
    </div>
  </div>
</div>

<!-- パンくずリスト -->
<?php get_template_part('template-parts/breadcrumb'); ?>

<!-- 企業概要 -->
<section class="p-page-overview l-page-overview-top" id="p-page-overview">
  <div class="l-inner">
    <div class="p-page-overview__content">
      <dl class="p-page-overview__info p-company-info">

        <?php
        $information = SCF::get('information');
        foreach ($information as $fields ) {; ?>
          <div class="p-company-info__block">
            <dt class="p-company-info__head"><?php echo $fields['info-title']; ?></dt>
            <dd class="p-company-info__description"><?php echo $fields['info-text']; ?></dd>
          </div>
        <?php }; ?>

      </dl>
    </div>
  </div>

  <div class="p-page-overview__map c-map">
    <div class="c-map__iframe">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6483.574901394257!2d139.74329642403683!3d35.65760803526312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1639169250907!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy">
      </iframe>
    </div>
  </div>
</section>

<!-- お問い合わせ -->
<?php get_template_part('template-parts/section-contact'); ?>

<?php get_footer(); ?>