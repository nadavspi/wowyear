<?php
/**
 * Custom shortcodes 
 *
 * @package WowYear
 */

//[svg-logo]
function logo_func( $atts ){
  extract(shortcode_atts(array(
        'src' => 'NBC',
     ), $atts));
  // return '<object data="wp-content/themes/wowyear/images/logos/' . $src .'.svg" type="image/svg+xml" class="svg-content"><!--[if lte IE 8 ]--><img src="images/logos/' . $src . '.png" alt="NBC"><!--![endif]--></object>';
  return '<img src="wp-content/themes/wowyear/images/logos/' . $src . '.png" alt="' . $src . '">';
}
add_shortcode( 'logo', 'logo_func' );

//[center-img]
function center_img_func( $atts ){
  extract(shortcode_atts(array(
        'src' => '',
        'alt' => '',
     ), $atts));
  return '<div class="u-textCenter"><img src="' . get_template_directory_uri() . '/images/' . $src . '" alt="' . esc_attr($alt) . '"></div>';
}
add_shortcode( 'img-center', 'center_img_func' );

//[img]
function img_func( $atts ){
  extract(shortcode_atts(array(
        'src' => '',
        'alt' => '',
        'class' => '',
     ), $atts));
  return '<img src="' . get_template_directory_uri() . '/images/' . $src . '" alt="' . esc_attr($alt) . '" class="' . esc_attr($class) . '">';
}
add_shortcode( 'img', 'img_func' );