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
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
    <?php wp_head(); ?>
  </head>
  <body>

    <?php get_header(); ?>
    
    <div id="GO_Konteyner" class="container pb-4">

      <nav id="GO_NavigationMenu" class="mb-2 pt-2 row justify-content-between d-none">
            <h4 class="font-weight-bolder text-dark"><span class="border-bottom pb-2">Sobre o que</span> deseja ler?</h4>
          
            <ul class="nav">
                          <?php
                wp_nav_menu( array(
                  'theme_location'    => 'PostNavigation',
                  'depth'             => 2,
                  'container'         => false,
                  'menu_class'        => 'nav',
                  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
                <!-- <i class="fas fa-comment-alt"></i> -->
            </ul>
          </nav>

      <?php
        // Args
        $Args_PostsDestacados = array(
          'post_type' => 'post',
          'posts_per_page' => 4,
          'category_name' => 'Destaque'
        );

        $categories = get_the_category();

        //Query
        $Query_PostsDestacados = new WP_Query( $Args_PostsDestacados );
      ?>

      <section id="GO_PostDestacado" class="row pb-3 d-none">
        <?php
        // Verificação e Loop
        if( $Query_PostsDestacados->have_posts()) : while ( $Query_PostsDestacados->have_posts()) : $Query_PostsDestacados->the_post();
        ?>
          <a href="<?php the_permalink(); ?>" class="col-3 m-0 p-0 border-left">
            <article class="d-flex align-items-end">
              <div class="data">
                <p class="text-white mb-1 font-weight-bold">
                    <i class="fas fa-calendar-day"></i>
                    <time>
                      <?php
                        if (get_the_date('d/m/Y') == date('d/m/Y')) {
                          Echo 'Hoje';
                        } else if(date('m/Y') == get_the_date('m/Y') && (date('d') - get_the_date('d')) == 1 ) {
                          Echo 'Ontem';
                        } else {
                          echo get_the_date();
                        }
                      ?>
                    </time>
                </div>
              <div class="d-flex justify-content-between align-items-end info_area" style="z-index: 21 !important;">
                  <div class="GO_author ml-2">
                  </p>
                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
                    <span class="mx-1 my-2 text-white"><?php the_author(); ?></span>
                  </div>
                
              </div>
              <?php the_post_thumbnail('post-thumbnail', array('class' => '  ImagemDestacada')); ?>
              <div class="row mx-0 mb-3" style="z-index: 20">
                <div class="col-12">
                  <?php for ($i=0; $i < count($categories) ; $i++) { ?>
                    <span class="badge badge-danger text-white mb-2 px-2 py-1 GO_badge">
                      <?php
                        if ( ! empty( $categories && $categories[$i]->name !== 'Yay') ) {
                            echo esc_html( $categories[$i]->name );   
                        } 
                      ?>
                    </span>
                  <?php } ?>
                </div>
                <div class="col-12 mb-5">
                  <h3 class="text-white font-weight-bold"><?php the_title(); ?></h3>
                </div>
              </div>
            </article>
          </a>
        
        <?php endwhile; endif; wp_reset_query(); ?>
      </section>

      <section id="GO_PostMenu" class="py-2">
      <div class="row">
        <div class="col-12">
          <div class="row">
            
            <?php
            $primeira_consulta = new WP_Query( 
                array(  
                    'posts_per_page' => 6,    // Apenas 5 posts
                ) 
            );

            $nao_repetir = array();

            if($primeira_consulta->have_posts()) : while($primeira_consulta->have_posts()) : $primeira_consulta->the_post(); 
                get_template_part('content', get_post_format());
                // Preenche o array -->
                $nao_repetir[] = $post->ID;
             endwhile;
            else : get_404_template(); endif; ?>
            <?php wp_reset_postdata(); ?>
          </div>

        </div>
        <?php get_sidebar(); ?>
        </div>
      </section>
      <section class="row d-flex justify-content-center">
        <div class="jumbotron m-3">
          <div class="col-8">
            <h1 class="display-4">Redes Sociais</h1>
            <p class="lead">Também estamos nas mídias sociais que você está! Para receber notificações nessas redes sociais, gostariamos que você nos seguisse nelas. 😘</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
          </div>
          <div class="col-4">
            
          </div>
        </div>
      </section>
      
      <section class="row">
        <div class="col-12">
          <div class="row">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <?php if ( in_array($post->ID, $nao_repetir, true)) continue; ?>

                <?php get_template_part('content', get_post_format()); ?>
                
            <?php endwhile; ?>
            <?php else : get_404_template(); endif; ?>
          </div>
        </div>

        </div>
      </section>
    </div>

<?php get_footer(); ?>