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

/* mostrar hero widget*/
add_action('genesis_after_header', 'fs_add_genesis_hero_widget_area');
function fs_add_genesis_hero_widget_area(){
	genesis_widget_area( 'hero-widget-area', array(
		'before' => '<section class="hero">',
		'after' => '</section>',
	) );
};

/* mostrar section widget*/
/*add_action('genesis_before_content', 'fs_add_genesis_section_widget_area');
function fs_add_genesis_section_widget_area(){
	genesis_widget_area( 'section-widget-area', array(
		'before' => '<section class="home-sections">',
		'after' => '</section>',
	) );
};*/


//Genesis Custom Loop Post
remove_action('genesis_loop', 'genesis_do_loop');
add_action('genesis_loop', 'fs_genesis_custom_loop_post');
function fs_genesis_custom_loop_post() {
	global $post;

		$args = array(
			'posts_per_page' => 3,
			'orderby' => 'date',
			'order' => 'desc',
			'post_type' => 'post',
			'post_status' => 'publish'
		);
		$myposts = get_posts( $args );

		foreach( $myposts as $post ) : setup_postdata( $post ); ?>
			<article class="fs-home-post fs-blog">
				<a href="<?php the_permalink();?>" class="fs-blog">
					<p><?php the_post_thumbnail(); ?></p>
					<h2 class="entry-title fs-entry-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
					<p class="fs-excerpt"><?php the_excerpt(); ?></p>
				</a>
			</article>
	<?php endforeach;

	wp_reset_postdata();
	
	?>
	
	<article>

		<div class="fs-home-post fs-blog">

			<img src="https://fonsos.com/wp-content/uploads/2019/01/arrow-circle-right.png" alt="" class="attachment-post-thumbnail size-post-thumbnail wp-post-image">
			<h2 class="entry-title fs-entry-title"><a href="/blog">¿Quieres leer más?</a></h2>
			<p><a href="/blog">Puedes encontrar más contenido por aquí.</a></p>
			<div style="text-align: center;"><p><a class="button section-button fs-button-blog" href="/blog">Leer más</a></p></div>

		</div>

	</article>

	<?php
	
	wp_reset_postdata();
	
	?>
	
	<?php
}


//Genesis Custom Loop Podcast
remove_action('genesis_after_loop', 'genesis_do_loop');
add_action('genesis_after_loop', 'fs_genesis_custom_loop_podcast');
function fs_genesis_custom_loop_podcast() {
	global $post;

		$args = array(
			'posts_per_page' => 3,
			'orderby' => 'date',
			'order' => 'desc',
			'post_type' => 'podcast',
			'post_status' => 'publish'
		);
		$myposts = get_posts( $args );

		foreach( $myposts as $post ) : setup_postdata( $post ); ?>
			<article class="fs-home-post fs-pods">
				<a href="<?php the_permalink();?>">
					<p><?php the_post_thumbnail(); ?></p>
					<h2 class="entry-title fs-entry-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
					<p class="fs-excerpt"><?php the_excerpt(); ?></p>
				</a>
			</article>
	<?php endforeach;

wp_reset_postdata();

?>

	<section>

		<div class="fs-home-post fs-pods">
		
		<img src="https://fonsos.com/wp-content/uploads/2019/01/fast-foward.png" alt="" class="attachment-post-thumbnail size-post-thumbnail wp-post-image">
		<h2 class="entry-title fs-entry-title"><a href="/blog/podcast">¿Quieres escuchar más?</a></h2>
		<p><a href="/podcast">Existen más episodios</a></p>
		<div style="text-align: center;"><p><a class="button section-button fs-button-pods" href="/podcast">Escuchar más</a></p></div>
		
		</div>

	</section>

	<?php
	
	wp_reset_postdata();
	
	?>
	
	<?php
}


/* mostrar footer banner widget*/
/*add_action('genesis_before_footer', 'fs_add_genesis_footbanner_widget_area');
function fs_add_genesis_footbanner_widget_area(){
	genesis_widget_area( 'footbanner-widget-area', array(
		'before' => '<section class="home-sections">',
		'after' => '</section>',
	) );
};*/

// Runs the Genesis loop.
genesis();

/*remove_action('genesis:_loop', 'genesis_do_loop');
add_action('genesis_loop', 'fs_genesis_custom_loop');
function fs_genesis_custom_loop() {
	
	global $post;

		$args = array(
			'posts_per_page' => 3,
			'offset' => 0,
			'category' => '',
			'category_name' => '',
			'orderby' => 'date',
			'order' => 'desc',
			'include' => '',
			'exclude' => '',
			'meta_key' => '',
			'meta_vlaude' => '',
			'post_type' => 'post',
			'post_mime_type' => '',
			'post_parent' => '',
			'author' => '',
			'author_name' => '',
			'post_status' => 'publish',
			'suppress_filters' => true
		);
		$myposts = get_posts( $args );

		foreach( $myposts as $post ) : setup_postdata( $post ); ?>
			<article class="fs-home-post">
				<p><a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a></p>
				<h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
				<p><a href="<?php the_permalink();?>"><?php the_excerpt(); ?></a></p>
			</article>
	<?php endforeach;

	wp_reset_postdata();

	?>

	<div class="home-cta-post">
		<a class="button">Más entradas</a>
	</div>

	<?php
}*/