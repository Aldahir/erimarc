<?php
/**
 * Ficheiro Functions
 * 
 * Template Name: IMFC Consulting
 *
 * @author Aldair Cajicua
 * @package IMFC Consulting
 * @since IMFC Consulting v1.0.1
 * @year 2022
 */
?>

<?php
	
	function load_styles(){
		/*wp_register_style();*/
		wp_register_style('style', get_stylesheet_uri(), [], filemtime(get_template_directory() .'/style.css'), 'all');
        wp_register_style('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/css/bootstrap.min.css', '', NULL, '');
        wp_register_style('font', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css', '', NULL, '');
		
		wp_register_script('bundle', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.bundle.min.js', '',null, true);
		wp_register_script('fawn', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js', '',null, true);
        wp_register_script('load', get_template_directory_uri() . '/assets/js/script.js', '', filemtime(get_template_directory() .'/assets/js/script.js'), true);
		
		wp_enqueue_style('bootstrap');
        wp_enqueue_style('style');
        wp_enqueue_style('font');
        
        wp_enqueue_script('bootstrap');
        wp_enqueue_script('bundle');
        wp_enqueue_script('fawn');
        wp_enqueue_script('load');
	}
	
	function register_widget_areas() {
		register_sidebar( array (
            'name' => 'Contacts Area',
            'id' => 'contacts_area',
            'before_widget' => '<div id="%1$s" class="widget-container">',
            'after_widget' => '<span class="divisor my-4"></span></div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );
		
		register_sidebar( array (
            'name' => 'Menu Footer Area',
            'id' => 'menu_footer_area',
            'before_widget' => '<div id="navbarSupportedContent" class="d-lg-flex justify-content-end collapse navbar-collapse">',
            'after_widget' => '</div>',
        ) );

        register_sidebar( array (
            'name' => 'Address Area',
            'id' => 'address_area', 
            'before_widget' => '',
            'after_widget' => "",
            'before_title' => '',
            'after_title' => '',
        ) );

        register_sidebar( array (
            'name'  => __('Social Media'),
            'id'    => 'social_media_area',
		    'class' => 'p-0',
            'description' => __('Area de widget do rodape'),
            'before_widget' => '<div id="%1$s" class="widget-container">',
            'after_widget' => '<span class="divisor my-4"></span></div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ) );

        // Footer
        register_sidebar( array (
            'name' => 'Footer',
            'id' => 'footer_area_four', 
		    'class'          => 'col-md-4',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h3 class="footer-heading mb-4 widget-title">',
            'after_title' => '</h3>',
            'before_sidebar' => '<div class="%2$s">',
            'after_sidebar' => '</div>'
        ) );
	}
	
	/*function add_widget_support(){}
	
	function add_widget_support(){}*/
	
	function woocommerce_support(){ add_theme_support('woocommerce'); }
	
	function my_menu(){
		register_nav_menus(
			array(
				'top-menu' => __('Top Menu', 'theme'),
				'footer-menu' => __('Footer Menu', 'theme'),
				'right-footer-menu' => __('Right Footer Menu', 'theme'),
			)
		);
	}
	add_action('init', 'my_menu');
	add_action('widgets_init', 'register_widget_areas');
	add_action('wp_enqueue_scripts', 'load_styles');
	
	add_theme_support('menus');
	add_theme_support('align-wide');
	add_theme_support('title-tag');
	add_theme_support('widgets');
	add_theme_support('start-content');
	add_theme_support('post-thumbnails');
?>