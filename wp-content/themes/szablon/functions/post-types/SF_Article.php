<?php

include_once "SF_post.php";
class SF_Article extends SF_abstract_post
{

    public static $slug = 'post';

    public function actionHooks()
    {
    }

    public function createPost()
    {
    }
    public function createMeta($meta_boxes)
    {
    }
    public static function getNews(){
         $args = array(
            'post_type' => static::$slug,
            'post_status' => 'publish',
             'posts_per_page' => 3,
            'order' => 'DESC'
         );
        $content = new WP_Query( $args );

        if($content->have_posts())  {
            while ( $content->have_posts() ){
            $content->the_post();?>
                <div class="newsList__item">
                    <div class="newsItem">
                        <div class="newsItem__box">
                            <div class="newsItem__item"><?php the_post_thumbnail(array(300,300)) ?></div>
                            <div class="newsItem__item"><span class="newsItem__date"><?php echo get_the_date() ?></span></div>
                            <div class="newsItem__item"><span class="newsItem__title"><?php echo get_the_title() ?></span></div>
                            <div class="newsItem__item">
                                <p class="newsItem__text"><?php the_content(); ?></p>
                            </div>
                            <div class="newsItem__grow"></div>
                            <div class="newsItem__item"><a class="newsItem__btn" href="<?php get_the_permalink() ?>">Zobacz</a></div>
                        </div>
                    </div>
                </div>
            <?php
            }

        }
    }
}