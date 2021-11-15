<?php get_header(); ?>
<section class="error-404">
        <div class="container">
            <div class="error-404__content">
                <h1>
                    404
                </h1>
                <img src="<?php bloginfo('template_directory'); ?>/img/404.png" class="special-error" alt="Error 404">
                <h2>
                    Страница не найдена
                </h2>
                <p class="error-404__text">
                    Перейдите <a href="<?php echo get_option('home'); ?>/">на главную</a> или обратитесь за <a href="#">консультацией к специалисту</a>
                </p>
            </div>
        </div>
    </section>
<?php get_template_part('template-parts/footer'); ?>