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
            'posts_per_page' => 5,
            'paged' => $paged
        );
        global $wp_query;
        $query = new WP_Query( $args );

        if( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                $query->the_post();?>
                <div class="newsList__item">
                    <div class="newsItem -row">
                        <div class="newsItem__wrapper">
                            <div class="newsItem__column"><a class="newsItem__link" href="#"><img class="newsItem__img" src="<?php echo TEMP_URI; ?>./assets/images/newsList/meetup.png"></a></div>
                            <div class="newsItem__column">
                                <div class="newsItem__contentBox">
                                    <div class="newsItem__contentItem"><span class="newsItem__date"><?php echo get_the_date(); ?> </span></div>
                                    <div class="newsItem__contentItem"><a class="newsItem__link" href="#"><span class="newsItem__title"><?php
                                                echo get_the_title();
                                                ?></span></a></div>
                                    <div class="newsItem__contentItem">
                                        <p class="newsItem__text">
                                            <?php
                                            the_content();?></p></div>
                                    <div class="newsItem__contentItem -btn"><a class="newsItem__btn" href="#">Zobacz</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>           <?php }
        }
    }
}