<?php
// Enqueue parent theme styles
function taulignan_enqueue_styles() {
	wp_enqueue_style( 'child-style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'taulignan_enqueue_styles' );


// Autoriser l'importation des svg
function taulignan_allow_svg_upload($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'taulignan_allow_svg_upload');



