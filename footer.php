<?php wp_footer(); ?>

	<footer class="container-fluid bg-danger border-dark p-4">
		<div class="container">
			<div class="row">
				<div class="col-4">
					<img class="img-fluid logoFooter pr-5 pl-2" src="<?php bloginfo('template_url'); ?>/source/img/GeekoWhite.png">
					<p class="texto text-white text-justify px-3 mt-2"><?php echo get_theme_mod('texto_footer_companhia'); ?></p>
				</div>
		         <?php //Adiciona um formulário de buscas
		            dynamic_sidebar('Footer');
		           ?>
			</div>
		</div>
	</footer>

  </body>
</html>