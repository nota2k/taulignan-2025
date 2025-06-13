<?php
// Enqueue parent theme styles
function taulignan_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri());
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/slick.css', array(), '1.8.1');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/slick-theme.css', array(), '1.8.1');

    // Enregistrez d'abord jQuery
    wp_enqueue_script('jquery');

    // Ensuite, enregistrez le plugin Slick.
    // Assurez-vous de remplacer 'path/to/slick.min.js' par le chemin réel vers le fichier slick.min.js.
    wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.js', array('jquery'), '1.0', true);

    // Ensuite, enregistrez vos scripts personnalisés.
    wp_register_script('carousel', get_template_directory_uri() . '/js/carousel.js', array('jquery', 'slick'), '1.0', true);
    wp_register_script('taulignan', get_template_directory_uri() . '/js/taulignan.js', array(), '1.0', true);

    wp_enqueue_script( 'taulignan');
    wp_enqueue_script( 'carousel');
}
add_action( 'wp_enqueue_scripts', 'taulignan_enqueue_styles' );


// Autoriser l'importation des svg
function taulignan_allow_svg_upload($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'taulignan_allow_svg_upload');


function taulignan_theme_setup() {
    // Ajoute le support des images mises en avant
    add_theme_support( 'post-thumbnails' );
}

// Ajoute l'action après le paramétrage du thème
add_action( 'after_setup_theme', 'taulignan_theme_setup' );

// Add menu
function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );


// Delete <p> tag from Contact Form 7
add_filter('wpcf7_autop_or_not', '__return_false');

// Modifier les galeries natives wordpress

add_filter('post_gallery', 'galery_custom', 10, 2);
function galery_custom($output, $attr) {
    global $post;

    // Récupère les IDs des images de la galerie
    $ids_array = explode(',', $attr['ids']);

    $output = '<div class="gallery">'; // Ajoute votre classe personnalisée

    foreach($ids_array as $id) {
        $img_src = wp_get_attachment_image_src($id, 'full');

        // Vérifie si l'image est liée au média
        $link_to_media = isset($attr['link']) && $attr['link'] === 'file';

        $output .= '<div class="gallery-item">'; // Ajoute votre classe personnalisée
        if ($link_to_media) {
            $output .= '<a href="' . esc_url($img_src[0]) . '">';
        }
        $output .= '<img src="' . esc_url($img_src[0]) . '" alt="">';
        if ($link_to_media) {
            $output .= '</a>';
        }
        $output .= '</div>';
    }

    $output .= '</div>';

    return $output;
}

add_filter('post_gallery', function ($html, $attr, $instance) {
    if (isset($attr['class']) && $class = $attr['class']) {
        // Unset attribute to avoid infinite recursive loops
        unset($attr['class']);

        // Our custom HTML wrapper
        $html = sprintf(
            '<div class="%s">%s</div>',
            esc_attr($class),
            gallery_shortcode($attr)
        );
    }

    return $html;
}, 10, 3);


// Disable contact form email validator

add_filter( 'wpcf7_validate_configuration', '__return_false' );

// Set title tag
function taulignan_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'taulignan_setup' );