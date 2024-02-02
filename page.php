<?php get_header(); ?>
<?php get_template_part('./includes/header'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <main class="global-layout__contents contents-layout wrapper">
            <h2 class="page-title"><?php the_title(); ?></h2>
            <div>
                <?php the_content(); ?>
            </div>
        </main>

    <?php endwhile;
else : ?>
<?php endif; ?>
<?php get_template_part('./includes/footer'); ?>
<?php get_footer(); ?>