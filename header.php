<!DOCTYPE html>
  <html>
    <head <?php language_attributes(); ?>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title><?php the_title(); ?></title>
      <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <div class="collapse navbar-collapse" id="navbar-content">
          <?php
          wp_nav_menu( array(
            'theme_location' => 'primary-menu',
            'menu_id' => 'primary-menu',
            'container' => false,
            'depth' => 2,
            'menu_class' => 'navbar-nav ml-auto',
            'walker' => new Bootstrap_NavWalker(),
            'fallback_cb' => 'Bootstrap_NavWalker::fallback',
          ));
          ?>
        </div>
      </nav>
