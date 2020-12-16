<?php
/**Tags */
add_theme_support('title-tag');
/**Img mises en avant sur articles */
add_theme_support('post-thumbnails');
/**Mettre logo dans administration */
add_theme_support('custom-logo');
/**Charger CSS & Style directement */
function theme_enqueue_styles() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
}
/**Mettre dans script Wordpress */
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

/**Enregistrer le menu */
register_nav_menus( array(
    'main' => 'Menu Principal',
));

