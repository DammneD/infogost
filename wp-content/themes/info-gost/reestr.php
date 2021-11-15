<?php 
/*
Template Name: База кодов
Template Post Type: post, page, product
*/
?>
<?php get_header(); ?>
<section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                	<?php get_template_part('template-parts/sidemenu'); ?>
                	<div class="specialist">
                        <img src="<?php bloginfo('template_directory'); ?>/img/specialist.png" alt="Specialist">
                        <div class="specialist__content">
                            <h4>
                                Оксана Лоскутова
                            </h4>
                            <p>
                                Ведущий специалист сертификации
                            </p>
                            <p>
                                <span>Тел: </span> +7 (343) 311-62-80
                            </p>
                            <p>
                                <span>Skype: </span> <a href="#">gortestural</a>
                            </p>
                            <p>
                                <a href="#">vk.com/oksanaloskutova</a>
                            </p>
                        </div>
                    </div>
                </div>  
                <div class="col-md-8">
                    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
                    <div class="registry">
                        <h2>
                            Реестр штрих-кодов
                        </h2>
                        <p>
                            Здесь вы можете скачать бланк заявки на разработку и регистрацию штрих-кода. В нем собраны все вопросы, которые необходимы для оформления документов. Это позволит нашим специалистам сократить время на обработку документов и ответить на ваш запрос максимально быстро.
                        </p>
                        <a href="#">Заявка на штрих-кодирование</a>
                        <div class="registry-search">
                            <div class="searching-registry">
                                <form action="#" class="searching__form registry-form">
                                    <button class="searching__btn" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <input type="text" class="searching__input w-100" placeholder="Поиск по ИНН">       
                                    <select class="selectpicker">
                                        <option>По ИНН</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>
                                </form>
                                  
                            </div>                            
                        </div>
                    </div>                                        
                </div>              
            </div>
        </div>
    </section>  

   <?php get_template_part('template-parts/partners'); ?>
   <?php get_template_part('template-parts/footer'); ?>