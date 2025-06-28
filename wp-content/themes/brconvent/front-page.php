<?php
/**
 *  Template Name: Front Page
 **/
get_header();
?>
    <main role="main" id="mainContent">
        <?php get_template_part('templates/home/slider'); ?>
        <?php get_template_part('templates/home/welcome'); ?>
        <?php get_template_part('templates/home/facility'); ?>
        <?php get_template_part('templates/home/contact'); ?>
</main>
<?php get_footer(); ?>