<?php
include "SF_post.php";
class SD_NewPlan extends SF_abstract_post
{
    public static $name = 'Subscription';
    public static $slug= 'access_plan';	public function createPost() {
    $labels = array(
        'name' => _x(self::$name, 'camero'),
        'singular_name' => _x(self::$name, 'camero'),
        'menu_name' => _x(self::$name, 'camero'),
    );		$args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'supports' => array('title', 'page-attributes','editor'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 23.2,
        'menu_icon' => 'dashicons-clipboard',
        'show_in_nav_menus' => true,
        'publicly_queryable' => false,
        'exclude_from_search' => true,
        'has_archive' => false,
        'query_var' => false,
        'can_export' => true,
        'capability_type' => 'post'
    );		register_post_type(self::$slug, $args);
}	public function createMeta($meta_boxes){
    $prefix = 'sf_';
    $new = array(
        'id'         => 'standard2',
        'title'      => __( 'Basic data', 'camero' ),
        'post_types' => array( self::$slug ),
        'context'    => 'normal',
        'priority'   => 'low',
        'autosave'   => true,
        'fields'     => array(				array(
            'name' => __( 'Price', 'camero' ),
            'id'   => "{$prefix}price",
            'type' => 'text',
        ),
            array(
                'type' => 'divider',
            ),
            array(
                'name' => __( 'Trial access', 'camero' ),
                'id'   => "{$prefix}trial",
                'type' => 'checkbox',
            ),
            array(
                'name' => __( 'Press card holder', 'camero' ),
                'id'   => "{$prefix}card",
                'type' => 'checkbox',
            ),
            array(
                'name' => __( 'Upload photo limit', 'camero' ),
                'id'   => "{$prefix}photo_limit",
                'type' => 'number',
            ),
            array(
                'type' => 'divider',
            ),
            array(
                'name' => __( 'TOP COVER PHOTO', 'camero' ),
                'id'   => "{$prefix}bg_img",
                'type' => 'number',
            ),
            array(
                'name' => __( 'Photo categories', 'camero' ),
                'id'   => "{$prefix}cats",
                'type' => 'number',
            ),
            array(
                'name' => __( 'Follow me links', 'camero' ),
                'id'   => "{$prefix}social",
                'type' => 'number',
            ),
            array(
                'name' => __( 'Short biography', 'camero' ),
                'id'   => "{$prefix}bio",
                'type' => 'checkbox',
            ),				array(
                'name' => __( 'Photo gallery', 'camero' ),
                'id'   => "{$prefix}photo_gallery",
                'type' => 'number',
            ),
            array(
                'name' => __( 'Gallery video', 'camero' ),
                'id'   => "{$prefix}grid_gallery",
                'type' => 'number',
            ),
            array(
                'name' => __( 'Other publication (LINKS)', 'camero' ),
                'id'   => "{$prefix}publish",
                'type' => 'number',
            ),
            array(
                'name' => __( 'MY GEAR', 'camero' ),
                'id'   => "{$prefix}gear",
                'type' => 'number',
            ),
            array(
                'name' => __( 'Logotype', 'camero' ),
                'id'   => "{$prefix}logotype",
                'type' => 'checkbox',
            ),
            array(
                'name' => __( 'Skills', 'camero' ),
                'id'   => "{$prefix}skills",
                'type' => 'number',
            ),
            array(
                'name' => __( 'Photography awards', 'camero' ),
                'id'   => "{$prefix}photography",
                'type' => 'checkbox',
            ),
            array(
                'name' => __( 'Hire me button', 'camero' ),
                'id'   => "{$prefix}hireme",
                'type' => 'checkbox',
            ),
            array(
                'name' => __( 'Buy photo button', 'camero' ),
                'id'   => "{$prefix}buy_photo",
                'type' => 'checkbox',
            ),
            array(
                'name' => __( 'More of my work', 'camero' ),
                'id'   => "{$prefix}moreof",
                'type' => 'number',
                'std' => 2,
            ),
            array(
                'name' => __( 'Member of', 'camero' ),
                'id'   => "{$prefix}member",
                'type' => 'number',
            ),
            array(
                'name' => __( 'I recommend', 'camero' ),
                'id'   => "{$prefix}recommend",
                'type' => 'number',
            ),
            array(
                'name' => __( 'Hide other photographs', 'camero' ),
                'id'   => "{$prefix}hide_photographs",
                'type' => 'checkbox',
            ),
            array(
                'name' => __( 'Hide testimonials', 'camero' ),
                'id'   => "{$prefix}hide_testi",
                'type' => 'checkbox',
            ),
            array(
                'name' => __( 'Short footer', 'camero' ),
                'id'   => "{$prefix}short_footer",
                'type' => 'checkbox',
            ),
            array(
                'name' => __( 'Tools access', 'camero' ),
                'id'   => "{$prefix}tools_acc",
                'type' => 'text',
            ),
            array(
                'name' => 'All tools - tip',
                'id'   => "{$prefix}tools_acc_text",
                'type' => 'textarea',
            ),
        )
    );		$meta_boxes[] = $new;
    return $meta_boxes;
}	/**
 * @return WP_Post
 */
    public static function getBestPlan(){
        $args = array(
            'post_type' => self::$slug,
            'post_status' => 'publish',
            'limit' => 1,
            'order' => 'DESC',
            'orderby' => 'menu_order',
        );
        return get_posts($args)[0];
    }	/**res:ner-page=3
 * @return WP_Post|null
 */
    public static function getStartPlan(){
        $args = array(
            'post_type'  => static::$slug,
            'nopaging'   => true,
            'orderby'    => 'menu_order',
            'order'      => 'DESC',
            'meta_query' => array(
                'relation' => 'AND',
                array(
                    'key'     => 'sf_trial',
                    'value'   => 1,
                    'compare' => '='
                )
            ),
        );
        return get_posts( $args )[0];
    }
    static function getByProduct($id){
    $res = self::getSpecific('sf_product',$id);
    return empty($res) ? null : $res[0];
}

public static function getAllToBuy() {
    $args = array(
        'post_type'  => static::$slug,
        'nopaging'   => true,
        'orderby'    => 'menu_order',
        'order'      => 'ASC',
        'meta_query' => array(
            'relation' => 'AND',
            array(
                'key'     => 'sf_trial',
                'value'   => 1,
                'compare' => '!='
            ),
            array(
                'key'     => 'sf_card',
                'value'   => 1,
                'compare' => '!='
            )
        ),
    );		return get_posts( $args );
}	/**
 * @return WP_POST
 */
    public static function getCardHolderPlan(){
        $args = array(
            'post_type'  => static::$slug,
            'nopaging'   => true,
            'orderby'    => 'menu_order',
            'order'      => 'DESC',
            'meta_query' => array(
                'relation' => 'AND',
                array(
                    'key'     => 'sf_card',
                    'value'   => 1,
                    'compare' => '='
                )
            ),
        );		return get_posts( $args )[0];
    }
}