<?php 

    function load_assets(){

        //cargar BS
        wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');

        wp_enqueue_style('icons_css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

        //cargar BS JS
        wp_enqueue_script('bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js');

        //pertmite cargar el css del tema
        wp_enqueue_style('style', get_stylesheet_uri() );

        //js
        wp_enqueue_script( 'main_js', get_template_directory_uri() . '/main.js');
    }

    add_action('wp_enqueue_scripts', 'load_assets');


    //soporte para imagenes destacadas en paginas
    add_theme_support('post-thumbnails');

    add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
	/**
	 * Use namespaced data attribute for Bootstrap's dropdown toggles.
	 *
	 * @param array    $atts HTML attributes applied to the item's `<a>` element.
	 * @param WP_Post  $item The current menu item.
	 * @param stdClass $args An object of wp_nav_menu() arguments.
	 * @return array
	 */
	function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
		if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
			if ( array_key_exists( 'data-toggle', $atts ) ) {
				unset( $atts['data-toggle'] );
				$atts['data-bs-toggle'] = 'dropdown';
			}
		}
		return $atts;
	}


	register_nav_menus( array( 'primary' => __( 'Primary Menu', 'THEMENAME' ),));


?>