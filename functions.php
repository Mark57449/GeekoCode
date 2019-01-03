<?php 

	//Chamar a TAG Title e adicionar os formatos de posts
	function GO_theme_support() {
		add_theme_support('title-tag');
		add_theme_support('post-formats', array('aside', 'image'));
		add_theme_support('custom-header', array(
			'uplouds' => true,
			'default-image' => '',
			'height' => 100,
			'width' => 350
		));
		//Registro dos menus
		register_nav_menus( array(
			'PostNavigation' => __('Menu de Navegação', 'GeekoBlog')
		));
		register_nav_menus( array(
			'cabecalho' => __('Menu do Cabecalho', 'GeekoBlog')
		));
	}
	add_action('after_setup_theme', 'GO_theme_support');

	//Previnir o erro na TAG Title em versões antigas do Wordpress
	if(!function_exists('_wp_render_title_tag')) {
		function GO_render_title() {
			?>
			<title><?php wp_title('|', true, 'right'); ?></title>
			<?php
		}
		add_action('wp_head', 'GO_render_title');
	}

	//Registra o Custom Navigation Walker
	require_once get_template_directory().'/class-wp-bootstrap-navwalker.php';

	//Definir as miniaturas dos posts
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(1280, 720, true); // Recorte de imagem ideal para redes sociais.

	//Definir o tamanho do resumo
	add_filter('excerpt_length', function($length) {
		return 45;
	});

	//Definir o estilo da páginação
	add_filter('next_posts_link_attributes', 'posts_link_attributes');
	add_filter('previous_posts_link_attributes', 'posts_link_attributes');

	function posts_link_attributes() {
		return 'class="btn btn-outline-my-color-5 btn-danger"';
	}

	//Criar a barra lateral
	register_sidebar(
		array(
			'name' => 'Barra Lateral',
			'id' => 'sidebar',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '',
			'after_title' => '',
	));

	//Cria o campo de busca
	register_sidebar(
		array(
			'name' => 'Busca',
			'id' => 'busca',
			'before_widget' => '<div class="blog-search">',
			'after_widget' => '</div>',
			'before_title' => '<h5>',
			'after_title' => '</h5>',
	));

	//Widgets para o Footer
	register_sidebar(
		array(
			'name' => 'Footer',
			'id' => 'footer',
			'before_widget' => '<div class="col-2 footer_widget text-white">',
			'after_widget' => '</div>',
			'before_title' => '<h5 class="text-white mb-4">',
			'after_title' => '</h5>',
	));

	//Incluir funções de personalização
	require get_template_directory(). '/source/inc/customizer.php';

?>