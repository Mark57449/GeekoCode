<div class="col-3 col-md-0 col-sm-0 col-lg-3 col-xl-3"> </div>
<aside class="col-3 d-none d-md-none d-sm-none d-xl-block d-lg-block fixed-top">
	<div class="row my-0 pr-3 d-flex align-self-stretch">
		<div class="SideBar container-fluid bg-danger p-0">
			<div class="col-12 p-0">

				<?php get_header(); ?>

					<!-- <img class="img-fluid logoFooter pr-5 pl-2" src="<?php //bloginfo('template_url'); ?>/source/img/GeekoWhite.png">
					<p class="texto text-white text-justify px-3 mt-2"><?php //echo get_theme_mod('texto_footer_companhia'); ?></p> -->
				</div>
		         <?php //Adiciona um formulário de buscas
		            dynamic_sidebar('Footer');
		           ?>
		</div>
	</div>
	<?php //get_footer(); ?>
</aside>