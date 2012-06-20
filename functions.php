<?php
add_action( 'init', 'register_my_menu' );

function register_my_menu() {
	register_nav_menus( array(
		'top-menu' => 'Top Menu',
		'bottom-menu' => 'Bottom Menu'
	) );
}

register_sidebars(2);
add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'c2g_products',
		array(
			'labels' => array(
				'name' => __( 'Products' ),
				'singular_name' => __( 'Product' )
			),
		'public' => true,
		)
	);
}
?>
