<?php
/**
 * Divi Tecnocondor Child Theme
 * Functions.php
 *
 * ===== NOTAS ==================================================================
 * A diferencia de style.css, las functions.php de un tema hijo no anulan 
 * a su homólogo del padre. En su lugar, se carga además de las funciones
 * del padre functions.php. 
 * De este modo, functions.php de un tema hijo proporciona un método inteligente 
 * y sin problemas para modificar la funcionalidad de un tema padre. 
 * 
 * 
 * =============================================================================== */
 
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
