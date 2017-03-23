<?php
/**
 * The main template file
 *
 * @package  WordPress
 * @subpackage  SageTimber
 * @since  SageTimber 0.1
 */

$context = Timber::get_context();
$context['posts'] = Timber::get_posts();
$templates = array( 'pages/index.twig' );
if ( is_home() ) {
	array_unshift( $templates, 'pages/home.twig' );
}
Timber::render( $templates, $context );