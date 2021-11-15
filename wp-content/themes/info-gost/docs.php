<?php 
/*
Template Name: Документы по сертификации
Template Post Type: post, page, product
*/
?>
<?php get_header(); ?>
<section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php get_template_part('template-parts/sidemenu'); ?>                    
                </div>  
                <div class="col-md-8">
                    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
                    <div class="docs">
                        <h2>
                            Перечни
                        </h2>
                        <ul class="docs__list">
                            <li class="docs__item">
                                <img src="<?php bloginfo('template_directory'); ?>/img/pdf.png" alt="PDF">
                                <a href="#">
                                    Перечень на ветеринарный сертификат
                                </a>
                            </li>
                            <li class="docs__item">
                                <img src="<?php bloginfo('template_directory'); ?>/img/pdf.png" alt="PDF">
                                <a href="#">
                                    Перечень на ветеринарный сертификат
                                </a>
                            </li>
                            <li class="docs__item">
                                <img src="<?php bloginfo('template_directory'); ?>/img/pdf.png" alt="PDF">
                                <a href="#">
                                    Перечень на ветеринарный сертификат
                                </a>
                            </li>
                            <li class="docs__item">
                                <img src="<?php bloginfo('template_directory'); ?>/img/pdf.png" alt="PDF">
                                <a href="#">
                                    Перечень на ветеринарный сертификат
                                </a>
                            </li>
                            <li class="docs__item">
                                <img src="<?php bloginfo('template_directory'); ?>/img/pdf.png" alt="PDF">
                                <a href="#">
                                    Перечень на ветеринарный сертификат
                                </a>
                            </li>
                            <li class="docs__item">
                                <img src="<?php bloginfo('template_directory'); ?>/img/pdf.png" alt="PDF">
                                <a href="#">
                                    Перечень на ветеринарный сертификат
                                </a>
                            </li>
                            <li class="docs__item">
                                <img src="<?php bloginfo('template_directory'); ?>/img/pdf.png" alt="PDF">
                                <a href="#">
                                    Перечень на ветеринарный сертификат
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>              
            </div>
        </div>
    </section>

 <?php get_template_part('template-parts/partners'); ?>
 <?php get_template_part('template-parts/footer'); ?>