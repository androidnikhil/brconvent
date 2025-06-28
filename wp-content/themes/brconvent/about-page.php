<?php
/**
 *  Template Name: About Page
 **/
get_header();
?>
    <main role="main" id="mainContent">
        <?php get_template_part('templates/about/about-header'); ?>
        <?php get_template_part('templates/about/history'); ?>
        <?php get_template_part('templates/about/mission'); ?>
        <?php get_template_part('templates/about/principal'); ?>
        <?php get_template_part('templates/about/faculty'); ?>
</main>
<?php get_footer(); ?>