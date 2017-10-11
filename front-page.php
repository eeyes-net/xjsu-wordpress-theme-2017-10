<?php get_header(); ?>

<?php get_template_part('template-parts/front-page', 'carousel'); ?>

<div class="main">
    <?php get_template_part('template-parts/front-page', 'news'); ?>
    <?php get_template_part('template-parts/front-page', 'push'); ?>
    <?php get_template_part('template-parts/front-page', 'about'); ?>
    <?php get_template_part('template-parts/front-page', 'activity'); ?>
    <?php get_template_part('template-parts/front-page', 'service'); ?>
    <?php get_template_part('template-parts/front-page', 'contact'); ?>
</div>

<?php get_footer(); ?>
