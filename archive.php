<?php get_header(); ?>
<?php get_template_part('./includes/header'); ?>
<?php get_template_part('./includes/sidebar'); ?>

<div class="global-layout__heading heading">
  <h2 class="page-title">Works</h2>
</div>

<main class="global-layout__contents _2-column">
  <section class="archive-works">
    <ul class="card-list">
      <?php if (have_posts()) : while (have_posts()) :  the_post(); ?>
          <li class="card _works">
            <a href="<?= esc_url(get_permalink()); ?>" class="card__inner">
              <div class="card__unit">
                <h3 class="card__title"><?php the_title(); ?></h3>
                <p class="card__date">2023.5.5</p>
                <p class="card__text">
                  <?= esc_html(get_the_excerpt()); ?>
                </p>
                <p class="button">More</p>
              </div>
              <div class="card__image">
                <?php the_post_thumbnail(); ?>
              </div>
            </a>
          </li>
        <?php endwhile;
      else : ?>
        <p>制作実績がありません</p>
      <?php endif; ?>
    </ul>
    <?php
    the_posts_pagination([
      'prev_text' => '',
      'next_text' => '',
    ]);
    ?>
  </section>
</main>

<?php get_template_part('./includes/footer'); ?>
<?php get_footer(); ?>