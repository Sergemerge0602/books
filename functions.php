<?php 

add_action('wp_enqueue_scripts', 'books_media');
add_action('after_setup_theme', 'books_after_setup');
add_action('widgets_init', 'books_widgets');

	function books_media(){
		
			wp_enqueue_style('books-main', get_stylesheet_uri());
		
			wp_enqueue_script('books-main', get_template_directory_uri() . '/assets/js/jquery.js');
		}
		
	function books_after_setup(){
		
		register_nav_menu('topmenu', 'Для шапки!');
		
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'title-tag' );
	}	
	
	function books_widgets(){
		
		register_sidebar([
			'name'          => 'Sidebar Left',
			'id'            => 'sidebar-left',
			'description'   => 'Левая колонка',
			'before_widget' => '<div class="widget %2$s">',
			'after_widget'  => "</div>\n"
		]);
	}