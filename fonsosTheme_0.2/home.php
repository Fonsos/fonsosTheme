<?php
/**
 * Fonsos.
 *
 * This file adds the landing page template to the Fonsos Theme.
 *
 * Template Name: FS_Landing
 *
 * @package Fonsos
 * @author  Fonso_s & StudioPress
 * @license GPL-2.0+
 * @link    fonsos.com
 */

//Eliminar la información de los post

remove_action( 'genesis_entry_header', 'genesis_post_info', 12);

//Eliminar la meta información de los post
remove_action( 'genesis_entry_footer', 'genesis_post_meta');

//mover la imagen destacada de posición
remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8);
add_action( 'genesis_entry_header', 'genesis_do_post_image', 1);


// Runs the Genesis loop.
genesis();