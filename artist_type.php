<?php
add_action( 'init', 'create_artist_type' );
function create_artist_type() {
	register_post_type( 'artist',
		array(
			'labels' => array(
				'name' => __( 'Artists' ),
				'singular_name' => __( 'Artist' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array(
			'title',
			'editor',
			'author',
			'page-attributes',
			'thumbnail'
		),
		)
	);
}
