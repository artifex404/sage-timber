<?php
/**
 * Single page template file
 *
 * @package  WordPress
 * @subpackage  SageTimber
 * @since  SageTimber 0.1
 */

$context = Timber::get_context();

Timber::render('pages/page.twig', $context);