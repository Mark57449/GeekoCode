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

    
    <?php wp_head(); ?>
  </head>
  <body>

    <div class="container">
      <?php get_header(); ?>

      <div class="row">

        <div class="col-md-8 col-sm-12">

          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid rounded')); ?>

            <h3 class="mb-0 mt-4 pt-2 border-top"><?php the_title(); ?></h3>
            <p class="text-muted mb-2">Publicado em: <span class="badge badge-danger"><?php echo get_the_date('d/m/y'); ?></span></p>
            <hr>

            <?php the_content(); ?>


            <hr>

            <?php comments_template(); ?>

          <?php endwhile; ?>

          <?php else : get_404_template();  endif; ?>

        </div>

        <?php get_sidebar(); ?>

      </div>

    </div>

<?php get_footer(); ?>