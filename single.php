<?php get_header(); ?>
<?php get_template_part('./includes/header'); ?>
<?php get_template_part('./includes/sidebar'); ?>


<div class="global-layout__heading heading">
  <h2 class="page-title _single-works"><?php the_field('works-name'); ?></h2>
</div>

<main class="global-layout__contents _2-column">
  <div>
    <section id="main-carousel" class="splide" aria-label="お気に入りの写真">
      <div class="splide__track">
        <ul class="splide__list">
          <?php for ($i = 1; $i <= 5; $i++) : ?>
            <li class="splide__slide">
              <?php my_custom_image('works-image-sub' . $i); ?>
            </li>
          <?php endfor; ?>
        </ul>
      </div>
    </section>
    <ul id="thumbnails" class="thumbnails">
      <?php for ($i = 1; $i <= 5; $i++) : ?>
        <li class="thumbnail">
          <?php my_custom_image('works-image-sub' . $i); ?>
        </li>
      <?php endfor; ?>
    </ul>
    <div class="description">
      <dl class="description__main">
        <dt>制作カテゴリー</dt>
        <dd><?php the_field('works-category'); ?></dd>
        <dt>担当範囲</dt>
        <dd>
          <?php
          $areas = get_field('works-area');
          if ($areas) : ?>
            <ul>
              <?php foreach ($areas as $area) : ?>
                <li><?php echo esc_html($area); ?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </dd>
        <dt>ターゲット</dt>
        <dd><?php the_field('works-target'); ?></dd>
        <dt>制作の目的</dt>
        <dd><?php the_field('works-purpose'); ?></dd>
        <dt>制作概要</dt>
        <dd><?php the_field('works-outline'); ?></dd>
      </dl>
      <dl class="description__sub">
        <dt>業種</dt>
        <dd><?php the_field('works-industry'); ?></dd>
        <dt>ページ数</dt>
        <dd><?php the_field('works-pages'); ?></dd>
        <dt>制作期間</dt>
        <dd><?php the_field('works-period'); ?></dd>
        <dt>使用ツール</dt>
        <dd><?php the_field('works-tools'); ?></dd>
        <dt>URL</dt>
        <dd><?php the_field('works-url'); ?></dd>
        <dt>公開日</dt>
        <dd><?php the_field('works-publication'); ?></dd>
        <dt>クライアント</dt>
        <dd><?php the_field('works-client'); ?></dd>
      </dl>
    </div>
    <section class="cta">
      <h2 class="section-title">Other Works</h2>
      <ul class="grid-list">
        <?php if (have_posts()) : while (have_posts()) :  the_post(); ?>
            <li>
              <a href="<?= esc_url(get_permalink()); ?>">
                <figure class="grid-list__item">
                  <div class="grid-list__image">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                    <?php else : ?>
                      <img src="<?= esc_url(get_theme_file_uri('/images/img.png')); ?> alt="" class=" wp-post-image">
                    <?php endif; ?>
                    <div class="grid-list__mask"></div>
                  </div>
                  <figcaption class="grid-list__caption">
                    <h3><?php the_title(); ?></h3>
                  </figcaption>
                </figure>
              </a>
            </li>
          <?php endwhile;
        else : ?>
      </ul>
      <p>制作実績がありません</p>
    <?php endif; ?>
    </ul>
    </section>
</main>

<?php get_template_part('./includes/footer'); ?>
<?php get_footer(); ?>