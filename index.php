<?php get_header(); ?>
<main>
    <section id="hero">
    <div class="cta">
        <h1>
        Få <span class="highlight">hjälp samma dag</span>, inte nästa vecka
        </h1>
        <p class="subheading">
        Snabb IT-support för småföretag och kontor. Boka före kl. 12 så tar
        vi ditt ärende idag, på distans eller på plats.
        </p>
        <a class="btn" href="#contact">Boka support idag</a>
    </div>
    <svg
        height="760"
        viewBox="0 0 1300 760"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
    >
        <path
        d="M1104.32 306.708C1087.24 197.681 992.512 114 878.516 114C835.631 114 794.422 125.838 758.68 147.919C704.303 56.7391 606.409 0 497.656 0C329.654 0 192.969 136.377 192.969 304C192.969 305.039 192.969 306.115 193.007 307.154C85.0332 325.3 0 419.224 0 532C0 657.727 105.044 760 231.055 760H1068.95C1194.96 760 1300 657.727 1300 532C1300 418.261 1213.59 323.742 1104.32 306.708Z"
        fill="white"
        />
    </svg>
    </section>
    <section id="news">
    <div class="news-title">
        <h2>Nyheter</h2>
        <p class="subheading">
        Följ med i vår utveckling och ta del av nyheter, tips och trender
        inom IT och digital säkerhet.
        </p>
    </div>
    <?php 
      if(is_active_sidebar('homepage-teaser')) : ?>
      <div id="homepage-teaser">
        <?php dynamic_sidebar('homepage-teaser'); ?>
      </div>
    <?php endif; ?>
    <div class="news-container">
      <?php 
        query_posts('category_name=nyheter&posts_per_page=3');
        if(have_posts()){
          while(have_posts()) {
            the_post();
              ?>
              <article>
                <?php if(has_post_thumbnail()){ the_post_thumbnail(); } ?>
                <div class="article-content-wrapper">
                  <div class="text">
                    <h3><?php the_title(); ?></h3>
                    <p>
                      <?php the_excerpt(); ?>
                    </p>
                  </div>
                  <a class="btn" href="<?php the_permalink(); ?>">Läs mer</a>
                </div>
              </article>
              <?php
          }
        }
      ?>
    </div>
    </section>
    <section id="contact">
    <div class="contact-title">
        <h2>Boka support</h2>
        <p class="subheading">
        Har ni frågor eller vill ni boka support? Fyll i formuläret så
        kontaktar vi er. <br />
        Bokar ni före kl. 12 återkommer vi samma dag.
        </p>
    </div>
    <?= do_shortcode('[contact-form-7 id="e7f1efd" title="Kontakt"]') ?>
    </section>
</main>
<?php get_footer(); ?>