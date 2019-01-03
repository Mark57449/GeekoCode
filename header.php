    <header>
      
    <section id="GO_ExtraCabecalho" class="container-fluid bg-danger p-1 align-items-center">
      <div class="container d-flex justify-content-between">
        <a href="<?php echo get_theme_mod('extracabelhado_title_link', 'www.geeko.com.br'); ?>"><h6 class="pt-1 m-0"><?php echo get_theme_mod('extracabelhado_title', 'A Geeko! foi criada com muito esforço e dedicação!'); ?></h6></a>
        <nav class="d-flex justify-content-between">
          <a href="#"><i class="fab fa-instagram text-white ml-2"></i></a>
          <a href="#"><i class="fab fa-youtube text-white ml-2"></i></a>
          <a href="#"><i class="fab fa-facebook-f text-white ml-2"></i></a>
          <a href="#"><i class="fab fa-twitter text-white ml-2"></i></a>
          <a href="#"><i class="fab fa-pinterest-p text-white ml-2"></i></a>
          <a href="#"><i class="fab fa-behance text-white ml-2"></i></a>
        </nav>
      </div>
    </section> 

    <div id="GO_Cabecalho" class="container-fluid p-3 bg-gray shadow-sm" style="background: linear-gradient(rgba(0,0,0,0.05), rgba(0,0,0,0.5)), url('<?php echo get_theme_mod('cabecalho_url_image'); ?>');">
      <div class="container px-0 mt-5">
        <div class="row align-items-center d-flex justify-content-center my-1">
          <div id="GO_IdentidadeGeeko">
            <a href="<?php bloginfo('url'); ?>">
              <?php if(get_header_image() == '') { ?>
              <h1><?php bloginfo('name'); ?></h1>
              <?php } else { ?>
              <img class="LogoGeeko" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Esse é logo da Geeko!" />
              <?php } ?>
            </a>
            
            <p class="lead d-flex justify-content-center text-white"><?php bloginfo('description', 'Uma frase legal pra Geeko!'); ?></p>
          </div>
        </div>

        <nav id="GO_MenuCabecalho" class="d-flex align-content-between justify-content-between mt-5">
              <ul class="nav loginNav">
                <li class="nav-item border rounded mt-1">
                  <a href="#" class="nav-link py-1">Criar conta</a>
                </li>
                <li class="nav-item px-2 mt-1">
                  <a href="#" class="nav-link py-1">Entrar</a>
                </li>
              </ul>

              <div class="d-flex">
                <?php
                  wp_nav_menu( array(
                    'theme_location'    => 'cabecalho',
                    'depth'             => 2,
                    'container'         => false,
                    'menu_class'        => 'nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                  ) );
                ?>
                <button type="button" class="btn rounded p-0 shadow" style="background: #e6763b;">
                  <a href="#" class="nav-link text-light py-0">Seguir</a>
                </button>
                <div class="d-none">
                  <?php //Adiciona um formulário de buscas
                    dynamic_sidebar('Busca');
                  ?>
                </div>
              </div>
        </nav>
      </div>
    </div>

        <!-- <nav class="navbar navbar-expand-lg bg-danger rounded navbar-dark mb-1 role="navigation">
          <div class="container">
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <?php
            /*wp_nav_menu( array(
              'theme_location'    => 'principal',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse',
              'container_id'      => 'bs-example-navbar-collapse-1',
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker(),
            ) );*/
            ?>
          </div>
        </nav> -->

      </header>
