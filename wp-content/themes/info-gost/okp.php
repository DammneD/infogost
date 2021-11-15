<?php 
/*
Template Name: Коды ОКП
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
                <div>
                	<?php while( have_posts() ) : the_post();
                            $more = 1; // отображаем полностью всё содержимое поста
                            the_content(); // выводим контент
                        endwhile; ?>
                        <div class="news-main">
                            <h2>
                                База данных ОКП
                            </h2>
                            
                            <ul class="news-main__list">
                                <li class="news-main__items">
                                    <a onclick="toggle(hidden_content)" class="news-main__content">
                                        +
                                    </a>
                                    <p class="news-main__text">
                                        <span class="font-bold">01 00000 2</span> - Электроэнергия, теплоэнергия, вода, лёд, холод
                                    </p>
                                </li>
                                <div id="hidden_content" style="display: none;">
                                    <li class="news-main__items news-main__items-special">
                                        <button class="news-main__content news-main__content-new">
                                            +
                                        </button>
                                        <p class="news-main__text">
                                            <span class="font-bold">01 00000 3</span> - Электроэнергия, теплоэнергия, вода, лёд, холод
                                        </p>
                                    </li>
                                </div>
                                <li class="news-main__items">
                                    <button class="news-main__content">
                                        +
                                    </button>
                                    <p class="news-main__text">
                                        <span class="font-bold">01 00000 3</span> - Электроэнергия, теплоэнергия, вода, лёд, холод
                                    </p>
                                </li>
                                <li class="news-main__items">
                                    <button class="news-main__content">
                                        +
                                    </button>
                                    <p class="news-main__text">
                                        <span class="font-bold">01 00000 4</span> - Электроэнергия, теплоэнергия, вода, лёд, холод
                                    </p>
                                </li>
                            </ul>      
                        </div>                                        
                    </div>              
                </div>
            </div>
            </div>
        </div>
    </div>
</div>              
    </section>   
     <script>
        function toggle(el) {
        el.style.display = (el.style.display == 'none') ? '' : 'none'
        $('.news-main__content').toggleClass('active');
        }
    </script>            

<?php get_template_part('template-parts/partners'); ?>
<?php get_template_part('template-parts/footer'); ?>