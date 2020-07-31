<?php
include_once "SF_post.php";

class SF_Home extends SF_abstract_post
{
    public static $slugpost = 'post';

    public function actionHooks()
    {

    }

    public function createMeta($meta_boxes)
    {
        $prefix = 'sf_';
        $meta_boxes[] = array(
            'title'      => __( 'Extra', 'tag' ),
            'id'         => 'PostMeta',
            'post_types' => array(self::$slugpost),
            'context'    => 'normal',
            'priority'   => 'high',
            'autosave'   => true,
            'fields'     => array(

                array(
                    'name' => __( 'Tytuł Posta', 'tag' ),
                    'id'   => '{$prefix}title',
                    'type' => 'text',
                ),
                array(
                    'name' => __( 'Treść Posta', 'tag' ),
                    'id'   => '{$prefix}title_area',
                    'type' => 'textarea',
                ),
            ),
        );
    return $meta_boxes;
}


    public static function getArticle(){
        $paged = get_query_var( 'paged', 1 );
        $args = array(
            'post_type' => static::$slugpost,
            'post_status' => 'publish',
            'order' => 'DESC',
            'posts_per_page' => 3,
            'paged' => $paged

        );

        global $wp_query;
        $GLOBALS['wp_the_query'] = new WP_Query( $args );

        if( $GLOBALS['wp_the_query']->have_posts() ) {
            while ( $GLOBALS['wp_the_query']->have_posts() ) {
                $GLOBALS['wp_the_query']->the_post();?>
                <div class="articleContent__title">
                <?php
                echo get_the_title();
                ?></div>
                <div class="articleContent__textBox"><img class="articleContent__image" src="<?php echo TEMP_URI; ?>/assets/articlePage/articleImage.png">
                <div class="articleContent__text"><?php
                    the_content();?></div></div><br><br><?php

            }?>
            <div class="pagination">
                <?php
                echo paginate_links( array(
                    'total'        => $GLOBALS['wp_the_query']->max_num_pages,
                    'prev_text'    => sprintf( '<i></i> %1$s', __( 'Poprzedni', 'text-domain' ) ),
                    'next_text'    => sprintf( '%1$s <i></i>', __( 'Nastepny', 'text-domain' ) ),

                ) );
                ?>
            </div>
        </div><?php
        }
    }

}