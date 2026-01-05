<?php get_header(); ?>
<main>
    <section id="post">
        <?php
            if(have_posts()){
              while(have_posts()) {
                the_post();
                  ?>
                  <article>
                    <h1><?php the_title(); ?></h1>
                    <?php if(has_post_thumbnail()){ the_post_thumbnail(); } ?>
                      <p>
                        <?php the_content(); ?>
                      </p>
                  </article>
                  <?php
              }
            }
        ?>
    </section>
</main>
<?php get_footer(); ?>