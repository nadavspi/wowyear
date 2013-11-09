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
function img_func( $atts ){
  extract(shortcode_atts(array(
        'src' => '',
     ), $atts));
  // return '<object data="wp-content/themes/wowyear/images/logos/' . $src .'.svg" type="image/svg+xml" class="svg-content"><!--[if lte IE 8 ]--><img src="images/logos/' . $src . '.png" alt="NBC"><!--![endif]--></object>';
  return '<div class="u-textCenter"><img src="' . get_template_directory_uri() . '/images/' . $src . '" alt="' . $src . '"></div>';
}
add_shortcode( 'img', 'img_func' );