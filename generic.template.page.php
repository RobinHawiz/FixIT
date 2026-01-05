<?php
/*
Template Name: Page with text content only
*/
?>

<?php get_header(); ?>
<main>
    <section id="template-page-text-only">
    <?php
        if(have_posts()){
            while(have_posts()) {
            the_post();
            ?>
                <?php the_content(); ?>
            <?php
            }
        }
    ?>
    </section>
<?php get_footer(); ?>