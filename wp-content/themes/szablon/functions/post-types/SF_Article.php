<?php

include_once "SF_post.php";
class SF_Article extends SF_abstract_post
{
    public static $name = 'Article';
    public static $slug = 'article';

    public function actionHooks()
    {
        add_shortcode('article',[$this,'getAll'] );
    }

    public function createPost()
    {
        $label = array(
            'name' => _x(self::$name, 'tag'),
            'singular_name' => _x(self::$name, 'tag'),
            'add_new' => _x('Dodaj', 'tag'),
            'add_new_item' => _x('Dodaj', 'tag'),
            'menu_name' => _x(self::$name, 'tag')
        );

        $args = array(
            'labels' => $label,
            'hierarchical' => false,
            'supports' => array(
                'title',
                'editor'
            ),
            'public' => true,
            'has_archive' => false,
        );

        register_post_type(self::$slug, $args);
    }
    public function createMeta($meta_boxes)
    {
        $prefix = 'sf_';
        $meta_boxes[] = array(
            'title'      => __( 'Extra', 'tag' ),
            'id'         => 'untitled',
            'post_types' => array(self::$slug),
            'context'    => 'normal',
            'priority'   => 'high',
            'autosave'   => true,
            'fields'     => array(

                array(
                    'name' => __( 'Extra Text', 'tag' ),
                    'id'   => "{$prefix}1",
                    'type' => 'text',
                ),
                array(
                    'name' => __( 'Treść Posta', 'tag' ),
                    'id'   => "{$prefix}title_area",
                    'type' => 'textarea',
                ),
            ),
        );
        return $meta_boxes;
    }
    public static function getArticle(){
         $args = array(
            'post_type' => static::$slug,
            'post_status' => 'publish',
            'order' => 'DESC'
         );
        $content = new WP_Query( $args );

        if( $content->have_posts() ) {
            while ( $content->have_posts() ) {
            $content->the_post();
            echo get_the_title();
            the_content();?><br>
            <?php
            }
        }
    }
}