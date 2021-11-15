<?php 
/*
Template Name: Новости
Template Post Type: post, page, product
*/
?>


<?php get_header(); ?>

    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                   <?php get_template_part('template-parts/sidemenu'); ?>                    
                </div>  
                <div class="col-md-9">
                     <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>  
                    <div class="news-main">
                        <h2>
                            Новости
                        </h2>
                        <ul class="news-main__list">

                        <?php 
                            $args = array(
                                'numberposts' => 2,
                                'category_name' => 'news-sert',
                                'orderby'     => 'date',
                                'order'       => 'DESC',
                                'include'     => array(),
                                'exclude'     => array(),
                                'meta_key'    => '',
                                'meta_value'  => '',
                                'post_type'   => 'post',
                                'suppress_filters' => true,
                                'paged'  => ( get_query_var('paged') ? get_query_var('paged') : 1 )

                            );
                            $posts = query_posts ( $args ); 
                            foreach($posts as $post){ setup_postdata($post); ?>
                                <!-- Начало / Вывод повторяющегося отрезка, отвечающего за одну запись -->
                                <li class="news-main__item">
                                    <div class="news-main__title">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                        <span>
                                            <?php the_time('d.m.Y'); ?>
                                        </span>                                        
                                    </div>
                                    <p>
                                         <?php the_content( $more_link_text = 'Читать далее', $strip_teaser = '1') ?>
                                    </p> 
                                </li> 
                                <!-- Конец / Вывод повторяющегося отрезка, отвечающего за одну запись -->
                            <?php   
                            }                              
                            wp_reset_postdata(); // сброс
                        ?>                    
                       </ul>                    
                       <div class="pager-nav"> 
                       <?php wp_pagenavi(); ?>
                       </div>
                    </div>                                        
                </div>              
            </div>
        </div>
    </section>   

    <?php get_template_part('template-parts/partners'); ?>
    <?php get_template_part('template-parts/footer'); ?>