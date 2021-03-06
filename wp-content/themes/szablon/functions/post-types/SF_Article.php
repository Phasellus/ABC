<?php

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

        return $meta_boxes;
    }
    public static function getNews(){
        $post_page = 3; //Ilosc postów wyswietlanych na jednej stonie
        $counter = 0;
         $args = array(
            'post_type' => static::$slug,
            'post_status' => 'publish',
             'posts_per_page' => $post_page,
            'order' => 'DESC'
         );
        $content = new WP_Query( $args );

        if($content->have_posts())  {
            while ( ($content->have_posts()) && ($post_page>$counter)){
            $content->the_post();?>
                <div class="newsList__item">
                    <div class="newsItem">
                        <div class="newsItem__box">
                            <div class="newsItem__item"><img class="newsItem__img" src="<?php the_post_thumbnail('Article'); ?></div>
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
                $counter++;
            }

        }
    }
}