<?php
	function GO_customize_register($wp_customize) {

		//Extra-cabecalho
		$wp_customize -> add_section('ExtraC', array(
			'title' => __('Extra-cabecalho', 'Geeko! Theme'),
			'description' => sprintf(__('Opções para o Extra-cabecalho', 'Geeko! Theme')),
			'priority' => 20
		));

		/////////////////// Titulo

		$wp_customize -> add_setting('extracabelhado_title', array(
			'default' => _x('', 'Geeko! Theme'),
			'type' => 'theme_mod'
		));

		$wp_customize -> add_control('extracabelhado_title', array(
			'label' => __('Título do Extra-cabecalho'),
			'section' => 'ExtraC',
			'priority' => 1
		));

		/////////////////// Link do titulo

		$wp_customize -> add_setting('extracabelhado_title_link', array(
			'default' => _x('', 'Geeko! Theme'),
			'type' => 'theme_mod'
		));

		$wp_customize -> add_control('extracabelhado_title_link', array(
			'label' => __('Link do Título do Extra-cabecalho'),
			'section' => 'ExtraC',
			'priority' => 2
		));


		//Opções para o cabeçalho
		$wp_customize -> add_section('cabecalho', array(
			'title' => __('Cabeçalho (Beta)', 'Geeko! Theme'),
			'description' => sprintf(__('Opções para o cabeçalho', 'Geeko! Theme')),
			'priority' => 21
		));

		/////////////////// Link da imagem do cabeçalho

		$wp_customize -> add_setting('cabecalho_url_image', array(
			'default' => _x('', 'Geeko! Theme'),
			'type' => 'theme_mod'
		));

		$wp_customize -> add_control('cabecalho_url_image', array(
			'label' => __('Link da imagem do cabeçalho'),
			'section' => 'cabecalho',
			'priority' => 1
		));

		/////////////////// Desativar/Ativar botão de seguir

		//Rodapé
		$wp_customize -> add_section('Rodape', array(
			'title' => __('Rodapé', 'Geeko! Theme'),
			'description' => sprintf(__('Opções para o rodapé', 'Geeko! Theme')),
			'priority' => 22
		));

		/////////////////// Link da imagem do cabeçalho

		$wp_customize -> add_setting('texto_footer_companhia', array(
			'default' => _x('', 'Geeko! Theme'),
			'type' => 'theme_mod'
		));

		$wp_customize -> add_control('texto_footer_companhia', array(
			'label' => __('Texto do Footer sobre a empresa'),
			'section' => 'Rodape',
			'priority' => 1
		));

	}

	add_action('customize_register', 'GO_customize_register');
?>