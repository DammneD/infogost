<?php 
/*
Template Name: Вопрос-ответ
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
                    <div class="question-main">
                        <h2>
                            Вопрос-ответ  
                        </h2>
                        <p class="question-main__text">
                            Задайте вопрос на нашем сайте и получите бесплатную консультацию специалиста!
                        </p>
                        <a href="#" class="question-main__btn showquestion">
                            Задать вопрос 
                        </a>
                        <div class="hidequestion question-form">
                        <?php echo do_shortcode( '[mideal-faq-form]' ) ; ?>
                        </div>
                        <div class="faq-answer">
                            <?php echo do_shortcode( '[mideal-faq]' ) ; ?>
                        </div>
                        
                       
                    </div>                                        
                </div>              
            </div>
        </div>
    </section>   
    <?php get_template_part('template-parts/partners'); ?>
    <?php get_template_part('template-parts/footer'); ?>

 