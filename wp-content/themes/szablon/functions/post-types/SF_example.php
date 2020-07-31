<?php

class SF_example extends SF_abstract_post
{
	public static $name = 'Example title';
	public static $slug = 'example_slug';

	public function createPost() {
		$labels = array(
			'name' => _x(self::$name, 'tag'),
			'singular_name' => _x(self::$name, 'tag'),
			'add_new' => _x('Dodaj', 'tag'),
			'add_new_item' => _x('Dodaj', 'tag'),
			'edit_item' => _x('Edytuj', 'tag'),
			'new_item' => _x('Nowy', 'tag'),
			'view_item' => _x('Zobacz', 'tag'),
			'search_items' => _x('Szukaj', 'tag'),
			'not_found' => _x('Brak obiektów', 'tag'),
			'not_found_in_trash' => _x('Brak obiektów w koszu', 'tag'),
			'parent_item_colon' => _x('Rodzic:', 'tag'),
			'menu_name' => _x(self::$name, 'tag'),
		);

		$args = array(
			'labels' => $labels,
			'hierarchical' => false,
			'supports' => array('title', 'page-attributes', 'editor'),
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 26,
			'menu_icon' => 'dashicons-portfolio',
			'show_in_nav_menus' => true,
			'publicly_queryable' => false,
			'exclude_from_search' => true,
			'has_archive' => false,
			'query_var' => false,
			'can_export' => true,
			'capability_type' => 'post'
		);

		register_post_type(self::$slug, $args);

	}


	public function createMeta($meta_boxes){
		$prefix = 'sf_';
		$meta_boxes[] = array(
			'id'         => 'standard2',
			'title'      => __( 'Basic data', 'tag' ),
			'post_types' => array( self::$slug ),
			'context'    => 'normal',
			'priority'   => 'low',
			'autosave'   => true,
			'fields'     => array(

				array(
					'name' => __( 'example', 'tag' ),
					'id'   => "{$prefix}example",
					'type' => 'checkbox',
				),


			)
		);
		return $meta_boxes;
	}


}