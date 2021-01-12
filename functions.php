<?php
//Importar assets

function assets(){
    wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', '', '4.4.1','all');
    wp_register_style('montserrat', 'https://fonts.googleapis.com/css?family=Montserrat&display=swap','','1.0', 'all');
    wp_enqueue_style('estilos', get_stylesheet_uri(), array('bootstrap','montserrat'),'1.0', 'all');
   
    wp_register_script('popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js','','1.16.0', true);
    wp_register_script('jquery','https://code.jquery.com/jquery-3.3.1.slim.min.js','','3.3.1',true);
    

    wp_enqueue_script('boostraps', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery','popper'),'4.4.1', true);
    
    wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/custom.js', '', '1.0', true);
}

add_action('wp_enqueue_scripts','assets');


// aqui creo mi menu

if ( function_exists('register_nav_menus')) {
    register_nav_menus (array('superior' => 'Menu principal superior'));
}

//Aqui creo una clase para las <a>

add_filter( 'nav_menu_link_attributes', 'clase_menu_invento', 10, 3);
    
    function clase_menu_invento ($atts, $item, $args) {
        $class = 'nav-link';
        $atts['class'] = $class;
        return $atts;
    }


// Agregando imagenes destacadas

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    
 }

?> 