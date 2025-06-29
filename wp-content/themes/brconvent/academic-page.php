<?php
/**
 *  Template Name: Academics Page
 **/
get_header();
?>
    <main role="main" id="mainContent">
        <?php get_template_part('templates/academic/header'); ?>
        <?php get_template_part('templates/academic/curriculum'); ?>
        <?php get_template_part('templates/academic/academic'); ?>
        <?php get_template_part('templates/academic/teaching'); ?>
</main>
<?php get_footer(); ?>