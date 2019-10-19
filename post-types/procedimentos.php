<?php
function procedimentos_post_type() {
	$labels = array(
		'name'                => _x( 'Procedimentos', 'Post Type General Name', 'fvw' ),
		'singular_name'       => _x( 'procedimento', 'Post Type Singular Name', 'fvw' ),
		'menu_name'           => __( 'Procedimentos', 'fvw' ),
		'name_admin_bar'      => __( 'Procedimentos', 'fvw' ),
		'parent_item_colon'   => __( 'Parent procedimento:', 'fvw' ),
		'all_items'           => __( 'Todos Procedimentos', 'fvw' ),
		'add_new_item'        => __( 'Novo procedimento', 'fvw' ),
		'add_new'             => __( 'Add novo', 'fvw' ),
		'new_item'            => __( 'Novo procedimento', 'fvw' ),
		'edit_item'           => __( 'Editar procedimento', 'fvw' ),
		'update_item'         => __( 'Atualizar procedimento', 'fvw' ),
		'view_item'           => __( 'Visualizar procedimento', 'fvw' ),
		'search_items'        => __( 'Buscar procedimento', 'fvw' ),
		'not_found'           => __( 'Not found', 'fvw' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'fvw' ),
	);
	$args = array(
		'label'               => __( 'procedimento', 'fvw' ),
		'description'         => __( 'Procedimentos', 'fvw' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor','thumbnail'),
		'taxonomies'          => array( '' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		//'menu_icon'			  => 'dashicons-carrot',
		'menu_position'       => 6,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'taxonomies'          => array( 'category' ),
		'rewrite'             => array( 'slug' => '' ),
	);
	register_post_type( 'procedimentos', $args );
	flush_rewrite_rules();
}
// Hook into the 'init' action
add_action( 'init', 'procedimentos_post_type', 0 );