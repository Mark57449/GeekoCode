<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/source/css/bootstrap.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/source/css/style.css">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<script defer src="https://use.fontawesome.com/releases/v5.6.3/js/all.js" integrity="sha384-EIHISlAOj4zgYieurP0SdoiBYfGJKkgWedPHH4jCzpCXLmzVsw1ouK59MuUtP4a1" crossorigin="anonymous"></script>
    
    <?php //wp_head(); ?>
  </head>
  <body>
      <div class="row">
        <?php get_sidebar(); ?>
        <div class="col-md-12 col-sm-12 col-lg-9">
          <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3 border-bottom shadow-sm" style="margin-left: -20px;">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>
          
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

              <?php get_template_part('content', get_post_format()); ?>

            <?php endwhile; ?>

            <?php else : get_404_template();  endif; ?>
          
        </div>  
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php bloginfo('template_url'); ?>/source/js/jquery.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/source/js/popper.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/source/js/bootstrap.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/source/js/masonry.pkgd.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/source/js/script.js"></script>