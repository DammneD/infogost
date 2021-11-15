<?php 
/*
Template Name: Ссылки бокового меню
Template Post Type: post, page, product
*/
?>
<?php get_header(); ?>
<section class="comments-page">
<div class="container">
	<div class="row">
        <div class="col-md-3">
            <?php get_template_part('template-parts/sidemenu'); ?>
        </div>  
        <div class="col-md-9">            
             <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
            <div class="question-main">
                <div>
                	<?php while( have_posts() ) : the_post();
                            $more = 1; // отображаем полностью всё содержимое поста
                            the_content(); // выводим контент
                        endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</div> 
</section>                  

<?php get_template_part('template-parts/partners'); ?>
<?php get_template_part('template-parts/footer'); ?>