<!DOCTYPE html>
<html lang="sv">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Sora:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="icon"
      href="<?= get_template_directory_uri(); ?>/images/favicon-dark.png"
      type="image/png"
      media="(prefers-color-scheme: light)"
    />
    <link
      rel="icon"
      href="<?= get_template_directory_uri(); ?>/images/favicon-light.png"
      type="image/png"
      media="(prefers-color-scheme: dark)"
    />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css" />
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <a id="logo" href="<?= get_home_url(); ?>">
        <img src="<?= get_template_directory_uri(); ?>/images/favicon-light.png" alt="Technologiskt moln logga" />
        FixIT
      </a>
      <nav>
        <ul>
          <?php wp_nav_menu(array('theme_location' => 'main-nav')); ?>
          <li><a class="btn" href="<?= get_home_url(); ?>/#contact">Boka support</a></li>
        </ul>
      </nav>
    </header>